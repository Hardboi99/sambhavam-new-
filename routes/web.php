<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseDetailsController;
use App\Http\Controllers\ScholarshipController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'about'])->name('about-us');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/courses', [CourseController::class, 'courses'])->name('courses');
Route::get('/course-details', [CourseDetailsController::class, 'coursedetails'])->name('course-details');
Route::get('/scholarships', [ScholarshipController::class, 'scholarships'])->name('scholarships');
