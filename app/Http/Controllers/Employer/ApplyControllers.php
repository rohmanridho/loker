<?php

namespace App\Http\Controllers\Employer;

use App\Models\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ApplyControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apply = Apply::all();
        if (request()->ajax()) {
            // $query = Apply::with(['job', 'user']);
            $query = Apply::with(['job.company', 'user'])->whereHas('job', function($job) {
                $job->with(['company'])->whereHas('company', function($company) {
                    $company->where('users_id', Auth::user()->id);
                });
            });

            return DataTables::of($query)
                ->addColumn('action', function ($apply) {
                    return '
                    <a href="' . route('apply.edit', $apply->id) . '" class="dropdown-item">Tinjau</a>
                ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.employer.apply.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $apply = Apply::find($id);
        return view('pages.employer.apply.edit', [
            'apply' => $apply
        ]);
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
        $apply = Apply::find($id);
        $apply->status = $request['status'];

        $apply->save();

        return redirect()->route('apply.index');
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