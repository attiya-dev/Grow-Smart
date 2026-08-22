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
            $user->name . ' is now an Expert.'
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
            $user->name . ' is now an Admin.'
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
            $user->name . ' is now a User.'
        );
    }

    public function toggleActive(Request $request)
    {
        $user = User::findOrFail($request->user_id);

        $user->is_active = !$user->is_active;
        $user->save();

        return back()->with(
            'success',
            $user->name . ' status updated.'
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
            'Question Approved Successfully.'
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
            'Question Rejected Successfully.'
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
            'Question posted successfully & sent to experts!'
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
            'season' => $request->season,
            'type' => $request->type,
            'category' => $request->category,
        ]);

        return redirect()
            ->route('admin.crops')
            ->with(
                'success',
                'Crop added successfully.'
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

        return redirect()
            ->route('admin.crops')
            ->with(
                'success',
                'Crop data saved successfully.'
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
        ]);

        return redirect()
            ->route('admin.crops')
            ->with(
                'success',
                'Pest data saved successfully.'
            );
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
            'Crop deleted successfully.'
        );
    }
}
