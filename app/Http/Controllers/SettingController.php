<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\PictureRequest;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function account()
    {
        $user = Auth::user();
        return view("pages.settings-account", [
            'user' => $user
        ]);
    }

    public function contact()
    {
        $user = Auth::user();
        return view("pages.settings-contact", [
            'user' => $user
        ]);
    }

    public function privacy()
    {
        return view('pages.settings-privacy');
    }

    public function updateAccount(UserRequest $request)
    {
        // if($request->has('name') && $request->has('email'))
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        // $data = $request->all();

        // $user = Auth::user();
        // $user->update($data);
        return redirect()->back()->with('success', 'Data Berhasil di Simpan');
    }

    public function uploadProfilePicture(PictureRequest $request) {
        $user = Auth::user();
        if($request->has('profile_picture')) {
            $file = $request->file('profile_picture')->store('user/profile_picture', 'public');
            $user->profile_picture = $file;
        }
        $user->save();
        return redirect()->back()->with('success', 'Foto Profile berhasil di Ubah');
    }
    
    public function updateContact(UserRequest $request)
    {
        // if($request->has('name') && $request->has('email'))
        $user = Auth::user();
        $user->address = $request->address;
        $user->city = $request->city;
        $user->zip_code = $request->zip_code;
        $user->phone_number = $request->phone_number;
        $user->save();
        // $data = $request->all();

        // $user = Auth::user();
        // $user->update($data);
        return redirect()->back()->with('success', 'Data Berhasil di Simpan');
    }
}