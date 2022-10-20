<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('pages.home', [
            'galleries' => $galleries
        ]);
    }
}
