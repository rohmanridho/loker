<?php

namespace App\Http\Controllers\Employer;

use App\Models\Job;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\JobRequest;
use Yajra\DataTables\Facades\DataTables;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Job::with(['company', 'category'])->whereHas('company', function ($product) {
                $product->where('users_id', Auth::user()->id);
            });

            return DataTables::of($query)
                ->addColumn('action', function ($job) {
                    return '
                    <div class= "btn-group">
                        <div class= "dropdown-center">
                            <button class= "btn btn-primary"
                                    type= "button"
                                    role="button"
                                    data-bs-toggle="dropdown">
                                    Actions
                                </button>
                                <div class="dropdown-menu">
                                    <a href="' . route('job-detail', ['company' => $job->company->slug, 'slug' => $job->slug]) . '" target="_blank" class="dropdown-item">
                                    Preview</a>
                                    
                                    <a href="' . route('job.edit', $job->id) . '" class="dropdown-item">
                                    Edit</a>
                                    <button class="dropdown-item text-danger" onclick="deleteConfirm(' . $job->id . ',\'' . $job->name . '\')">Delete</button>
                                </div>
                        </div>
                    </div>
                ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.employer.job.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $company = Company::where('users_id', Auth::user()->id)->first();
        $categories = Category::all();

        if(!$company) {
            return redirect()->route('company.create');
        }

        return view('pages.employer.job.create', [
            'company' => $company,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        Job::create($data);
        return redirect()->route('job.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::with(['company.province', 'category'])->find($id);
        return view('pages.employer.job.preview', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::with(['company', 'category'])->find($id);
        $company = Company::where('users_id', Auth::user()->id)->first();
        $categories = Category::all();
        return view('pages.employer.job.edit', [
            'job' => $job,
            'company' => $company,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $job = Job::find($id);
        $job->update($data);

        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id);
        $job->delete();

        return redirect()->route('job.index');
    }
}