<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\CompareController;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\SalariesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\JobDetailController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\CompanyDetailController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\CompanyController as JobCompanyController;
use App\Http\Controllers\Employer\JobController as EmployerJobController;
use App\Http\Controllers\Employer\CompanyController as EmployerCompanyController;
use App\Http\Controllers\JobController as ControllersJobController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/job/{slug}', [JobDetailController::class, 'index'])->name('job-detail');
Route::post('/job/{id}', [JobDetailController::class, 'save'])->name('job-save');

Route::get('/company/{slug}', [CompanyDetailController::class, 'index'])->name('company-detail');
Route::post('/company/{id}', [CompanyDetailController::class, 'follow'])->name('company-follow');

Route::get('/job', [ControllersJobController::class, 'index'])->name('job-search');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/follow', [FollowController::class, 'index'])->name('follow');
    Route::delete('/follow/{id}', [FollowController::class, 'destroy'])->name('follow-destroy');

    Route::get('/save', [SaveController::class, 'index'])->name('save');
    Route::delete('/save/{id}', [SaveController::class, 'destroy'])->name('save-destroy');
});



Route::group(
    [
        'prefix' => 'admin',
        // 'middleware' => 'CheckRole:admin'
    ],
    function () {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('categories', CategoryController::class);
        Route::resource('companies', CompanyController::class);
        Route::resource('industry', IndustryController::class);
        Route::resource('province', ProvinceController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('users', UserController::class);
        Route::resource('jobs', JobController::class);
    }
);

Route::group(
    [
        'prefix' => 'employer',
        // 'middleware' => 'CheckRole:employer'
    ],
    function () {
        Route::get('/', [App\Http\Controllers\Employer\DashboardController::class, 'index'])->name('employer-dashboard');
        Route::resource('company', EmployerCompanyController::class);
        Route::resource('job', EmployerJobController::class);
    }
);






































Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');
Route::get('/salaries', [SalariesController::class, 'index'])->name('salaries');
Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/profile/update-profile', [ProfileController::class, 'update'])->name('update-profile');

Route::get('/settings', [SettingsController::class, 'update'])->name('account-settings');
Route::get('/privacy', [SettingsController::class, 'index'])->name('privasi-settings');

Route::get('/compare', [CompareController::class, 'index'])->name('compare');

Auth::routes();