<?php

use App\Livewire\Chat;
use App\Livewire\ViewCourse;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;


Route::middleware('auth')->group(function(){
    Route::get('/', Welcome::class)->name('site');
    Route::get('/chat', Chat::class)->name('chat');
    Route::get('/course/{courseId}', ViewCourse::class)->name('course.view');

});

Route::get('/admin/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','admin'])->name('dashboard');

Route::prefix('admin')->middleware(['auth','admin'])->group(function () {
    Route::get('/courses', [CourseController::class, 'index'])->name('admin.courses');
    Route::get('/course/create', [CourseController::class, 'create'])->name('admin.course.create');
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('admin.course.edit');
    Route::post('/course/store', [CourseController::class, 'store'])->name('admin.course.store');
    Route::post('/course/update', [CourseController::class, 'update'])->name('admin.course.update');
    Route::get('/course/delete/{id}', [CourseController::class, 'delete'])->name('admin.course.delete');

    Route::get('/departments', [CommonController::class, 'departments'])->name('admin.departments');
    Route::post('/department/store', [CommonController::class, 'store_department'])->name('admin.department.add');
    Route::post('/department/update', [CommonController::class, 'update_department'])->name('admin.department.update');
    Route::get('/department/delete/{id}', [CommonController::class, 'delete_department'])->name('admin.department.delete');

    Route::get('/semesters', [CommonController::class, 'semesters'])->name('admin.semesters');
    Route::post('/semester/store', [CommonController::class, 'store_semester'])->name('admin.semester.add');
    Route::post('/semester/update', [CommonController::class, 'update_semester'])->name('admin.semester.update');
    Route::get('/semester/delete/{id}', [CommonController::class, 'delete_semester'])->name('admin.semester.delete');

    Route::get('/levels', [CommonController::class, 'levels'])->name('admin.levels');
    Route::post('/level/store', [CommonController::class, 'store_level'])->name('admin.level.add');
    Route::post('/level/update', [CommonController::class, 'update_level'])->name('admin.level.update');
    Route::get('/level/delete/{id}', [CommonController::class, 'delete_level'])->name('admin.level.delete');

    Route::get('/units', [CommonController::class, 'units'])->name('admin.units');
    Route::post('/unit/store', [CommonController::class, 'store_unit'])->name('admin.unit.add');
    Route::post('/unit/update', [CommonController::class, 'update_unit'])->name('admin.unit.update');
    Route::get('/unit/delete/{id}', [CommonController::class, 'delete_unit'])->name('admin.unit.delete');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
