<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\PictureRequest;
use Illuminate\Validation\Rules\Password;

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

    public function updateAccount(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['nullable', 'confirmed', 'min:8', Password::default()],
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $password = $request->password ? Hash::make($request->password) : $user->password;
        $user->password = $password;
        $user->save();
        return redirect()->back()->with('success', 'Data Berhasil di Simpan');
    }

    public function uploadAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'mimes:png,jpg,jpeg|max:2048'
        ]);

        $user = Auth::user();
        if ($user->avatar == NULL) {
            if ($request->has('avatar')) {
                $file = $request->file('avatar')->store('user/avatar', 'public');
                $user->avatar = $file;
            }
            $user->save();
            return redirect()->back()->with('success', 'Avatar Berhasil di Upload');
        }
        if ($request->has('avatar')) {
            $file = $request->file('avatar')->store('user/avatar', 'public');
            $user->profile_picture = $file;
        }
        $user->save();
        return redirect()->back()->with('success', 'Avatar Berhasil di Ubah');
    }

    public function updateContact(Request $request)
    {
        $request->validate([
            'address' => 'string|max:255',
            'city' => 'string|max:255',
            'zip_code' => 'integer',
            'phone_number' => 'integer'
        ]);

        $user = Auth::user();
        $user->address = $request->address;
        $user->city = $request->city;
        $user->zip_code = $request->zip_code;
        $user->phone_number = $request->phone_number;
        $user->save();
        return redirect()->back()->with('success', 'Data Berhasil di Simpan');
    }
}