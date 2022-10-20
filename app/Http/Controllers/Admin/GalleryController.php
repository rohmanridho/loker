<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\Admin\GalleryRequest;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->ajax())
        {
            $query = Gallery::all();

            return Datatables::of($query)
            ->addColumn('action', function($item){
                return '
                      <div class= "btn-group">
                         <div class= "dropdown">
                            <button class= "btn btn-primary dropdown-toggle mr-1 mb-1"
                                    type= "button"
                                    data-toggle= "dropdown">
                                    Aksi
                                </button>
                                <div class= "dropdown-menu">
                                    
                                     <form action= "'. route('gallery.destroy', $item->id) .'" method= "POST">
                                        '. method_field('delete') . csrf_field() . '
                                        <button type="submit" class= "dropdown-item text-danger">
                                         Hapus
                                        </button>
                                     </form>
                                </div>
                         </div>
                      </div>
                ';
            })
            ->editColumn('photo', function($item){
                return $item->photo ? '<img src="'.Storage::url($item->photo).'" style="max-height:80px;"/>' : '';
            })
            ->rawColumns(['action', 'photo'])
            ->make();
        }
        return view('pages.admin.gallery.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     
        $photo = Gallery::all();
        return view('pages.admin.gallery.create',[
         'photo' => $photo
        ]);
    }

    /**.create
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(GalleryRequest $request)
    {
        $data = $request->all();

        $data['photo'] = $request->file('photo')->store('assets/gallery', 'public');

        Gallery::create($data);

        return redirect()->route('gallery.index');
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
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item  = Gallery::findOrFail($id);
        $item->delete(); 
        
         return redirect()->route('gallery.index');
    }
}

