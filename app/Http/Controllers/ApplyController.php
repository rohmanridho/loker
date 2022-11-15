<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    public function index()
    {
        $applies = Apply::with(['user', 'job.company.province'])->where('users_id', Auth::user()->id)->orderBy('id', 'DESC')->paginate(5);

        return view('pages.apply', [
            'applies' => $applies
        ]);
    }

    public function destroy($id)
    {
        $apply = Apply::find($id);

        $apply->delete();
        return redirect()->route('apply');
    }
}