<?php

namespace App\Http\Controllers\Admin;

use App\Models\Industry;
use App\Models\Province;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $industries = Industry::count();
        $provinces = Province::count();
        return view('pages.admin.dashboard', [
            'industries' => $industries,
            'provinces' => $provinces
        ]);
    }
}