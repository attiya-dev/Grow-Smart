<?php
namespace App\Http\Controllers;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    // Show all users except the main admin
    public function dashboard()
    {
        $users = User::where('email', '!=', 'admin@forum.com')->get();
        return view('admin.dashboard', compact('users'));
    }

    // Make a user an Expert
    public function makeExpert(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->is_expert = true;
        $user->is_admin = false;  // Ensure only one role at a time
        $user->save();

        return back()->with('success', $user->name.' is now an Expert.');
    }

    // Make a user an Admin
    public function makeAdmin(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->is_admin = true;
        $user->is_expert = false; // Ensure only one role at a time
        $user->save();

        return back()->with('success', $user->name.' is now an Admin.');
    }

    // Make a user a normal User
    public function makeUser(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->is_admin = false;
        $user->is_expert = false;
        $user->save();

        return back()->with('success', $user->name.' is now a User.');
    }

    // Toggle active/inactive
    public function toggleActive(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->is_active = !$user->is_active;
        $user->save();

        return back()->with('success', $user->name.' status updated.');
    }
     public function viewUserQuestions($id)
{
    $user = User::findOrFail($id);
    $questions = $user->questions()->with('answers.expert')->get();

    return view('admin.view_user_questions', compact('user', 'questions'));
}
    public function index()
    {
        return view('admin.info');
    }
  public function usersWithQuestions()
{
    // Get users who have at least one pending question
   $users = User::whereHas('questions', function($query) {
    $query->where('status', 'pending');
})->get();


    return view('admin.users_with_questions', compact('users'));
}



// Review only pending questions for a user
public function reviewUserQuestions($id)
{
    $user = User::findOrFail($id);
    $questions = $user->questions()
                      ->where('status', 'pending') // Only pending questions
                      ->orderBy('created_at', 'desc')
                      ->get();

    return view('admin.review_user_questions', compact('user', 'questions'));
}



// Approve Question
public function approveQuestion(Request $request)
{
    $q = Question::findOrFail($request->question_id);
    $q->status = 'approved';
    $q->save();

    return back()->with('success', 'Question approved & sent to experts!');
}

// Reject Question
public function rejectQuestion(Request $request)
{
    $q = Question::findOrFail($request->question_id);
    $q->status = 'rejected';
    $q->save();

    return back()->with('success', 'Question rejected.');
}
// Admin posts question that goes directly to experts
public function postQuestionAsAdmin(Request $request)
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
        'user_id' => Auth::id(),      // Admin
        'question_text' => $request->question_text,
        'question_image' => $imagePath,
        'status' => 'approved'          // directly visible to experts
    ]);

    return back()->with('success', 'Question posted successfully & sent to experts!');
}
}


