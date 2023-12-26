<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StudentController::class, 'welcome']);

Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/students/store', [StudentController::class, 'store'])->name('store');

Route::get('/students/store/profile', [StudentController::class, 'store_profile'])->name('storeProfile');

Route::get('/students/store/comment', [StudentController::class, 'store_comment'])->name('storeComment');

Route::get('/subjects/store', [StudentController::class, 'store_subject'])->name('storeSubject');

Route::get('/students/store/subject', [StudentController::class, 'store_student_subject'])->name('storeStudentSubject');

Route::get('/students/detach/subject', [StudentController::class, 'detach_student_subject'])->name('detachStudentSubject');

// Route::get('/students/sync/subject', [StudentController::class, 'sync_student_subject'])->name('syncStudentSubject');
