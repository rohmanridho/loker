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
            $query = Job::with(['company', 'category'])->whereHas('company', function($product) {
                $product->where('users_id', Auth::user()->id);
            });

            return DataTables::of($query)
                ->addColumn('action', function ($job) {
                    return '
                    <div class= "btn-group">
                        <div class= "dropdown">
                            <button class= "btn btn-primary dropdown-toggle mr-1 mb-1"
                                    type= "button"
                                    data-toggle= "dropdown">
                                    Actions
                                </button>
                                <div class= "dropdown-menu">
                                    <a href="' . route('job.show', $job->id) . '" class="dropdown-item">
                                    Preview</a>
                                    <a href="' . route('job.edit', $job->id) . '" class="dropdown-item">
                                    Edit</a>
                                    <form action= "' . route('job.destroy', $job->id) . '" method= "POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class= "dropdown-item text-danger">
                                        Delete
                                        </button>
                                    </form>
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
        $companies = Company::where('users_id', Auth::user()->id)->get();
        $categories = Category::all();
        return view('pages.employer.job.create', [
            'companies' => $companies,
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}