<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Save;
use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobDetailController extends Controller
{
    public function index(Request $request, $company, $slug)
    {
        $job = Job::with(['company.province', 'category'])->where('slug', $slug)->first();
        if (Auth::check()) {
            $saveCount = Save::with(['job', 'user'])->where('users_id', Auth::user()->id)->where('jobs_id', $job->id)->count();
            $save = Save::with(['job', 'user'])->where('users_id', Auth::user()->id)->where('jobs_id', $job->id)->first();

            $applyCount = Apply::with(['job', 'user'])->where('users_id', Auth::user()->id)->where('jobs_id', $job->id)->count();
            $apply = Apply::with(['job', 'user'])->where('users_id', Auth::user()->id)->where('jobs_id', $job->id)->first();

            $data = [
                'job' => $job,
                'saveCount' => $saveCount,
                'save' => $save,
                'applyCount' => $applyCount,
                'apply' => $apply
            ];
        } else {
            $data = [
                'job' => $job,
            ];
        }

        return view('pages.job-detail', $data);
    }

    public function save(Request $request, $id)
    {
        $data = [
            'jobs_id' => $id,
            'users_id' => Auth::user()->id
        ];

        Save::create($data);
        // dd($result);
        return redirect()->back();
    }

    public function apply(Request $request, $id)
    {
        $data = [
            'jobs_id' => $id,
            'users_id' => Auth::user()->id
        ];

        Apply::create($data);
        // dd($result);
        return redirect()->route('apply');
    }
}