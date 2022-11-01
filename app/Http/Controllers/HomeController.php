<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Category;
use App\Models\Industry;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $jobs = Job::with(['company.province', 'category'])->take(8)->inRandomOrder()->get();
        $categories = Category::take(10)->inRandomOrder()->get();
        $industries = Industry::take(4)->get();

        return view('pages.home', [
            'jobs' => $jobs,
            'categories' => $categories,
            'industries' => $industries
        ]);
    }
}