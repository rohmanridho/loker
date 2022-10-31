<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobDetailController extends Controller
{
    public function index(Request $request, $slug) {
        $job = Job::with(['company.province', 'category'])->where('slug', $slug)->first();
        return view('pages.job-detail', [
            'job' => $job
        ]);
    }
}