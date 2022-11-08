<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function index() {
        $follows = Follow::with(['user', 'company.province', 'company.industry'])->where('users_id', Auth::user()->id)->get();
        
        // dd($follows);
        return view('pages.follow', [
            'follows' => $follows
        ]);
    }

    public function destroy($id)
    {
        $save = Follow::find($id);
        $save->delete();

        return redirect()->route('follow');
    }
}