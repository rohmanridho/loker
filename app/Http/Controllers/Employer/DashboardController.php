<?php

namespace App\Http\Controllers\Employer;

use App\Models\User;
use App\Models\Company;
use App\Models\Job;
use App\Models\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $companies = Company::where('users_id', Auth::user()->id)->count();
        $jobs = Job::with('company')->whereHas('company', function($company) {
            $company->where('users_id', Auth::user()->id);
        })->count();
        $applies = Apply::with('job.company')->whereHas('job', function($job) {
            $job->with('company')->whereHas('company', function($company) {
                $company->where('users_id', Auth::user()->id);
            });
        })->count();
        return view('pages.employer.dashboard', [
            'companies' => $companies,
            'jobs' => $jobs,
            'applies' => $applies
        ]);
    }

    public function changeRole(Request $request) {
        $user = Auth::user();
        // $user->name = $request['name'];
        $user->roles_id = 2;

        $user->save();

        return redirect()->route('employer-dashboard');
    }
}
