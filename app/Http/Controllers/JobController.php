<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request) {
        // $request->has('search')
        if(request('search')) {
            $jobs = Job::with(['company.province', 'simpan'])->where('name', 'LIKE', '%' . $request->search . '%')->get();
            $job_count = Job::where('name', 'LIKE', '%' . $request->search . '%')->count();
        } else {
            $jobs = Job::with('company.province')->get();
            $job_count = Job::count();
        }

        return view('pages.job', [
            'jobs' => $jobs,
            'job_count' => $job_count
        ]);
    }
}