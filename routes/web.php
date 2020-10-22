<?php

use App\Http\Controllers\StudentsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// home route section 
Route::get('/',[StudentsController::class, 'home'])->name('home');
// add student section start
Route::get('/add-student',[StudentsController::class, 'addStudent'])->name('add-student-form');
Route::post('/add-student',[StudentsController::class, 'saveValue'])->name('save-value');
// add student section end

// show students list section 
Route::get('/students-list',[StudentsController::class, 'showStudentList'])->name('students-list');

// update student info section start
Route::get('/edit-student/{id}',[StudentsController::class, 'editStudent'])->name('edit-student-form');
Route::post('/edit-student',[StudentsController::class, 'updateValue'])->name('update-value');
// update student info section end

// delete student info section
Route::get('/delete-student-info/{id}',[StudentsController::class, 'deleteStudentInfo'])->name('delete-student-info');
