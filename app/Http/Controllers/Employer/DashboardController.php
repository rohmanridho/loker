<?php

namespace App\Http\Controllers\Employer;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.employer.dashboard');
    }

    public function changeRole() {
        if(Auth::check()) {
            if(Auth::user()->roles_id == 3) {
                User::updateOrCreate([
                    'id' => Auth::user()->id
                ], [
                    'roles_id' => 2
                ]);
            }
        }

        return redirect()-route('employer-dashboard');
    }
}