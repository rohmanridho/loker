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
        if (request()->ajax()) {
            $query = Province::all();

            return DataTables::of($query)
                ->addColumn('action', function ($province) {
                    return '
                    <div class= "btn-group">
                        <div class= "dropdown">
                            <button class= "btn btn-primary dropdown-toggle mr-1 mb-1"
                                    type= "button"
                                    data-toggle= "dropdown">
                                    Actions
                                </button>
                                <div class= "dropdown-menu">
                                    <a href="' . route('province.edit', $province->id) . '" class="dropdown-item">
                                    Edit</a>
                                    <form action= "' . route('province.destroy', $province->id) . '" method= "POST">
                                        ' . method_field('delete') . csrf_field() . '
                                        <button type="submit" class= "dropdown-item text-danger">
                                        Delete
                                        </button>
                                    </form>
                                </div>
                        </div>
                    </div>
                ';
                })
                ->editColumn('photo', function ($province) {
                    return $province->photo ? '<img src="' . Storage::url($province->photo) . '" style="height: 64px; aspect-ratio: 4/3; border-radius: 4px; object-fit: cover;"/>' : '';
                })
                ->rawColumns(['action', 'photo'])
                ->make();
        }
        return view('pages.admin.province.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.province.create');
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
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/province', 'public');

        Province::create($data);
        return redirect()->route('province.index');
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
        $province = Province::find($id);
        return view('pages.admin.province.edit', [
            'province' => $province
        ]);
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
        $data['slug'] = Str::slug($request->name);
        $data['photo'] = $request->file('photo')->store('assets/province', 'public');

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
