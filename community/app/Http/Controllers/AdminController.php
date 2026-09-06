<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\User;
use App\Models\Crop;
use App\Models\CropDetail;
use App\Models\PestManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function allUsers()
    {
        $users = User::latest()->get();

        return view(
            'admin.dashboard',
            compact('users')
        );
    }

    public function addExpert(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'min:8',
                'confirmed',
                'regex:/[^A-Za-z0-9]/',
            ],
            'role' => 'required|in:admin,user,expert',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->role === 'admin',
            'is_expert' => $request->role === 'expert',
            'is_active' => true,
            'email_verified_at' => now(),
        ]);

        return redirect()
            ->route('admin.dashboard')
            ->with('success', is_urdu() ? ($user->name . ' کو بطور ' . ($request->role === 'expert' ? 'ماہر' : ($request->role === 'admin' ? 'منتظم' : 'صارف')) . ' کامیابی سے شامل کر دیا گیا ہے۔') : ($user->name . ' was added successfully as ' . ucfirst($request->role) . '.'));
    }

    public function dashboard()
    {
        $cropQuestions = Question::with('user')
            ->where('category', 'crop')
            ->latest()
            ->get();

        $fruitQuestions = Question::with('user')
            ->where('category', 'fruit')
            ->latest()
            ->get();

        $vegetableQuestions = Question::with('user')
            ->where('category', 'vegetable')
            ->latest()
            ->get();

        return view(
            'admin.dashboard',
            compact(
                'cropQuestions',
                'fruitQuestions',
                'vegetableQuestions'
            )
        );
    }

    public function makeExpert(Request $request)
    {
        $user = User::findOrFail($request->user_id);

        $user->is_expert = true;
        $user->is_admin = false;
        $user->save();

        return back()->with(
            'success',
            is_urdu() ? ($user->name . ' اب ماہر ہیں۔') : ($user->name . ' is now an Expert.')
        );
    }

    public function makeAdmin(Request $request)
    {
        $user = User::findOrFail($request->user_id);

        $user->is_admin = true;
        $user->is_expert = false;
        $user->save();

        return back()->with(
            'success',
            is_urdu() ? ($user->name . ' اب منتظم ہیں۔') : ($user->name . ' is now an Admin.')
        );
    }

    public function makeUser(Request $request)
    {
        $user = User::findOrFail($request->user_id);

        $user->is_admin = false;
        $user->is_expert = false;
        $user->save();

        return back()->with(
            'success',
            is_urdu() ? ($user->name . ' اب صارف ہیں۔') : ($user->name . ' is now a User.')
        );
    }

    public function toggleActive(Request $request)
    {
        $user = User::findOrFail($request->user_id);

        $user->is_active = !$user->is_active;
        $user->save();

        return back()->with(
            'success',
            is_urdu() ? ($user->name . ' کی حیثیت کامیابی سے اپ ڈیٹ کر دی گئی ہے۔') : ($user->name . ' status updated.')
        );
    }

    public function viewUserQuestions(int $id)
    {
        $user = User::findOrFail($id);

        $questions = $user->questions()
            ->with('answers.expert')
            ->get();

        return view(
            'admin.view_user_questions',
            compact('user', 'questions')
        );
    }

    public function index()
    {
        return view('admin.info');
    }

    public function usersWithQuestions()
    {
        $cropCount = Question::where('category', 'crop')
            ->where('status', 'pending')
            ->count();

        $fruitCount = Question::where('category', 'fruit')
            ->where('status', 'pending')
            ->count();

        $vegetableCount = Question::where('category', 'vegetable')
            ->where('status', 'pending')
            ->count();

        return view(
            'admin.question_categories',
            compact(
                'cropCount',
                'fruitCount',
                'vegetableCount'
            )
        );
    }

    public function reviewUserQuestions(int $id)
    {
        $user = User::findOrFail($id);

        $questions = $user->questions()
            ->where('status', 'pending')
            ->orderBy('created_at', 'desc')
            ->get();

        return view(
            'admin.review_user_questions',
            compact('user', 'questions')
        );
    }

    public function approveQuestion(Request $request)
    {
        $question = Question::findOrFail(
            $request->question_id
        );

        $question->status = 'approved';
        $question->save();

        return back()->with(
            'success',
            is_urdu() ? 'سوال کامیابی سے منظور کر لیا گیا ہے۔' : 'Question Approved Successfully.'
        );
    }

    public function rejectQuestion(Request $request)
    {
        $question = Question::findOrFail(
            $request->question_id
        );

        $question->status = 'rejected';
        $question->save();

        return back()->with(
            'success',
            is_urdu() ? 'سوال مسترد کر دیا گیا ہے۔' : 'Question Rejected Successfully.'
        );
    }

    public function postQuestionAsAdmin(Request $request)
    {
        $request->validate([
            'question_text' => 'nullable|string',
            'question_image' => 'nullable|image|max:300'
        ]);

        $imagePath = null;

        if ($request->hasFile('question_image')) {

            $folder = public_path('images/questions');

            if (!File::exists($folder)) {
                File::makeDirectory(
                    $folder,
                    0755,
                    true
                );
            }

            $image = $request->file('question_image');

            $imageName =
                time() . '_' .
                uniqid() . '_' .
                $image->getClientOriginalName();

            $image->move(
                $folder,
                $imageName
            );

            $imagePath =
                'questions/' . $imageName;
        }

        Question::create([
            'user_id' => Auth::id(),
            'question_text' => $request->question_text,
            'question_image' => $imagePath,
            'status' => 'approved'
        ]);

        return back()->with(
            'success',
            is_urdu() ? 'سوال کامیابی سے پوسٹ کر دیا گیا ہے اور ماہرین کو بھیج دیا گیا ہے۔' : 'Question posted successfully & sent to experts!'
        );
    }

    public function cropQuestions()
    {
        $questions = Question::with('user')
            ->where('category', 'crop')
            ->where('status', 'pending')
            ->latest()
            ->get();

        return view(
            'admin.crop_questions',
            compact('questions')
        );
    }

    public function fruitQuestions()
    {
        $questions = Question::with('user')
            ->where('category', 'fruit')
            ->where('status', 'pending')
            ->latest()
            ->get();

        return view(
            'admin.fruit_questions',
            compact('questions')
        );
    }

    public function vegetableQuestions()
    {
        $questions = Question::with('user')
            ->where('category', 'vegetable')
            ->where('status', 'pending')
            ->latest()
            ->get();

        return view(
            'admin.vegetable_questions',
            compact('questions')
        );
    }

    public function cropManagement()
    {
        $imageFolder = public_path('images');

        if (!File::exists($imageFolder)) {
            File::makeDirectory(
                $imageFolder,
                0755,
                true
            );
        }

        $crops = Crop::with([
            'cropDetail',
            'pestManagements'
        ])
        ->latest()
        ->get();

        foreach ($crops as $crop) {

            if (!$crop->image) {
                continue;
            }

            $filename = basename(
                $crop->image
            );

            if (!$filename) {
                continue;
            }

            $finalPath = $imageFolder .
                DIRECTORY_SEPARATOR .
                $filename;

            if (File::exists($finalPath)) {

                if ($crop->image !== $filename) {

                    $crop->image = $filename;
                    $crop->save();
                }

                continue;
            }

            $possibleLocations = [

                public_path(
                    'images/crops/' . $filename
                ),

                storage_path(
                    'app/public/crops/' . $filename
                ),

                storage_path(
                    'app/public/' . $filename
                ),

            ];

            foreach ($possibleLocations as $oldPath) {

                if (
                    File::exists($oldPath) &&
                    File::isFile($oldPath)
                ) {

                    File::copy(
                        $oldPath,
                        $finalPath
                    );

                    break;
                }
            }

            if (File::exists($finalPath)) {

                $crop->image = $filename;
                $crop->save();
            }
        }

        $crops = Crop::with([
            'cropDetail',
            'pestManagements'
        ])
        ->latest()
        ->get();

        return view(
            'admin.crop_management',
            compact('crops')
        );
    }

    public function createCrop()
    {
        return view(
            'admin.add_crop'
        );
    }

    public function storeCrop(Request $request)
    {
        $request->validate([
            'image' =>
                'required|image|mimes:jpg,jpeg,png,webp|max:2048',

            'name' =>
                'required|string|max:255',

            'season' =>
                'required|in:summer,winter',

            'type' =>
                'nullable|in:indoor,outdoor',

            'category' =>
                'required|in:fruit,vegetable,grain',
        ]);

        $folder = public_path('images');

        if (!File::exists($folder)) {
            File::makeDirectory(
                $folder,
                0755,
                true
            );
        }

        $image = $request->file('image');

        $imageName =
            time() . '_' .
            uniqid() . '_' .
            $image->getClientOriginalName();

        $image->move(
            $folder,
            $imageName
        );

        Crop::create([
            'image' => $imageName,
            'name' => $request->name,
            'name_ur' => null,
            'urdu_completed' => false,
            'season' => $request->season,
            'type' => $request->type,
            'category' => $request->category,
        ]);

        return redirect()
            ->route('admin.crops')
            ->with(
                'success',
                is_urdu() ? 'فصل کامیابی سے شامل کر دی گئی ہے۔' : 'Crop added successfully.'
            );
    }

    public function createCropData()
    {
        $crops = Crop::orderBy(
            'name'
        )->get();

        return view(
            'admin.add_crop_data',
            compact('crops')
        );
    }

    public function storeCropData(
        Request $request
    ) {
        $request->validate([
            'crop_id' =>
                'required|exists:crops,id',

            'introduction' =>
                'required|string',

            'basic_information' =>
                'required|string',

            'sowing_season' =>
                'required|string',

            'harvesting_season' =>
                'required|string',

            'climate_requirements' =>
                'required|string',

            'soil_requirements' =>
                'required|string',

            'land_preparation' =>
                'required|string',

            'seed_selection' =>
                'required|string',

            'seed_rate' =>
                'required|string',

            'irrigation_requirements' =>
                'required|string',

            'fertilizer_requirements' =>
                'required|string',

            'growing_stages' =>
                'required|string',

            'types_of_crop' =>
                'required|string',

            'crop_varieties' =>
                'required|string',

            'nutritional_value' =>
                'required|string',

            'importance_of_crop' =>
                'required|string',
        ]);

        $crop = Crop::findOrFail(
            $request->crop_id
        );

        CropDetail::updateOrCreate(
            [
                'crop_id' =>
                    $crop->id
            ],
            [
                'crop_name' =>
                    $crop->name,

                'urdu_completed' => false,

                'introduction' =>
                    $request->introduction,

                'basic_information' =>
                    $request->basic_information,

                'sowing_season' =>
                    $request->sowing_season,

                'harvesting_season' =>
                    $request->harvesting_season,

                'climate_requirements' =>
                    $request->climate_requirements,

                'soil_requirements' =>
                    $request->soil_requirements,

                'land_preparation' =>
                    $request->land_preparation,

                'seed_selection' =>
                    $request->seed_selection,

                'seed_rate' =>
                    $request->seed_rate,

                'irrigation_requirements' =>
                    $request->irrigation_requirements,

                'fertilizer_requirements' =>
                    $request->fertilizer_requirements,

                'growing_stages' =>
                    $request->growing_stages,

                'types_of_crop' =>
                    $request->types_of_crop,

                'crop_varieties' =>
                    $request->crop_varieties,

                'nutritional_value' =>
                    $request->nutritional_value,

                'importance_of_crop' =>
                    $request->importance_of_crop,
            ]
        );

        $crop->urdu_completed = false;
        $crop->save();

        return redirect()
            ->route('admin.crops')
            ->with(
                'success',
                is_urdu() ? 'فصل کا ڈیٹا کامیابی سے محفوظ کر دیا گیا ہے۔' : 'Crop data saved successfully.'
            );
    }

    public function createPestData()
    {
        $crops = Crop::orderBy(
            'name'
        )->get();

        return view(
            'admin.add_pest_data',
            compact('crops')
        );
    }

    public function storePestData(
        Request $request
    ) {
        $request->validate([
            'crop_id' =>
                'required|exists:crops,id',

            'name' =>
                'required|string|max:255',

            'type' =>
                'required|string|max:255',

            'how_it_occurs' =>
                'required|string',

            'symptoms' =>
                'required|string',

            'protection' =>
                'required|string',

            'recommended_control' =>
                'required|string',
        ]);

        $crop = Crop::findOrFail(
            $request->crop_id
        );

        PestManagement::create([
            'crop_id' =>
                $crop->id,

            'crop_name' =>
                $crop->name,

            'name' =>
                $request->name,

            'type' =>
                $request->type,

            'how_it_occurs' =>
                $request->how_it_occurs,

            'symptoms' =>
                $request->symptoms,

            'protection' =>
                $request->protection,

            'recommended_control' =>
                $request->recommended_control,
            'urdu_completed' => false,
        ]);

        return redirect()
            ->route('admin.crops')
            ->with(
                'success',
                is_urdu() ? 'کیڑوں کا ڈیٹا کامیابی سے محفوظ کر دیا گیا ہے۔' : 'Pest data saved successfully.'
            );
    }

    public function createUrduCropData(Request $request)
    {
        $crops = Crop::with('cropDetail')->orderBy('name')->get();
        $selectedCropId = $request->integer('crop_id');

        return view('admin.add_urdu_crop_data', compact('crops', 'selectedCropId'));
    }

    public function storeUrduCropData(Request $request)
    {
        $fields = [
            'introduction_ur',
            'basic_information_ur',
            'sowing_season_ur',
            'harvesting_season_ur',
            'climate_requirements_ur',
            'soil_requirements_ur',
            'land_preparation_ur',
            'seed_selection_ur',
            'seed_rate_ur',
            'irrigation_requirements_ur',
            'fertilizer_requirements_ur',
            'growing_stages_ur',
            'types_of_crop_ur',
            'crop_varieties_ur',
            'nutritional_value_ur',
            'importance_of_crop_ur',
        ];

        $rules = [
            'crop_id' => 'required|exists:crops,id',
            'name_ur' => 'required|string|max:255',
        ];

        foreach ($fields as $field) {
            $rules[$field] = 'required|string';
        }

        $request->validate($rules);

        $crop = Crop::findOrFail($request->crop_id);
        $crop->name_ur = trim($request->name_ur);
        $crop->save();

        $detail = CropDetail::firstOrNew(['crop_id' => $crop->id]);
        $detail->crop_name = $crop->name;
        $detail->crop_name_ur = trim($request->name_ur);

        foreach ($fields as $field) {
            $detail->{$field} = $request->{$field};
        }

        $detail->urdu_completed = true;
        $detail->save();

        $crop->urdu_completed = true;
        $crop->save();

        return redirect()
            ->route('admin.crops')
            ->with('success', is_urdu() ? 'اردو فصل کا ڈیٹا کامیابی سے محفوظ کر دیا گیا ہے۔' : 'Urdu crop data saved successfully.');
    }

    public function createUrduPestData(Request $request)
    {
        $pests = PestManagement::with('crop')
            ->orderBy('crop_id')
            ->orderBy('name')
            ->get();
        $selectedPestId = $request->integer('pest_id');
        $selected = $pests->firstWhere('id', $selectedPestId);

        return view('admin.add_urdu_pest_data', compact('pests', 'selectedPestId', 'selected'));
    }

    public function storeUrduPestData(Request $request)
    {
        $request->validate([
            'pest_id' => 'required|exists:pest_managements,id',
            'name_ur' => 'required|string|max:255',
            'type_ur' => 'required|string|max:255',
            'how_it_occurs_ur' => 'required|string',
            'symptoms_ur' => 'required|string',
            'protection_ur' => 'required|string',
            'recommended_control_ur' => 'required|string',
        ]);

        $pest = PestManagement::with('crop')->findOrFail($request->pest_id);

        if (!$pest->crop || blank($pest->crop->name_ur)) {
            return back()
                ->withErrors(['pest_id' => is_urdu() ? 'براہِ کرم پہلے فصل کا اردو نام شامل کریں۔' : 'Please add the Urdu crop name first.'])
                ->withInput();
        }

        $pest->name_ur = trim($request->name_ur);
        $pest->type_ur = trim($request->type_ur);
        $pest->how_it_occurs_ur = $request->how_it_occurs_ur;
        $pest->symptoms_ur = $request->symptoms_ur;
        $pest->protection_ur = $request->protection_ur;
        $pest->recommended_control_ur = $request->recommended_control_ur;
        $pest->crop_name_ur = optional($pest->crop)->name_ur;
        $pest->urdu_completed = true;
        $pest->save();

        return redirect()
            ->route('admin.crops')
            ->with('success', is_urdu() ? 'اردو کیڑوں کا ڈیٹا کامیابی سے محفوظ کر دیا گیا ہے۔' : 'Urdu pest data saved successfully.');
    }

    public function deleteCrop(
        int $id
    ) {
        $crop = Crop::findOrFail(
            $id
        );

        if ($crop->image) {

            $filename = basename(
                $crop->image
            );

            $imagePaths = [
                public_path(
                    'images/' . $filename
                ),
                public_path(
                    'images/crops/' . $filename
                ),
            ];

            foreach ($imagePaths as $imagePath) {

                if (File::exists($imagePath)) {

                    File::delete(
                        $imagePath
                    );
                }
            }
        }

        $crop->delete();

        return back()->with(
            'success',
            is_urdu() ? 'فصل کامیابی سے حذف کر دی گئی ہے۔' : 'Crop deleted successfully.'
        );
    }
}
