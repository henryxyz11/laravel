<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\KategoriBarang;


class KategoriBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @return \Illuminate\View\View
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(KategoriBarang $model)
    {
        // $kategori= KategoriBarang::paginate(5);
        // $kategori = DB::table('kategori')->paginate(10);
        // // return view('kategori.index',compact('kategori'));
        // return view('kategori.index',['kategori' => $kategori]);
        return view('kategori.index', ['kategori' => $model->paginate(8)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // $kategori=KategoriBarang::create($request->all());
            // return redirect()->route('kategori.index')->withStatus(__('Category successfully created.'));

            $request->validate([
                'kategori' => 'required'
            ]);

            KategoriBarang::create($request->all());

            return redirect()->route('kategori.index')
                            ->with('success','Category created successfully.');

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
    public function edit(Kategori $id)
    {
        // $kategori=KategoriBarang::findorfail($id);
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    public function update(Request $request, Kategori $kategori)
    {
        $request->validate([
            'kategori' => 'required'
        ]);

        $kategori->update($request->all());

        return redirect()->route('kategori.index')
                        ->with('success','Kategori updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KategoriBarang::find($id)->delete();
        return redirect()->route('kategori.index')->withStatus(__('Category successfully deleted.'));
    }
}
