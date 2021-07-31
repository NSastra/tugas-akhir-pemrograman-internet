<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Pinjamen;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Kategori = Kategori::orderBy('id')->get();
        return view('kategori.index', compact('Kategori'));
    }

    public function hapusdata(Request $request, $id)
    {
        Pinjamen::find($id)->update([
            'kategori_id' => 0
        ]);

        return redirect('/pinjaman');
    }

    public function updatedata(Request $request, $id)
    {
        $Pinjamen = Pinjamen::where('id', $request->Pinjamen_id)->first();
        Pinjamen::find($Pinjamen->id)->update([
            'kategori_id' => $id
        ]);

        return redirect('/kategori/tambahadata' . $id);
    }

    public function tambahdata($id)
    {
        $Pinjamen = Pinjamen::where('kategori_id','=',0)->get();
        $Kategori = Kategori::where('id', $id)->first();
        return view('kategori.tambahdata', ['Kategori' => $Kategori, 'Pinjamen' => $Pinjamen]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
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
        //
    }
}
