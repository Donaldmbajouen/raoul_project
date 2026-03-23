<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Services
Route::get('/services', [App\Http\Controllers\ServiceController::class, 'index'])->name('services');
Route::get('/services/{slug}', [App\Http\Controllers\ServiceController::class, 'show'])->name('services.show');

// About
Route::get('/a-propos', function () {
    return view('about');
})->name('about');

// Projects/Realizations
Route::get('/realisations', [App\Http\Controllers\ProjectController::class, 'index'])->name('realizations');
Route::get('/projet/{slug}', [App\Http\Controllers\ProjectController::class, 'show'])->name('project.show');

// Programs
Route::get('/programmes', function () {
    return view('programs');
})->name('programs');

// Trainings
Route::get('/formations', [App\Http\Controllers\TrainingController::class, 'index'])->name('training');
Route::get('/formation/{slug}', [App\Http\Controllers\TrainingController::class, 'show'])->name('training.show');

// Blog
Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [App\Http\Controllers\BlogController::class, 'show'])->name('blog.single');

// Contact
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Auth routes (accessible sans authentification)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'showLogin'])->name('login');
        Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'login']);
    });
    
    // Protected admin routes
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::post('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
        
        // Resources
        Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
        Route::resource('projects', App\Http\Controllers\Admin\ProjectController::class);
        Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
        Route::resource('trainings', App\Http\Controllers\Admin\TrainingController::class);
        Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);
        Route::resource('partners', App\Http\Controllers\Admin\PartnerController::class);
        Route::resource('contacts', App\Http\Controllers\Admin\ContactController::class)->only(['index', 'show', 'update', 'destroy']);
    });
});

// Language Switcher
Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'fr'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');
