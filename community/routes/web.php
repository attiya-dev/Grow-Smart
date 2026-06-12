<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\PestManagementController;
use App\Http\Controllers\CropController;
use Illuminate\Support\Facades\Route;

Route::get('/soil', function () {
    return view('soil');
});
Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/grid', [CropController::class, 'grid'])->name('grid');
Route::get('/summer', [CropController::class, 'summer'])->name('summer');
Route::get('/winter', [CropController::class, 'winter'])->name('winter');
Route::get('/garden', [CropController::class, 'garden'])->name('garden');
Route::get('/fruit', [CropController::class, 'fruit'])->name('fruit');
Route::get('/vegetable', [CropController::class, 'vegetable'])->name('vegetable');
Route::get('/grains', [CropController::class, 'grains'])->name('grains');
Route::get('/tip', [AuthController::class, 'tip'])->name('tip');
Route::get('/register', [AuthController::class, 'showRegister'])->name('auth.register'); // Show registration form
Route::post('/register', [AuthController::class, 'register']);   // Handle registration form submission

Route::get('/login', [AuthController::class, 'showLogin']);       // Show login form
Route::post('/login', [AuthController::class, 'login']);          // Handle login form submission

Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth'); // Logout (requires login)
Route::middleware(['auth','user'])->group(function() {
    Route::get('/home', [QuestionController::class, 'home'])->name('user.home');
    Route::get('/hi', [QuestionController::class, 'userHome'])->name('user.hi'); // User dashboard
    Route::post('/question', [QuestionController::class, 'store'])->name('answers.store');
    // Show edit page
Route::get('/question/{id}/edit', [QuestionController::class, 'edit'])
    ->middleware('auth')
    ->name('question.edit');

// Update question
Route::put('/question/{id}', [QuestionController::class, 'update'])
    ->middleware('auth')
    ->name('question.update');

    Route::delete('/question/{id}', [QuestionController::class, 'destroy'])
    ->middleware('auth')
    ->name('question.delete');
 // Post a new question
});
// web.php
Route::middleware(['auth','expert'])->group(function() {
    // Expert sees all users
    Route::get('/expert/users', [QuestionController::class, 'expertUsers'])->name('expert.users');

    // Expert sees a specific user's questions
    Route::get('/expert/user/{userId}/questions', [QuestionController::class, 'expertUserQuestions'])
        ->name('expert.user.questions');

    // Answer routes
    Route::post('/answer', [AnswerController::class, 'store'])->name('answers.store');
});



      // Submit answer to a question
Route::middleware(['auth','admin'])->group(function() {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/info', [AdminController::class, 'index'])->name('admin.info');

    Route::post('/admin/make-expert', [AdminController::class, 'makeExpert']);
    Route::post('/admin/make-admin', [AdminController::class, 'makeAdmin']);
    Route::post('/admin/make-user', [AdminController::class, 'makeUser']);
    Route::post('/admin/toggle-active', [AdminController::class, 'toggleActive']);

    // NEW: Admin can view any user's home (read-only)
    Route::get('/admin/user/{id}/questions', [AdminController::class, 'viewUserQuestions'])
        ->name('admin.view.user.questions');
        // NEW Admin pages
Route::get('/admin/users/questions', [AdminController::class, 'usersWithQuestions'])
    ->name('admin.users.questions');

Route::get('/admin/user/{id}/questions/review', [AdminController::class, 'reviewUserQuestions'])
    ->name('admin.user.questions.review');
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Users with questions
Route::get('/admin/users-with-questions', [AdminController::class, 'usersWithQuestions'])->name('admin.users.with.questions');

// Review a specific user's questions
Route::get('/admin/user/{id}/questions', [AdminController::class, 'reviewUserQuestions'])->name('admin.user.questions.review');

// Approve / Reject / Delete
Route::post('/admin/question/approve', [AdminController::class, 'approveQuestion'])->name('admin.question.approve');
Route::post('/admin/question/reject', [AdminController::class, 'rejectQuestion'])->name('admin.question.reject');
});



Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');
    
Route::get('/crop/{id}', [CropController::class, 'show'])->name('crop.show');
Route::get('/crop/{id}/pest', [CropController::class, 'pest'])->name('crop.pest');
Route::get('/weather',[WeatherController::class,'index']);
Route::post('/weather/data',[WeatherController::class,'getWeather']);

