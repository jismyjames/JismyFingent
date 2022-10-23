<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\MarksController;

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

Route::get('/', [StudentsController::class,'index'])->name('viewStudent');
Route::get('/addStudent', [StudentsController::class,'addStudent'])->name('addStudent');
Route::post('/saveStudent', [StudentsController::class,'addStudent'])->name('saveStudent');
Route::get('/editStudent/{id}', [StudentsController::class,'edit'])->name('editStudent');
Route::post('/updateStudent', [StudentsController::class,'edit'])->name('updateStudent');
Route::get('/deleteStudent', [StudentsController::class,'delete'])->name('deleteStudent');

Route::get('/mark', [MarksController::class,'index'])->name('viewMark');
Route::get('/addmark', [MarksController::class,'add'])->name('addmark');
Route::post('/saveMark', [MarksController::class,'add'])->name('saveMark');
Route::get('/editMark/{id}', [MarksController::class,'edit'])->name('editMark');
Route::post('/updateMark', [MarksController::class,'edit'])->name('updateMark');
Route::get('/deleteMark', [MarksController::class,'delete'])->name('deleteMark');

Route::get('/teacher', [TeachersController::class,'index'])->name('viewTeacher');
Route::get('/addTeacher', [TeachersController::class,'add'])->name('addTeacher');
Route::post('/saveTeacher', [TeachersController::class,'add'])->name('saveTeacher');





