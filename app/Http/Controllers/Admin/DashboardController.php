<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use App\Models\User;
use App\Models\Company;
use App\Models\Category;
use App\Models\Industry;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::count();
        $companies = Company::count();
        $jobs = Job::count();
        $industries = Industry::count();
        $provinces = Province::count();
        $categories = Category::count();
        return view('pages.admin.dashboard', [
            'users' => $users,
            'companies' => $companies,
            'jobs' => $jobs,
            'industries' => $industries,
            'provinces' => $provinces,
            'categories' => $categories
        ]);
    }
}