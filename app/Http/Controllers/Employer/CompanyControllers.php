<?php

namespace App\Http\Controllers\Employer;

use App\Models\Company;
use App\Models\Industry;
use App\Models\Province;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyControllers extends Controller
{
    public function index(Request $request) {
        if($request->has('search')){
            $companies = Company::with(['industry', 'province'])->where('name', 'LIKE', '%'. $request->search . '%')->where('users_id', Auth::user()->id)->get();
        } else {
            $companies = Company::with(['industry', 'province'])->where('users_id', Auth::user()->id)->get();
        }

        return view('pages.employer.company.index', [
            'companies' => $companies
        ]);
    }

    public function create() {
        $industries = Industry::all();
        $provinces = Province::all();
        return view('pages.employer.company.create', [
            'industries' => $industries,
            'provinces' => $provinces
        ]);
    }

    public function store(Request $request) {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/company', 'public');

        Company::create($data);
        return redirect()->route('company-dashboard');
    }

    public function edit($id) {
        $company = Company::with(['industry', 'province'])->find($id);
        $industries = Industry::all();
        $provinces = Province::all();
        return view('pages.employer.company.edit', [
            'company' => $company,
            'industries' => $industries,
            'provinces' => $provinces
        ]);
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/company', 'public');

        $company = Company::find($id);
        $company->update($data);
        return redirect()->route('company-dashboard');
    }

    public function destroy($id) {
        $company = Company::find($id);
        $company->delete();
        return redirect()->route('company-dashboard');
    }
}