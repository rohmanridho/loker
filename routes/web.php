<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\CompareController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
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
use App\Http\Controllers\JobController as ControllersJobController;
use App\Http\Controllers\Employer\JobController as EmployerJobController;
use App\Http\Controllers\Employer\ApplyController as EmployerApplyController;
use App\Http\Controllers\Employer\CompanyController as EmployerCompanyController;

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

Route::get('/job', [ControllersJobController::class, 'index'])->name('search-job');

Route::get('/company/{slug}', [CompanyDetailController::class, 'index'])->name('company-detail');

Route::get('/job/{slug}', [JobDetailController::class, 'index'])->name('job-detail');

Route::group(
    [
        'middleware' => 'auth'
    ],
    function () {
        Route::get('/account-settings', [SettingController::class, 'account'])->name('account-settings');

        Route::post('/change-role', [App\Http\Controllers\Employer\DashboardController::class, 'changerole'])->name('change-role');

        Route::get('/follow', [FollowController::class, 'index'])->name('follow');
        Route::post('/follow-company/{id}', [CompanyDetailController::class, 'follow'])->name('follow-company');
        Route::delete('/delete-follow/{id}', [FollowController::class, 'destroy'])->name('follow-destroy');

        Route::get('/save', [SaveController::class, 'index'])->name('save');
        Route::post('/save-job/{id}', [JobDetailController::class, 'save'])->name('save-job');
        Route::delete('/delete-save/{id}', [SaveController::class, 'destroy'])->name('save-destroy');

        Route::get('/apply', [ApplyController::class, 'index'])->name('apply');
        Route::post('/apply-job/{id}', [JobDetailController::class, 'apply'])->name('apply-job');
        Route::delete('/delete-apply/{id}', [ApplyController::class, 'destroy'])->name('apply-destroy');



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
                'middleware' => 'CheckRole:employer'
            ],
            function () {
                Route::get('/', [App\Http\Controllers\Employer\DashboardController::class, 'index'])->name('employer-dashboard');
                Route::resource('company', EmployerCompanyController::class);
                Route::resource('job', EmployerJobController::class);
                Route::get('apply', [EmployerApplyController::class, 'index'])->name('apply-index');
                Route::match(['get', 'post'], 'update-apply/{id}', [EmployerApplyController::class, 'update'])->name('apply-update');
            }
        );
    }
);



Auth::routes();






































Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

// Route::get('/settings', [SettingsController::class, 'update'])->name('account-settings');
Route::get('/privacy', [SettingsController::class, 'index'])->name('privasi-settings');

Route::get('/compare', [CompareController::class, 'index'])->name('compare');