<?php

namespace App\Http\Controllers\Employer;

use App\Models\Company;
use App\Models\Industry;
use App\Models\Province;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CompanyRequest;

class CompanyController extends Controller
{
    public function create() {
        $companies = Company::where('users_id', Auth::user()->id)->count();
        
        if ($companies == 1) {
            return redirect()->route('company.edit');
        } else {
            $industries = Industry::orderBy('name')->get();
            $provinces = Province::orderBy('name')->get();
            return view('pages.employer.company.create', [
                'industries' => $industries,
                'provinces' => $provinces
            ]);
        }
    }

    public function store(CompanyRequest $request) {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/company', 'public');

        Company::create($data);
        return redirect()->route('company.edit');
    }

    public function edit() {
        $company = Company::with(['industry', 'province', 'user'])->where('users_id', Auth::user()->id)->first();
        $industries = Industry::orderBy('name')->get();
        $provinces = Province::orderBy('name')->get();
        return view('pages.employer.company.edit', [
            'company' => $company,
            'industries' => $industries,
            'provinces' => $provinces
        ]);
    }
}