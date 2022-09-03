<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\ExamSetupController;
use App\Http\Controllers\Backend\SubjectController;
use App\Http\Controllers\Backend\MarkEntryController;
use App\Http\Controllers\Backend\StudentController;
use App\Http\Controllers\Backend\AcademicYearController;
use App\Http\Controllers\Backend\GroupController;
use App\Http\Controllers\Backend\ClassesController;
use App\Http\Controllers\Backend\SectionController;
use App\Http\Controllers\Backend\ExamNameController;
use App\Http\Controllers\Backend\DefaultController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


     Route::prefix('user')->group(function(){
     Route::get('/view',[UserController::class,'index'])->name('user.view');
     Route::get('/create',[UserController::class,'create'])->name('user.create');
     Route::post('/store',[UserController::class,'store'])->name('user.store');
     Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
     Route::post('/update/{id}',[UserController::class,'update'])->name('user.update');
     Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
     });
     Route::prefix('profile')->group(function(){
     Route::get('/view',[ProfileController::class,'index'])->name('profile.view');
     Route::get('/edit/{id}',[ProfileController::class,'edit'])->name('profile.edit');
     Route::post('/update/{id}',[ProfileController::class,'update'])->name('profile.update');
     Route::get('/passwordview',[ProfileController::class,'passwordView'])->name('profile.password.view');
     Route::post('/password/update',[ProfileController::class,'passwordUpdate'])->name('profile.password.update');

     });



     Route::prefix('product')->group(function(){
     Route::get('/view',[ProductController::class,'index'])->name('product.view');
     Route::get('/create',[ProductController::class,'create'])->name('product.create');
     Route::post('/store',[ProductController::class,'store'])->name('product.store');
     Route::get('/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
     Route::post('/update/{id}',[ProductController::class,'update'])->name('product.update');
     Route::get('/delete/{id}',[ProductController::class,'delete'])->name('product.delete');
     });


     Route::prefix('subject')->group(function(){
        Route::get('/view',[SubjectController::class,'index'])->name('subject.view');
        Route::get('/create',[SubjectController::class,'create'])->name('subject.create');
        Route::post('/store',[SubjectController::class,'store'])->name('subject.store');
        Route::get('/edit/{id}',[SubjectController::class,'edit'])->name('subject.edit');
        Route::post('/update/{id}',[SubjectController::class,'update'])->name('subject.update');
        Route::get('/delete/{id}',[SubjectController::class,'delete'])->name('subject.delete');
        });

    Route::prefix('year')->group(function(){
        Route::get('/view',[AcademicYearController::class,'index'])->name('year.view');
        Route::get('/create',[AcademicYearController::class,'create'])->name('year.create');
        Route::post('/store',[AcademicYearController::class,'store'])->name('year.store');
        Route::get('/edit/{id}',[AcademicYearController::class,'edit'])->name('year.edit');
        Route::post('/update/{id}',[AcademicYearController::class,'update'])->name('year.update');
        Route::get('/delete/{id}',[AcademicYearController::class,'delete'])->name('year.delete');

     });

     Route::prefix('section')->group(function(){
        Route::get('/view',[SectionController::class,'index'])->name('section.view');
        Route::get('/create',[SectionController::class,'create'])->name('section.create');
        Route::post('/store',[SectionController::class,'store'])->name('section.store');
        Route::get('/edit/{id}',[SectionController::class,'edit'])->name('section.edit');
        Route::post('/update/{id}',[SectionController::class,'update'])->name('section.update');
        Route::get('/delete/{id}',[SectionController::class,'delete'])->name('section.delete');

     });

     Route::prefix('class')->group(function(){
        Route::get('/view',[ClassesController::class,'index'])->name('class.view');
        Route::get('/create',[ClassesController::class,'create'])->name('class.create');
        Route::post('/store',[ClassesController::class,'store'])->name('class.store');
        Route::get('/edit/{id}',[ClassesController::class,'edit'])->name('class.edit');
        Route::post('/update/{id}',[ClassesController::class,'update'])->name('class.update');
        Route::get('/delete/{id}',[ClassesController::class,'delete'])->name('class.delete');

     });
     Route::prefix('group')->group(function(){
        Route::get('/view',[GroupController::class,'index'])->name('group.view');
        Route::get('/create',[GroupController::class,'create'])->name('group.create');
        Route::post('/store',[GroupController::class,'store'])->name('group.store');
        Route::get('/edit/{id}',[GroupController::class,'edit'])->name('group.edit');
        Route::post('/update/{id}',[GroupController::class,'update'])->name('group.update');
        Route::get('/delete/{id}',[GroupController::class,'delete'])->name('group.delete');

     });
     Route::prefix('exam-name')->group(function(){
        Route::get('/view',[ExamNameController::class,'index'])->name('exam-name.view');
        Route::get('/create',[ExamNameController::class,'create'])->name('exam-name.create');
        Route::post('/store',[ExamNameController::class,'store'])->name('exam-name.store');
        Route::get('/edit/{id}',[ExamNameController::class,'edit'])->name('exam-name.edit');
        Route::post('/update/{id}',[ExamNameController::class,'update'])->name('exam-name.update');
        Route::get('/delete/{id}',[ExamNameController::class,'delete'])->name('exam-name.delete');

     });

     Route::prefix('student')->group(function(){
        Route::get('/view',[StudentController::class,'index'])->name('student.view');
        Route::get('/create',[StudentController::class,'create'])->name('student.create');
        Route::post('/store',[StudentController::class,'store'])->name('student.store');
        Route::get('/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
        Route::post('/update/{id}',[StudentController::class,'update'])->name('student.update');
        Route::get('/delete/{id}',[StudentController::class,'delete'])->name('student.delete');

     });

     Route::prefix('exam')->group(function(){
        Route::get('/view',[ExamSetupController::class,'index'])->name('exam.view');
        Route::get('/create',[ExamSetupController::class,'create'])->name('exam.create');
        Route::post('/store',[ExamSetupController::class,'store'])->name('exam.store');
        Route::get('/edit/{id}',[ExamSetupController::class,'edit'])->name('exam.edit');
        Route::post('/update/{id}',[ExamSetupController::class,'update'])->name('exam.update');
        Route::get('/delete/{id}',[ExamSetupController::class,'delete'])->name('exam.delete');
     });



      Route::prefix('marks')->group(function(){
        Route::get('/mark-entry',[MarkEntryController::class,'add'])->name('mark-entry-show');
        Route::post('/mark-entry',[MarkEntryController::class,'store'])->name('marks.store');
        Route::get('/mark-edit',[MarkEntryController::class,'edit'])->name('marks.edit');
        Route::get('/get-student-edit',[MarkEntryController::class,'getMarks'])->name('get-student-edit');
        Route::post('/get-marks-update',[MarkEntryController::class,'update'])->name('marks.update');
        Route::get('/get-student-report',[MarkEntryController::class,'getStudentReport'])->name('get-student-report');
       });

     Route::get('/get-student',[DefaultController::class,'getStudent'])->name('get-student');
     Route::get('/student-progress-report',[DefaultController::class,'progressReport'])->name('student-progress-report');










