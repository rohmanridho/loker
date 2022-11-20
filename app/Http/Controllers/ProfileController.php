<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($username) {
        $user = Auth::user();
        return view('pages.profile', [
            'user' => $user
        ]);
    }
}