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
    public function create()
    {
        $company = Company::where('users_id', Auth::user()->id)->count();

        if ($company == 1) {
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

    public function store(CompanyRequest $request)
    {
        $company = Company::where('users_id', Auth::user()->id)->count();
        if ($company == 0) {
            $data = $request->all();
            $data['slug'] = Str::slug($request->name);
            $data['photo'] = $request->file('photo')->store('assets/company', 'public');

            Company::create($data);
            return redirect()->route('company.edit')->with('success', 'Perusahan Berhasil di Buat');
        }

        return redirect()->route('company.edit');
    }

    public function edit()
    {
        $company = Company::with(['industry', 'province', 'user'])->where('users_id', Auth::user()->id)->first();
        $industries = Industry::orderBy('name')->get();
        $provinces = Province::orderBy('name')->get();
        return view('pages.employer.company.edit', [
            'company' => $company,
            'industries' => $industries,
            'provinces' => $provinces
        ]);
    }

    public function update(CompanyRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        if($request->has('photo')) {
            $data['photo'] = $request->file('photo')->store('company/logo', 'public');
        }

        $item = Company::where('users_id', Auth::user()->id)->first();
        $company = Company::find($item->id);
        $company->update($data);
        return redirect()->back();
    }
}