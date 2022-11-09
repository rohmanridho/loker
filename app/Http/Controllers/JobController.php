<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index(Request $request) {
        // $request->has('search')
        if(request('search')) {
            $jobs = Job::where('name', 'LIKE', '%' . $request->search . '%')->get();
        } else {
            $jobs = Job::all();
        }

        return view('pages.job', [
            'jobs' => $jobs
        ]);
    }
}