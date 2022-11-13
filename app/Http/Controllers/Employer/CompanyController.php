<?php

namespace App\Http\Controllers\Employer;

use App\Models\Company;
use App\Models\Industry;
use App\Models\Province;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CompanyRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Company::with(['industry', 'province'])->where('users_id', Auth::user()->id);

            return DataTables::of($query)
                ->addColumn('action', function ($company) {
                    return '
                    <div class= "btn-group">
                        <div class= "dropdown">
                            <button class= "btn btn-primary dropdown-toggle mr-1 mb-1"
                                    type= "button"
                                    data-toggle= "dropdown">
                                    Actions
                                </button>
                                <div class= "dropdown-menu">
                                    <a href="' . route('company.show', $company->id) . '" class="dropdown-item">
                                    Preview</a>
                                    <a href="' . route('company.edit', $company->id) . '" class="dropdown-item">
                                    Edit</a>
                                    <form action= "' . route('company.destroy', $company->id) . '" method= "POST">
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
                ->editColumn('photo', function ($company) {
                    return $company->photo ? '<img src="' . Storage::url($company->photo) . '" style="height: 64px; aspect-ratio: 1/1; border-radius: 4px; object-fit: cover;"/>' : '';
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }
        return view('pages.employer.company.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $industries = Industry::all();
        $provinces = Province::all();
        return view('pages.employer.company.create', [
            'industries' => $industries,
            'provinces' => $provinces
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/company', 'public');

        Company::create($data);
        return redirect()->route('company.index');
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
        $company = Company::with(['industry', 'province'])->find($id);
        $industries = Industry::all();
        $provinces = Province::all();
        return view('pages.employer.company.edit', [
            'company' => $company,
            'industries' => $industries,
            'provinces' => $provinces
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/company', 'public');

        $company = Company::find($id);
        $company->update($data);
        return redirect()->route('company.index');
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
        return redirect()->route('company.index');
    }
}