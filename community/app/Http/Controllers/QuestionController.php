<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use App\Models\Answer;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function home(){
         return view('user.home');
    }
    // User dashboard
    public function userHome()
    {
        $questions = Question::with('answers')->where('user_id', Auth::id())->get();
        return view('user.hi', compact('questions'));
    }

    // Expert dashboard - only approved questions without answers
    public function expertHome()
    {
        $questions = Question::where('status', 'approved')
            ->doesntHave('answers')
            ->latest()
            ->with('user')
            ->get();

        return view('expert.home', compact('questions'));
    }

    // User posts a question (status = pending)
    public function store(Request $request)
    {
        $request->validate([
            'question_text' => 'nullable|string',
            'question_image' => 'nullable|image|max:300'
        ]);

        $imagePath = null;
        if ($request->hasFile('question_image')) {
            $imagePath = $request->file('question_image')->store('questions', 'public');
        }

        Question::create([
            'user_id' => Auth::id(),
            'question_text' => $request->question_text,
            'question_image' => $imagePath,
            'status' => 'pending'   // NEW question from user is pending
        ]);

        return redirect('/hi')->with('success', 'Question submitted successfully! Waiting for admin approval.');
    }

    // Expert sees all users who have unanswered approved questions
    public function expertUsers()
    {
        $users = \App\Models\User::whereHas('questions', function ($query) {
            $query->where('status', 'approved')->doesntHave('answers');
        })->get();

        return view('expert.users', compact('users'));
    }

    // Expert sees specific user's approved unanswered questions
    public function expertUserQuestions($userId)
    {
        $questions = Question::where('user_id', $userId)
            ->where('status', 'approved')
            ->doesntHave('answers')
            ->get();

        return view('expert.user_questions', compact('questions'));
    }

    // Edit question (only owner can edit)
    public function edit($id)
    {
        $question = Question::findOrFail($id);

        if ($question->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action');
        }

        return view('users.edit_question', compact('question'));
    }

    // Update question (only owner)
    public function update(Request $request, $id)
    {
        $question = Question::findOrFail($id);

        if ($question->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action');
        }

        $request->validate([
            'question_text' => 'nullable|string',
            'question_image' => 'nullable|image|max:300'
        ]);

        if ($request->hasFile('question_image')) {
            if ($question->question_image) {
                Storage::disk('public')->delete($question->question_image);
            }
            $question->question_image = $request->file('question_image')->store('questions', 'public');
        }

        $question->question_text = $request->question_text;
        $question->save();

        return redirect('/hi')->with('success', 'Question updated successfully!');
    }

    // Delete question (only owner)
    public function destroy($id)
    {
        $question = Question::findOrFail($id);

        if ($question->user_id !== Auth::id()) {
            abort(403, 'Unauthorized action');
        }

        if ($question->question_image) {
            Storage::disk('public')->delete($question->question_image);
        }

        foreach ($question->answers as $answer) {
            if ($answer->answer_image) {
                Storage::disk('public')->delete($answer->answer_image);
            }
            $answer->delete();
        }

        $question->delete();

        return redirect('/hi')->with('success', 'Question deleted successfully!');
    }
}
