<?php

namespace App\Http\Controllers;

use App\Models\Save;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    public function index() {
        $saves= Save::with(['user', 'job.company.province'])->where('users_id', Auth::user()->id)->get();

        // dd($saves);
        return view('pages.save', [
            'saves' => $saves
        ]);
    }

    public function destroy($id) {
        $save = Save::find($id);
        $save->delete();

        return redirect()->route('save');
    }
}