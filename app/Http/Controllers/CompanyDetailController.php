<?php

namespace App\Http\Controllers;

use App\models\Job;
use App\Models\Follow;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyDetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $company = Company::with(['industry', 'province'])->where('slug', $slug)->first();

        $jobs = Job::with('company')->where('companies_id', $company->id)->take(8)->get();

        return view('pages.company-detail', [
            'company' => $company,
            'jobs' => $jobs
        ]);
    }
}