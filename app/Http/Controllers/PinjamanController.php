<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjamen;
use App\Models\Daftarpjm;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pinjaman.tambah');
    }

    public function daftarpjm(){
        $Daftarpjm = Daftarpjm::orderBy('id')->get();
        return view('pinjaman.daftar', compact('Daftarpjm'));
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
        $request->validate([
            'nama' => 'required',
            'nik' => 'required',
            'jumlah' => 'required',
            'jaminan' => 'required',

        ]);
        
        $pinjamen = new Pinjamen;
        $pinjamen->nama = $request->nama;
        $pinjamen->nik = $request->nik;
        $pinjamen->jumlah = $request->jumlah;
        $pinjamen->jaminan = $request->jaminan;
        

        $pinjamen->save();

        return redirect('/');
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
        Daftarpjm::find($id)->delete();
        return redirect('/');
    }
}
