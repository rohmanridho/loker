<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyDetailController extends Controller
{
    public function index(Request $request, $slug) {
        $company = Company::with(['industry', 'province'])->where('slug', $slug)->first();

        return view('pages.company-detail', [
            'company' => $company
        ]);
    }
}