<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountSettingsController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\CropController;

Route::get('/', [AuthController::class, 'home'])->name('home');

Route::get('/register', [AuthController::class, 'showRegister'])
    ->name('register');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register.store');

Route::get('/verify-otp', [AuthController::class, 'showVerifyForm'])
    ->name('verify.form');

Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])
    ->name('verify.otp');

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.store');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])
    ->name('google.login');

Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])
    ->name('google.callback');

Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])
    ->name('password.request');

Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])
    ->name('password.email');

Route::get('/reset-password/{token}', [AuthController::class, 'showResetPassword'])
    ->name('password.reset');

Route::post('/reset-password', [AuthController::class, 'resetPassword'])
    ->name('password.update');

Route::get('/dashboard', [AuthController::class, 'dashboard'])
    ->middleware('auth')
    ->name('dashboard');

Route::get('/weather', [WeatherController::class, 'index']);

Route::post('/weather/data', [WeatherController::class, 'getWeather']);

Route::get('/grid', [CropController::class, 'grid'])
    ->middleware('auth')
    ->name('grid');

Route::get('/summer', [CropController::class, 'summer'])
    ->middleware('auth')
    ->name('summer');

Route::get('/winter', [CropController::class, 'winter'])
    ->middleware('auth')
    ->name('winter');

Route::get('/garden', [CropController::class, 'garden'])
    ->middleware('auth')
    ->name('garden');

Route::get('/fruit', [CropController::class, 'fruit'])
    ->middleware('auth')
    ->name('fruit');

Route::get('/vegetable', [CropController::class, 'vegetable'])
    ->middleware('auth')
    ->name('vegetable');

Route::get('/grains', [CropController::class, 'grains'])
    ->middleware('auth')
    ->name('grains');

Route::get('/crop/{id}', [CropController::class, 'show'])
    ->middleware('auth')
    ->name('crop.show');

Route::get('/crop/{id}/pest', [CropController::class, 'pest'])
    ->middleware('auth')
    ->name('crop.pest');

Route::middleware(['auth', 'user'])->group(function () {

    Route::get('/home', [QuestionController::class, 'home'])
        ->name('user.home');

    Route::get('/hi', [QuestionController::class, 'userHome'])
        ->name('user.hi');

    Route::post('/question', [QuestionController::class, 'store'])
        ->name('question.store');

    Route::get('/question/{id}/edit', [QuestionController::class, 'edit'])
        ->name('question.edit');

    Route::put('/question/{id}', [QuestionController::class, 'update'])
        ->name('question.update');

    Route::delete('/question/{id}', [QuestionController::class, 'destroy'])
        ->name('question.delete');
});

Route::middleware(['auth', 'expert'])->group(function () {

    Route::get('/expert/users', [QuestionController::class, 'expertUsers'])
        ->name('expert.users');

    Route::get('/expert/users/crop', [QuestionController::class, 'cropExpertUsers'])
        ->name('expert.crop.users');

    Route::get('/expert/users/crop/{userId}', [QuestionController::class, 'cropUserQuestions'])
        ->name('expert.crop.user.questions');

    Route::get('/expert/questions/crop', [QuestionController::class, 'cropExpertQuestions'])
        ->name('expert.crop');

    Route::get('/expert/users/fruit', [QuestionController::class, 'fruitExpertUsers'])
        ->name('expert.fruit.users');

    Route::get('/expert/users/fruit/{userId}', [QuestionController::class, 'fruitUserQuestions'])
        ->name('expert.fruit.user.questions');

    Route::get('/expert/questions/fruit', [QuestionController::class, 'fruitExpertQuestions'])
        ->name('expert.fruit');

    Route::get('/expert/users/vegetable', [QuestionController::class, 'vegetableExpertUsers'])
        ->name('expert.vegetable.users');

    Route::get('/expert/users/vegetable/{userId}', [QuestionController::class, 'vegetableUserQuestions'])
        ->name('expert.vegetable.user.questions');

    Route::get('/expert/questions/vegetable', [QuestionController::class, 'vegetableExpertQuestions'])
        ->name('expert.vegetable');

    Route::post('/answer', [AnswerController::class, 'store'])
        ->name('answers.store');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin/info', [AdminController::class, 'index'])
        ->name('admin.info');

    Route::get('/admin/users', [AdminController::class, 'allUsers'])
        ->name('admin.dashboard');

    Route::post('/admin/make-admin', [AdminController::class, 'makeAdmin'])
        ->name('admin.makeAdmin');

    Route::post('/admin/make-expert', [AdminController::class, 'makeExpert'])
        ->name('admin.makeExpert');

    Route::post('/admin/make-user', [AdminController::class, 'makeUser'])
        ->name('admin.makeUser');

    Route::post('/admin/toggle-active', [AdminController::class, 'toggleActive'])
        ->name('admin.toggleActive');

    Route::get('/admin/questions', [AdminController::class, 'usersWithQuestions'])
        ->name('admin.questions');

    Route::get('/admin/questions/crop', [AdminController::class, 'cropQuestions'])
        ->name('admin.crop.questions');

    Route::get('/admin/questions/fruit', [AdminController::class, 'fruitQuestions'])
        ->name('admin.fruit.questions');

    Route::get('/admin/questions/vegetable', [AdminController::class, 'vegetableQuestions'])
        ->name('admin.vegetable.questions');

    Route::post('/admin/question/approve', [AdminController::class, 'approveQuestion'])
        ->name('admin.question.approve');

    Route::post('/admin/question/reject', [AdminController::class, 'rejectQuestion'])
        ->name('admin.question.reject');

    Route::get('/admin/crops', [AdminController::class, 'cropManagement'])
        ->name('admin.crops');

    Route::get('/admin/crops/create', [AdminController::class, 'createCrop'])
        ->name('admin.crop.create');

    Route::post('/admin/crops', [AdminController::class, 'storeCrop'])
        ->name('admin.crop.store');

    Route::get('/admin/crops/data/create', [AdminController::class, 'createCropData'])
        ->name('admin.crop.data.create');

    Route::post('/admin/crops/data', [AdminController::class, 'storeCropData'])
        ->name('admin.crop.data.store');

    Route::get('/admin/crops/pest/create', [AdminController::class, 'createPestData'])
        ->name('admin.pest.data.create');

    Route::post('/admin/crops/pest', [AdminController::class, 'storePestData'])
        ->name('admin.pest.data.store');

    Route::delete('/admin/crops/{id}', [AdminController::class, 'deleteCrop'])
        ->name('admin.crop.delete');
});

Route::middleware('auth')->group(function () {

    Route::get('/community', function () {
        return view('user.community');
    })->name('community');

    Route::get('/my-questions', [QuestionController::class, 'myQuestions'])
        ->name('my.questions');

    Route::get('/community/crop', [QuestionController::class, 'cropForum'])
        ->name('community.crop');

    Route::get('/community/fruit', [QuestionController::class, 'fruitForum'])
        ->name('community.fruit');

    Route::get('/community/vegetable', [QuestionController::class, 'vegetableForum'])
        ->name('community.vegetable');

     Route::get('/profile', [ProfileController::class, 'show'])
        ->name('profile');

    Route::post('/profile/update', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile/delete', [ProfileController::class, 'delete'])
        ->name('profile.delete');

    Route::get('/account-settings', [AccountSettingsController::class, 'index'])
        ->name('account.settings');

    Route::post('/account-settings/email', [AccountSettingsController::class, 'updateEmail'])
        ->name('account.email.update');

    Route::post('/account-settings/email/verify', [AccountSettingsController::class, 'verifyEmail'])
        ->name('account.email.verify');

    Route::post('/account-settings/email/cancel', [AccountSettingsController::class, 'cancelEmailChange'])
        ->name('account.email.cancel');

    Route::post('/account-settings/password', [AccountSettingsController::class, 'updatePassword'])
        ->name('account.password.update');

    Route::get('/language/{language}', [LanguageController::class, 'change'])
        ->name('language.change');
});

Route::view('/privacy-policy', 'privacy-policy')
    ->name('privacy.policy');

Route::view('/about-us', 'about-us')
    ->name('about.us');
