<?php

namespace App\Http\Controllers;

use App\Models\Save;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    public function index() {
        $saves= Save::with(['user', 'job.company.province'])->where('users_id', Auth::user()->id)->latest()->get();

        return view('pages.save', [
            'saves' => $saves,
        ]);
    }

    public function save(Request $request, $id)
    {
        $save = Save::where([
            'users_id' => Auth::user()->id,
            'jobs_id' => $id
        ])->count();

        if ($save == 0) {
            $data = [
                'jobs_id' => $id,
                'users_id' => Auth::user()->id
            ];
            Save::create($data);
            return redirect()->back();
        }

        return redirect()->back()->with('error', 'Anda telah menyimpan');
    }

    public function destroy($id) {
        $save = Save::find($id);
        $save->delete();
        return redirect()->back();
    }
}