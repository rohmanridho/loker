<?php

namespace App\Http\Controllers\Employer;

use App\Models\Apply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApplyController extends Controller
{
    public function index()
    {
        $applies = Apply::with('job', 'user')->whereHas('job', function ($job) {
            $job->with('company')->whereHas('company', function ($company) {
                $company->where('users_id', Auth::user()->id);
            });
        })->paginate(3);

        return view('pages.employer.apply.index', [
            'applies' => $applies
        ]);
    }

    public function edit($id)
    {
        $apply = Apply::find($id);
    }

    public function update(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            $apply = Apply::find($id);
            $apply->status = $request['status'];

            $apply->save();
            return redirect()->route('apply-index');
        }
    }
}
