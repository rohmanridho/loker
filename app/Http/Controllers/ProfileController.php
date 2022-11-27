<?php

namespace App\Http\Controllers;

use App\Models\Save;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($username)
    {
        $user = Auth::user();
        $saves = Save::where('users_id', $user->id)->count();
        return view('pages.profile', [
            'user' => $user,
            'saves' => $saves
        ]);
    }

    public function uploadResume(Request $request)
    {
        $request->validate([
            'resume' => 'mimes:png,jpg,jpeg,pdf,doc,docx|max:1024'
        ]);

        $user = Auth::user();
        if($request->has('resume')) {
            $file = $request->file('resume')->storeAs(
                'user/resume',
                Auth::user()->name . '_' . Auth::user()->id . '.' . $request->file('resume')->getClientOriginalExtension(),
                'public'
            );
            $user->resume = $file;
        }
        $user->save();
        return redirect()->back()->with('success', 'Resume Berhasil di Upload');
    }
}