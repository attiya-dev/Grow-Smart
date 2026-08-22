<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Answer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class QuestionController extends Controller
{
    public function myQuestions()
    {
        $questions = Question::with('answers.expert')
            ->where('user_id', Auth::id())
            ->latest()
            ->get();

        return view('user.my_questions', compact('questions'));
    }

    public function cropForum()
    {
        $questions = Question::with(['user', 'answers'])
            ->where('category', 'crop')
            ->where('status', 'approved')
            ->latest()
            ->get();

        return view('user.crop', compact('questions'));
    }

    public function fruitForum()
    {
        $questions = Question::with(['user', 'answers'])
            ->where('category', 'fruit')
            ->where('status', 'approved')
            ->latest()
            ->get();

        return view('user.fruit', compact('questions'));
    }

    public function vegetableForum()
    {
        $questions = Question::with(['user', 'answers'])
            ->where('category', 'vegetable')
            ->where('status', 'approved')
            ->latest()
            ->get();

        return view('user.vegetable', compact('questions'));
    }

    public function expertHome()
    {
        $questions = Question::where('status', 'approved')
            ->doesntHave('answers')
            ->with('user')
            ->latest()
            ->get();

        return view('expert.home', compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|in:crop,fruit,vegetable',
            'question_text' => 'nullable|string',
            'question_image' => 'nullable|image|max:5120',
            'question_voice' => 'nullable|array',
            'question_voice.*' => 'file|mimes:webm,ogg,mp3,wav,m4a|max:10240',
        ]);

        $imagePath = null;

        if ($request->hasFile('question_image')) {
            $imagePath = $request->file('question_image')
                ->store('questions/images', 'public');
        }

        $voicePaths = [];

        if ($request->hasFile('question_voice')) {
            foreach ($request->file('question_voice') as $voice) {
                $voicePaths[] = $voice->store(
                    'questions/voices',
                    'public'
                );
            }
        }

        Question::create([
            'user_id' => Auth::id(),
            'category' => $request->category,
            'question_text' => $request->question_text,
            'question_image' => $imagePath,
            'question_voice' => $voicePaths,
            'status' => 'pending',
        ]);

        return back()->with(
            'success',
            'Your question has been submitted successfully.'
        );
    }

    public function expertUsers()
    {
        $cropCount = Question::where('category', 'crop')
            ->where('status', 'approved')
            ->doesntHave('answers')
            ->count();

        $fruitCount = Question::where('category', 'fruit')
            ->where('status', 'approved')
            ->doesntHave('answers')
            ->count();

        $vegetableCount = Question::where('category', 'vegetable')
            ->where('status', 'approved')
            ->doesntHave('answers')
            ->count();

        return view('expert.users', compact(
            'cropCount',
            'fruitCount',
            'vegetableCount'
        ));
    }

    public function cropExpertQuestions()
    {
        $questions = Question::with('user')
            ->where('category', 'crop')
            ->where('status', 'approved')
            ->doesntHave('answers')
            ->latest()
            ->get();

        return view(
            'expert.crop_questions',
            compact('questions')
        );
    }

    public function fruitExpertQuestions()
    {
        $questions = Question::with('user')
            ->where('category', 'fruit')
            ->where('status', 'approved')
            ->doesntHave('answers')
            ->latest()
            ->get();

        return view(
            'expert.fruit_questions',
            compact('questions')
        );
    }

    public function vegetableExpertQuestions()
    {
        $questions = Question::with('user')
            ->where('category', 'vegetable')
            ->where('status', 'approved')
            ->doesntHave('answers')
            ->latest()
            ->get();

        return view(
            'expert.vegetable_questions',
            compact('questions')
        );
    }

    public function edit(int $id)
    {
        $question = Question::findOrFail($id);

        if ($question->user_id != Auth::id()) {
            abort(403, 'Unauthorized action');
        }

        return view(
            'users.edit_question',
            compact('question')
        );
    }

    public function update(Request $request, int $id)
    {
        $question = Question::findOrFail($id);

        if ($question->user_id != Auth::id()) {
            abort(403);
        }

        $request->validate([
            'question_text' => 'nullable|string|max:5000',
            'question_image' => 'nullable|image|mimes:jpg,jpeg,png|max:4096',
            'question_voice' => 'nullable|mimes:mp3,wav,ogg,m4a,webm|max:10240',
        ]);

        if ($request->hasFile('question_image')) {
            if ($question->question_image) {
                Storage::disk('public')->delete(
                    $question->question_image
                );
            }

            $question->question_image = $request->file(
                'question_image'
            )->store(
                'questions',
                'public'
            );
        }

        if ($request->hasFile('question_voice')) {
            if ($question->question_voice) {
                Storage::disk('public')->delete(
                    $question->question_voice
                );
            }

            $question->question_voice = $request->file(
                'question_voice'
            )->store(
                'question_voice',
                'public'
            );
        }

        $question->question_text = $request->question_text;
        $question->save();

        return redirect('/hi')->with(
            'success',
            'Question Updated Successfully.'
        );
    }

    public function destroy(int $id)
    {
        $question = Question::where(
            'user_id',
            Auth::id()
        )->findOrFail($id);

        if (
            $question->status == 'rejected' ||
            $question->answers()->count() > 0
        ) {
            if ($question->question_image) {
                Storage::disk('public')->delete(
                    $question->question_image
                );
            }

            if ($question->question_voice) {
                Storage::disk('public')->delete(
                    $question->question_voice
                );
            }

            $question->delete();

            return back()->with(
                'success',
                'Question deleted successfully.'
            );
        }

        return back()->with(
            'error',
            'You can only delete a rejected question or a question that has received an expert reply.'
        );
    }

    public function cropExpertUsers()
    {
        $users = User::whereHas('questions', function ($query) {
            $query->where('category', 'crop')
                ->where('status', 'approved')
                ->doesntHave('answers');
        })
        ->withCount([
            'questions as question_count' => function ($query) {
                $query->where('category', 'crop')
                    ->where('status', 'approved')
                    ->doesntHave('answers');
            }
        ])
        ->get();

        return view(
            'expert.crop_users',
            compact('users')
        );
    }

    public function cropUserQuestions(int $userId)
    {
        $user = User::findOrFail($userId);

        $questions = Question::with('user')
            ->where('user_id', $userId)
            ->where('category', 'crop')
            ->where('status', 'approved')
            ->doesntHave('answers')
            ->latest()
            ->get();

        return view(
            'expert.crop_user_questions',
            compact('user', 'questions')
        );
    }

    public function fruitExpertUsers()
    {
        $users = User::whereHas('questions', function ($query) {
            $query->where('category', 'fruit')
                ->where('status', 'approved')
                ->doesntHave('answers');
        })
        ->withCount([
            'questions as question_count' => function ($query) {
                $query->where('category', 'fruit')
                    ->where('status', 'approved')
                    ->doesntHave('answers');
            }
        ])
        ->get();

        return view(
            'expert.fruit_users',
            compact('users')
        );
    }

    public function fruitUserQuestions(int $userId)
    {
        $user = User::findOrFail($userId);

        $questions = Question::with('user')
            ->where('user_id', $userId)
            ->where('category', 'fruit')
            ->where('status', 'approved')
            ->doesntHave('answers')
            ->latest()
            ->get();

        return view(
            'expert.fruit_user_questions',
            compact('user', 'questions')
        );
    }

    public function vegetableExpertUsers()
    {
        $users = User::whereHas('questions', function ($query) {
            $query->where('category', 'vegetable')
                ->where('status', 'approved')
                ->doesntHave('answers');
        })
        ->withCount([
            'questions as question_count' => function ($query) {
                $query->where('category', 'vegetable')
                    ->where('status', 'approved')
                    ->doesntHave('answers');
            }
        ])
        ->get();

        return view(
            'expert.vegetable_users',
            compact('users')
        );
    }

    public function vegetableUserQuestions(int $userId)
    {
        $user = User::findOrFail($userId);

        $questions = Question::with('user')
            ->where('user_id', $userId)
            ->where('category', 'vegetable')
            ->where('status', 'approved')
            ->doesntHave('answers')
            ->latest()
            ->get();

        return view(
            'expert.vegetable_user_questions',
            compact('user', 'questions')
        );
    }
}
