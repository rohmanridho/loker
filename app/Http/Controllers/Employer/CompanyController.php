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
        $haveCompany = Company::where('users_id', Auth::user()->id)->count();

        if (!$haveCompany) {
            $industries = Industry::orderBy('name')->get();
            $provinces = Province::orderBy('name')->get();
            return view('pages.employer.company.create', [
                'industries' => $industries,
                'provinces' => $provinces
            ]);
        } else {
            return redirect()->route('company.edit');
        }
    }

    public function store(CompanyRequest $request)
    {
        $haveCompany = Company::where('users_id', Auth::user()->id)->count();

        if (!$haveCompany) {
            $companies = Company::count() + 1;
            $data = $request->all();
            $data['slug'] = Str::slug($request->name);
            $data['photo'] = $request->file('photo')->store('company/logo', 'public');
            $data['document'] =
                $request->file('document')->storeAs(
                    'company/document',
                    $data['slug'] . '-' . $companies . '.' . $request->file('document')->getClientOriginalExtension(),
                    'public'
                );

            Company::create($data);
            return redirect()->route('company.edit')->with('success', 'Perusahan Berhasil di Buat');
        }

        return redirect()->route('company.edit');
    }

    public function edit()
    {
        $haveCompany = Company::where('users_id', Auth::user()->id)->count();
        if($haveCompany) {
            $company = Company::with(['industry', 'province', 'user'])->where('users_id', Auth::user()->id)->first();
            $industries = Industry::orderBy('name')->get();
            $provinces = Province::orderBy('name')->get();
            return view('pages.employer.company.edit', [
                'company' => $company,
                'industries' => $industries,
                'provinces' => $provinces
            ]);
        } else {
            return redirect()->route('company.create');
        }
    }

    public function update(CompanyRequest $request)
    {
        $item = Company::where('users_id', Auth::user()->id)->first();

        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        if ($request->has('photo')) {
            $data['photo'] = $request->file('photo')->store('company/logo', 'public');
        }
        if ($request->has('document')) {
            $companies = Company::count() + 1;
            $file = $request->file('document')->storeAs(
                'company/document',
                $data['slug'] . '-' . $companies . '.' . $request->file('document')->getClientOriginalExtension(),
                'public'
            );
            $data['document'] = $file;
        }

        $company = Company::find($item->id);
        $company->update($data);
        return redirect()->back()->with('success', 'Perusahan Berhasil di Update');
    }
}