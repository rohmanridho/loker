<?php

namespace App\Http\Controllers;

use App\Models\Save;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    public function index() {
        $saves= Save::with(['job.company', 'user'])->where('users_id', Auth::user()->id)->get();
    }
}
