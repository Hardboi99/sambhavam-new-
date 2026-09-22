<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\facultyController;
use App\Http\Controllers\LeadershipTeam;
use App\Http\Controllers\CourseDetailsController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Auth\AdminAuthenticatedSessionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\eduSkillsController;
use App\Http\Controllers\climateEnvController;
use App\Http\Controllers\innovativeController;
use App\Http\Controllers\impactController;
use App\Http\Controllers\blogsController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\MadhukarGumbaleController;
use App\Http\Controllers\MadhukarSnapController;
use App\Http\Controllers\SantoshController;
use App\Http\Controllers\DeeptiController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\CertificateController;

use App\Http\Controllers\Admin\EnquiryController as AdminEnquiryController;

require __DIR__.'/admin_auth.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutController::class, 'about'])->name('about-us');
Route::get('/certificates', [CertificateController::class, 'index'])->name('certificates');
Route::get('/faculty', [facultyController::class, 'faculty'])->name('faculty');
Route::get('/leadership-team', [LeadershipTeam::class, 'leadership'])->name('leadership-team');
Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
Route::get('/course-details', [CourseDetailsController::class, 'coursedetails'])->name('course-details');
Route::get('/scholarships', [ScholarshipController::class, 'scholarships'])->name('scholarships');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/enquiry', [EnquiryController::class, 'store'])->name('enquiry.store');
Route::get('/education-skills-future-readiness', [EduSkillsController::class, 'eduskills'])->name('education-skills-future-readiness');
Route::get('/climate-environment-sustainable-development', [climateEnvController::class, 'climate'])->name('climate-environment-sustainable-development');
Route::get('/innovation-livelihoods-inclusive-empowerment', [innovativeController::class, 'innovative'])->name('innovation-livelihoods-inclusive-empowerment');
Route::get('/impact-ecosystem', [impactController::class, 'impact'])->name('impact-ecosystem');
Route::get('/blogs', [blogsController::class, 'blogs'])->name('blogs');
Route::get('/blog-details/{slug}', [blogsController::class, 'show'])->name('blog-details');
Route::get('/modules', [ModulesController::class, 'index'])->name('modules');
Route::get('/madhukar-gumble', [MadhukarGumbaleController::class, 'madhukargumbale'])->name('madhukar-gumble');
Route::get('/madhukar-sanap', [MadhukarSnapController::class, 'madhukarsanap'])->name('madhukar-sanap');
Route::get('/santosh-kumar', [SantoshController::class, 'santoshkumar'])->name('santosh-kumar');
Route::get('/deepti-bhatnagar', [DeeptiController::class, 'deepti'])->name('deepti-bhatnagar');
Route::get('/enroll-form', [EnrollmentController::class, 'create'])->name('enroll.create');
Route::post('/enroll-form', [EnrollmentController::class, 'store'])->name('enroll.store');
Route::get('/enrollment-success/{reservationNumber}', [EnrollmentController::class, 'success'])->name('enrollment.success');
Route::get('/enroll-form/pay/{reservationNumber}', [EnrollmentController::class, 'pay'])->name('enrollment.pay');
Route::post('/enroll-form/verify-payment', [EnrollmentController::class, 'verifyPayment'])->name('enrollment.verify');
// routes/web.php
Route::post('/webhooks/razorpay', [EnrollmentController::class, 'razorpayWebhook'])
    ->name('razorpay.webhook');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ---- Admin routes: written flat (no ->name() group prefixing) ----
// 'web' is added explicitly here (session, CSRF, $errors sharing) since it
// wasn't being applied automatically to this file's routes as expected.

Route::get('admin/login', [AdminAuthenticatedSessionController::class, 'create'])
    ->middleware(['web', 'guest'])
    ->name('admin.login');

Route::post('admin/login', [AdminAuthenticatedSessionController::class, 'store'])
    ->middleware(['web', 'guest']);

Route::get('admin/dashboard', [AdminDashboardController::class, 'index'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.dashboard');

Route::get('admin/users', [UserController::class, 'index'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.users.index');

Route::get('admin/users/{user}/edit', [UserController::class, 'edit'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.users.edit');

Route::put('admin/users/{user}', [UserController::class, 'update'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.users.update');

Route::delete('admin/users/{user}', [UserController::class, 'destroy'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.users.destroy');

Route::get('admin/categories', [CategoryController::class, 'index'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.categories.index');

Route::get('admin/categories/create', [CategoryController::class, 'create'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.categories.create');

Route::post('admin/categories', [CategoryController::class, 'store'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.categories.store');

Route::get('admin/categories/{category}/edit', [CategoryController::class, 'edit'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.categories.edit');

Route::put('admin/categories/{category}', [CategoryController::class, 'update'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.categories.update');

Route::delete('admin/categories/{category}', [CategoryController::class, 'destroy'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.categories.destroy');

Route::get('admin/courses', [CourseController::class, 'index'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.courses.index');

Route::get('admin/courses/create', [CourseController::class, 'create'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.courses.create');

Route::post('admin/courses', [CourseController::class, 'store'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.courses.store');

Route::get('admin/courses/{course}/edit', [CourseController::class, 'edit'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.courses.edit');

Route::put('admin/courses/{course}', [CourseController::class, 'update'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.courses.update');

Route::delete('admin/courses/{course}', [CourseController::class, 'destroy'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.courses.destroy');


Route::get('admin/blogs', [BlogController::class, 'index'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.blogs.index');

Route::get('admin/blogs/create', [BlogController::class, 'create'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.blogs.create');

Route::post('admin/blogs', [BlogController::class, 'store'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.blogs.store');

Route::get('admin/blogs/{blog}/edit', [BlogController::class, 'edit'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.blogs.edit');

Route::put('admin/blogs/{blog}', [BlogController::class, 'update'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.blogs.update');

Route::delete('admin/blogs/{blog}', [BlogController::class, 'destroy'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.blogs.destroy');

Route::get('admin/modules', [ModuleController::class, 'index'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.modules.index');

Route::get('admin/modules/create', [ModuleController::class, 'create'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.modules.create');

Route::post('admin/modules', [ModuleController::class, 'store'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.modules.store');

Route::get('admin/modules/{module}/edit', [ModuleController::class, 'edit'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.modules.edit');

Route::put('admin/modules/{module}', [ModuleController::class, 'update'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.modules.update');

Route::delete('admin/modules/{module}', [ModuleController::class, 'destroy'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.modules.destroy');

Route::get('admin/enquiries', [AdminEnquiryController::class, 'index'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.enquiries.index');

Route::get('admin/enquiries/{enquiry}/edit', [AdminEnquiryController::class, 'edit'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.enquiries.edit');

Route::put('admin/enquiries/{enquiry}', [AdminEnquiryController::class, 'update'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.enquiries.update');

Route::delete('admin/enquiries/{enquiry}', [AdminEnquiryController::class, 'destroy'])
    ->middleware(['web', 'auth', 'admin'])
    ->name('admin.enquiries.destroy');

Route::post('admin/logout', [AdminAuthenticatedSessionController::class, 'destroy'])
    ->middleware(['web', 'auth'])
    ->name('admin.logout');

require __DIR__.'/auth.php';