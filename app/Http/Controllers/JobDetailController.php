<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Save;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobDetailController extends Controller
{
    public function index(Request $request, $slug) {
        $job = Job::with(['company.province', 'category'])->where('slug', $slug)->first();
        return view('pages.job-detail', [
            'job' => $job
        ]);
    }

    public function save(Request $request, $id) {
        $data = [
            'jobs_id' => $id,
            'users_id' => Auth::user()->id
        ];
        
        Save::create($data);
        // dd($result);
        return redirect()->route('save');
    }
}