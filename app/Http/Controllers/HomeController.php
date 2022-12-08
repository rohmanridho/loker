<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use App\Models\Industry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $jobs = Job::with(['company.province', 'category'])->whereHas('company', function($company) {
            $company->where('status', 'Sudah Disetujui');
        })->take(8)->inRandomOrder()->get();
        // $companies = Company::query();
        $companies = Company::take(4)->get();
        $categories = Category::take(10)->inRandomOrder()->get();
        $industries = Industry::take(4)->get();

        return view('pages.home', [
            'jobs' => $jobs,
            'companies' => $companies,
            'categories' => $categories,
            'industries' => $industries,
        ]);
    }
}