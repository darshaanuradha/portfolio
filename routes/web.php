<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Portfolio\Home;
use App\Livewire\Portfolio\About;
use App\Livewire\Portfolio\Projects;
use App\Livewire\Portfolio\Contact;
use App\Http\Controllers\CvController;
use App\Http\Controllers\AdminController;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/projects', Projects::class)->name('projects');
Route::get('/contact', Contact::class)->name('contact');

// Admin authentication routes
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

// Admin dashboard routes (protected by auth middleware)
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', \App\Livewire\Admin\Dashboard::class)->name('admin.dashboard');
    
    // Personal Info management
    Route::get('/personal-info', \App\Livewire\Admin\PersonalInfoManager::class)->name('admin.personal-info');
    
    // Education management
    Route::get('/education', \App\Livewire\Admin\EducationManager::class)->name('admin.education');
    
    // Experience management
    Route::get('/experience', \App\Livewire\Admin\ExperienceManager::class)->name('admin.experience');
    
    // Skills management
    Route::get('/skills', \App\Livewire\Admin\SkillManager::class)->name('admin.skills');
    
    // Certifications management
    Route::get('/certifications', \App\Livewire\Admin\CertificationManager::class)->name('admin.certifications');
    
    // Projects management
    Route::get('/projects', \App\Livewire\Admin\ProjectManager::class)->name('admin.projects');
});

// CV download route
Route::get('/download-cv', [CvController::class, 'download'])->name('download.cv');
