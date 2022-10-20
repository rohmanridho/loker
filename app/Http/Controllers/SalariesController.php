<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalariesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.salaries');
    }
}
