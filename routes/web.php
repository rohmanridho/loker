<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingsController;

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Employer\CompanyController as EmployerCompany;

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

Route::group(
    [
        'prefix' => 'admin',
        // 'middleware' => 'CheckRole:admin'
    ],
    function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('companies', CompanyController::class);
        Route::resource('industry', IndustryController::class);
        Route::resource('province', ProvinceController::class);
        Route::resource('gallery', GalleryController::class);
    }
);

Route::group(
    [
        'prefix' => 'employer',
        // 'middleware' => 'CheckRole:employer'
    ],
    function () {
        Route::get('/', [App\Http\Controllers\Employer\DashboardController::class, 'index'])->name('employer-dashboard');

        Route::get('company', [EmployerCompany::class, 'index'])->name('company-dashboard');
        Route::get('/company/create', [EmployerCompany::class, 'create'])->name('company-create');
        Route::post('/company', [EmployerCompany::class, 'store'])->name('company-store');
        Route::get('/company/{id}', [EmployerCompany::class, 'edit'])->name('company-edit');
        Route::post('/company/{id}', [EmployerCompany::class, 'update'])->name('company-update');
        
    }
);





































Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::get('/salaries', [SalariesController::class, 'index'])->name('salaries');
Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/update-profile', [ProfileController::class, 'update'])->name('update-profile');

Route::get('/settings', [SettingsController::class, 'update'])->name('account-settings');
Route::get('/privacy', [SettingsController::class, 'index'])->name('privasi-settings');

Route::get('/jobs-company', [CompanyController::class, 'index'])->name('company');
Route::get('/jobs-company/add-jobs', [CompanyController::class, 'create'])->name('add-jobs');

Route::get('/compare', [CompareController::class, 'index'])->name('compare');

Auth::routes();