<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
    Route::post('/', [AuthController::class, '_login'])->name('_login');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, '_login'])->name('_login');
    Route::get('/registration', [AuthController::class, 'registration'])->name('registration');
    Route::post('/registration', [AuthController::class, '_registration'])->name('_registration');
});

Route::middleware('auth')->group(function () {

    Route::middleware('only_admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/scores', [DashboardController::class, 'scores'])->name('scores');
        Route::get('/account', [MenuController::class, 'account'])->name('account');
        Route::post('/account', [MenuController::class, '_edit'])->name('_edit');
        Route::get('/delete/{id}', [MenuController::class, 'delete'])->name('delete');

        Route::get('/subject', [SubjectController::class, 'subject'])->name('subject');
        Route::post('/subject', [SubjectController::class, 'add_subject'])->name('add_subject');
        Route::post('/edit_subject/{slug}', [SubjectController::class, 'edit_subject'])->name('edit_subject');
    });

    Route::middleware('only_teacher')->group(function () {
        Route::get('/blank', [DashboardController::class, 'blank'])->name('blank');
        Route::get('/calendar', [UserController::class, 'calendar'])->name('calendar');
        Route::get('/task', [TaskController::class, 'task'])->name('task');
        Route::get('/library', [TaskController::class, 'task'])->name('library');
        Route::get('/task/{slug}', [TaskController::class, 'subject_task'])->name('subject_task');
        Route::post('task/add_task', [TaskController::class, 'add_task'])->name('add_task');
        Route::get('/delete/{id}', [TaskController::class, 'delete'])->name('delete');
    });

    Route::get('/blank', [TestController::class, 'blank'])->name('blank');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
