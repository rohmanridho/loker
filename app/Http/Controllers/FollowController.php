<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function index() {
        $follows = Follow::with(['user', 'company.province', 'company.industry'])->where('users_id', Auth::user()->id)->get();
        return view('pages.follow', [
            'follows' => $follows
        ]);
    }

    public function follow(Request $request, $id)
    {
        $follow = Follow::where([
            'users_id' => Auth::user()->id,
            'companies_id' => $id
        ])->count();

        if ($follow == 0) {
            $data = [
                'companies_id' => $id,
                'users_id' => Auth::user()->id
            ];
            Follow::create($data);
            return redirect()->back();
        }
        return redirect()->back()->with('error', 'Anda telah mengikuti');
    }

    public function destroy($id)
    {
        $follow = Follow::find($id);
        $follow->delete();
        return redirect()->back();
    }
}