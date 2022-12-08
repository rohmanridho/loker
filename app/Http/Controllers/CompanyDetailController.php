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
        $company = Company::with(['industry', 'province'])->where('slug', $slug)->whereHas('company', function($company) {
            $company->where('status', 'Sudah Disetujui');
        })->first();

        $jobs = Job::with('company')->where('companies_id', $company->id)->take(8)->get();

        if($company) {
            return view('pages.company-detail', [
                'company' => $company,
                'jobs' => $jobs
            ]);
        } else {
            if (Auth::user()->roles_id == 1) {
                return view('pages.company-detail', [
                    'company' => $company,
                    'jobs' => $jobs
                ]);
            }
            return redirect()->back();
        }


    }
}