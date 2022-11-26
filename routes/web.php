<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CompanyDetailController;
use App\Http\Controllers\JobDetailController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\ApplyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;

use App\Http\Controllers\JobsController;
use App\Http\Controllers\CompareController;

use App\Http\Controllers\Employer\CompanyController as EmployerCompanyController;
use App\Http\Controllers\Employer\JobController as EmployerJobController;
use App\Http\Controllers\Employer\ApplyController as EmployerApplyController;

use App\Http\Controllers\Admin\UserController as
AdminUserController;
use App\Http\Controllers\Admin\CompanyController as AdminCompanyController;
use App\Http\Controllers\Admin\JobController as
AdminJobController;
use App\Http\Controllers\Admin\IndustryController as AdminIndustryController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\ProvinceController as AdminProvinceController;

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

Route::get('/job', [JobController::class, 'index'])->name('search-job');

Route::get('company/{slug}', [CompanyDetailController::class, 'index'])->name('company-detail');

Route::get('company/{company}/job/{slug}', [JobDetailController::class, 'index'])->name('job-detail');

Route::redirect('/company', '/job', 301);

Route::group(
    [
        'middleware' => 'auth'
    ],
    function () {
        Route::get('/profile/{username}', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile/resume', [ProfileController::class, 'update'])->name('resume.update');

        Route::get('/account-settings', [SettingController::class, 'account'])->name('account-settings');
        Route::get('/contact-settings', [SettingController::class, 'contact'])->name('contact-settings');
        Route::get('/privacy-settings', [SettingController::class, 'privacy'])->name('privacy-settings');
        Route::post('/account-settings', [SettingController::class, 'updateAccount'])->name('account.update');
        Route::post('/contact-settings', [SettingController::class, 'updateContact'])->name('contact.update');
        Route::post('/profile-picture', [SettingController::class, 'uploadProfilePicture'])->name('picture.update');

        Route::post('/change-role', [App\Http\Controllers\Employer\DashboardController::class, 'changerole'])->name('change-role');

        Route::get('/follow', [FollowController::class, 'index'])->name('follow');
        Route::post('/follow-company/{id}', [CompanyDetailController::class, 'follow'])->name('follow-company');
        Route::delete('/delete-follow/{id}', [FollowController::class, 'destroy'])->name('follow-destroy');

        Route::get('/save', [SaveController::class, 'index'])->name('save');
        Route::post('/save-job/{id}', [JobDetailController::class, 'save'])->name('save-job');
        Route::delete('/delete-save/{id}', [SaveController::class, 'destroy'])->name('save.destroy');

        Route::get('/apply', [ApplyController::class, 'index'])->name('apply');
        Route::post('/apply-job/{id}', [JobDetailController::class, 'apply'])->name('apply-job');
        Route::delete('/delete-apply/{id}', [ApplyController::class, 'destroy'])->name('apply-destroy');
        Route::get('/apply/cetak-bukti-pendaftaran/{id}', [ApplyController::class, 'generatePDF'])->name('generate-pdf');



        Route::group(
            [
                'prefix' => 'employer',
                'middleware' => 'CheckRole:employer'
            ],
            function () {
                Route::get('/', [App\Http\Controllers\Employer\DashboardController::class, 'index'])->name('employer-dashboard');

                Route::get('company/create', [EmployerCompanyController::class, 'create'])->name('company.create');
                Route::post('company-create', [EmployerCompanyController::class, 'store'])->name('company.store');
                Route::get('company', [EmployerCompanyController::class, 'edit'])->name('company.edit');

                // Route::resource('company', EmployerCompanyController::class);
                Route::resource('job', EmployerJobController::class);

                Route::get('apply', [EmployerApplyController::class, 'index'])->name('apply-index');
                Route::match(['get', 'post'], 'update-apply/{id}', [EmployerApplyController::class, 'update'])->name('apply-update');
            }
        );

        Route::group(
            [
                'prefix' => 'admin',
                'middleware' => 'CheckRole:admin'
            ],
            function () {
                Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin-dashboard');
                Route::resource(
                    'users',
                    AdminUserController::class
                );
                Route::resource(
                    'companies',
                    AdminCompanyController::class
                );
                Route::resource(
                    'jobs',
                    AdminJobController::class
                );
                Route::resource(
                    'industry',
                    AdminIndustryController::class
                );
                Route::resource(
                    'categories',
                    AdminCategoryController::class
                );
                Route::resource(
                    'province',
                    AdminProvinceController::class
                );
            }
        );
    }
);



Auth::routes();





Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

Route::get('/compare', [CompareController::class, 'index'])->name('compare');