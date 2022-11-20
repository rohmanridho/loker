<?php

namespace App\Http\Controllers\Admin;

use App\Models\Province;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\ProvinceRequest;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinces = Province::all();
        if (request()->ajax()) {
            $query = Province::all();

            return DataTables::of($query)
                ->addColumn('action', function ($province) {
                    return '
                    <div class= "btn-group">
                        <div class="dropdown-center">
                            <button class="btn btn-primary"
                                    type="button"
                                    data-bs-toggle="dropdown">
                                    Actions
                                </button>
                                <div class= "dropdown-menu">
                                    <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                data-bs-target="#edit-modal-'. $province->id . '" data-bs-whatever="@getbootstrap">Edit</button>
                                    <button class="dropdown-item text-danger" onclick="deleteConfirm('. $province->id .')">Delete</button>
                                </div>
                        </div>
                    </div>
                ';
                })
                ->rawColumns(['action'])
                ->make();
        }
        return view('pages.admin.province.index', [
            'provinces' => $provinces
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('pages.admin.province.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\ProvinceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProvinceRequest $request)
    {
        $data = $request->all();
        // $data['slug'] = Str::slug($request->name);
        // $data['photo'] = $request->file('photo')->store('assets/province', 'public');

        Province::create($data);
        return redirect()->back();
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
        // $province = Province::find($id);
        // return view('pages.admin.province.edit', [
        //     'province' => $province
        // ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\ProvinceRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProvinceRequest $request, $id)
    {
        $data = $request->all();
        // $data['slug'] = Str::slug($request->name);
        // $data['photo'] = $request->file('photo')->store('assets/province', 'public');

        $province = Province::find($id);
        $province->update($data);
        return redirect()->route('province.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $province = Province::find($id);
        $province->delete();
        return redirect()->route('province.index');
    }
}