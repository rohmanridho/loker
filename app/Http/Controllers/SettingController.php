<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function account() {
        $user = Auth::user();
        return view("pages.settings-account", [
            'user' => $user
        ]);
    }

    public function contact() {
        $user = Auth::user();
        return view("pages.settings-contact", [
            'user' => $user
        ]);
    }

    public function privacy() {
        return view('pages.settings-privacy');
    }

    public function update(Request $request, $redirect) {
        $data = $request->all();
        $item = Auth::user();
        $item->update($data);
        return redirect()->route($redirect)->with('success', 'Data Berhasil Di Update');
    }
}