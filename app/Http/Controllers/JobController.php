<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Save;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public function index(Request $request)
    {
        // // $request->has('search')
        // $search = $request->search;
        // if (request('search')) {
        //     $jobs = Job::with(['company.province'])->where('name', 'LIKE', '%' . $search . '%')
        //         ->orWhere(function ($query) {
        //             $query->whereHas('company', function ($company) {
        //                 $company->where('name', 'LIKE', '%' . $_REQUEST['search'] . '%');
        //             });
        //         })
        //         ->orWhere(function ($query) {
        //             $query->whereHas('category', function ($category) {
        //                 $category->where('name', 'LIKE', '%' . $_REQUEST['search'] . '%');
        //             });
        //         })
        //         ->orWhere(function ($query) {
        //             $query->where('description', 'LIKE', '%' . $_REQUEST['search'] . '%');
        //         })->get();
        //     $job_count = Job::where('name', 'LIKE', '%' . $request->search . '%')->count();
        // } else {
        //     $jobs = Job::with('company.province')->get();
        //     $job_count = Job::count();
        // }

        $jobs = Job::with(['company.province'])->whereHas('company', function($company) {
            $company->where('status', 'Sudah Disetujui');
        })->latest()->filter(request(['search']))->get();

        return view('pages.job', [
            'jobs' => $jobs
        ]);
    }
}