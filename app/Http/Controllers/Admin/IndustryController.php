<?php

namespace App\Http\Controllers\Admin;

use App\Models\Industry;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\IndustryRequest;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->ajax()) {
            $query = Industry::all();

            return DataTables::of($query)
                ->addColumn('action', function ($industry) {
                    return '
                    <div class="btn-group">
                        <div class="dropdown-center">
                            <button class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="dropdown">
                                    Actions
                                </button>
                                <div class= "dropdown-menu">
                                    <a href="' . route('industry.edit', $industry->id) . '" class="dropdown-item">
                                    Edit</a>
                                    <button class="dropdown-item text-danger" onclick="deleteConfirm(' . $industry->id . ',\'' . $industry->name . '\')">Delete</button>
                                </div>
                        </div>
                    </div>
                ';
                })
                ->editColumn('photo', function ($industry) {
                    return $industry->photo ? '<img src="' . Storage::url($industry->photo) . '" style="height: 64px; aspect-ratio: 4/3; border-radius: 4px; object-fit: cover;"/>' : '';
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }
        return view('pages.admin.industry.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.industry.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\IndustryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IndustryRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('industry', 'public');

        Industry::create($data);
        return redirect()->route('industry.index')->with('success', 'Create Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $industry = Industry::find($id);
        return view('pages.admin.industry.edit', [
            'industry' => $industry
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\IndustryRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(IndustryRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);
        if($request->has('photo')) {
            $data['photo'] = $request->file('photo')->store('industry', 'public');
        }

        $industry = Industry::find($id);
        $industry->update($data);
        return redirect()->route('industry.index')->with('success', 'Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $industry = Industry::find($id);
        $industry->delete();
        return redirect()->route('industry.index');
    }
}