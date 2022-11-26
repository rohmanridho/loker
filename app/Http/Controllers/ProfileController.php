<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ResumeRequest;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index($username)
    {
        $user = Auth::user();
        return view('pages.profile', [
            'user' => $user
        ]);
    }

    public function update(ResumeRequest $request)
    {
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
        // $data = $request->all();
        // if($request->has('resume')) {
        //     $data['resume'] = $request->file('resume')->storeAs(
        //         'user/resume',
        //         Auth::user()->name . '_' . Auth::user()->id . '.' . $request->file('resume')->getClientOriginalExtension(),
        //         'public'
        //     );
        // }

        // $user = Auth::user();
        // $user->update($data);
        return redirect()->back()->with('success', 'Resume Berhasil di Upload');
    }
}