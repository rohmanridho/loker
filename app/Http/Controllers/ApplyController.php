<?php

namespace App\Http\Controllers;

use App\Models\Apply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class ApplyController extends Controller
{
    public function index()
    {
        $apply_status = Apply::where(['users_id' => Auth::user()->id, 'status' => 'Sedang Diproses'])->count();
        $applies = Apply::with(['user', 'job.company.province'])->where('users_id', Auth::user()->id)->latest()->get();

        return view('pages.apply', [
            'apply_status' => $apply_status,
            'applies' => $applies
        ]);
    }

    public function apply(Request $request, $id)
    {
        $apply = Apply::where([
            'users_id' => Auth::user()->id,
            'jobs_id' => $id
        ])->count();

        if ($apply == 0) {
            $data = [
                'jobs_id' => $id,
                'users_id' => Auth::user()->id
            ];
            Apply::create($data);
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function generatePDF($id)
    {
        $data = Apply::with(['user', 'job.company.province', 'job.company.user'])->where('id', $id)->first();

        $pdf = PDF::loadView('pages.apply-pdf', [
            'data' => $data
        ]);
        return $pdf->stream();

        // return $pdf->download($data->user->name . '_' . $data->job->name . '.pdf');
    }

    public function destroy($id)
    {
        $apply = Apply::find($id);
        $apply->delete();
        return redirect()->back();
    }
}