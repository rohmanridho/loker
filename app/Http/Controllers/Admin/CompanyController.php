<?php

namespace App\Http\Controllers\Admin;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\CompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        if (request()->ajax()) {
            $query = Company::with(['user', 'industry', 'province']);

            return DataTables::of($query)
                ->addColumn('action', function ($company) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown-center">
                            <button class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="dropdown">
                                    Actions
                                </button>
                                <div class= "dropdown-menu">
                                <a href="' . route('company-detail ', $company->slug) . '" target="_blank" class="dropdown-item">
                                    Preview</a>
                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#edit-modal-' . $company->id . '" data-bs-whatever="@getbootstrap">Edit</button>
                                    <button class="text-danger dropdown-item" onclick="deleteConfirm(' . $company->id . ',\'' . $company->name . '\')">Delete</button>
                                </div>
                        </div>
                    </div>
                        
                    ';
                })
                ->editColumn('photo', function ($company) {
                    return $company->photo ? '<img src="' . Storage::url($company->photo) . '" style="height: 64px; width: 64px; border-radius: 4px; object-fit: cover;"/>' : '';
                })
                ->editColumn('document', function ($company) {
                    return $company->document ? '<a href="' . Storage::url($company->document) . '" style="" target="_blank">Lihat</a>' : '';
                })
                ->rawColumns(['action', 'photo', 'document'])
                ->make();
        }
        return view('pages.admin.company.index', [
            'companies' => $companies
        ]);
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
    public function store(CompanyRequest $request)
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
        $company = Company::find($id);
        $company->status = $request['status'];
        $company->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('companies.index');
    }
}