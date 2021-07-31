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
        $Pinjamen = Pinjamen::orderBy('id')->get();
        return view('pinjaman.index', compact('Pinjamen'));
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
        return view('pinjaman.tambah');
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
            'status' => 'required'

        ]);
        
        $pinjamen = new Pinjamen;
        $pinjamen->nama = $request->nama;
        $pinjamen->nik = $request->nik;
        $pinjamen->jumlah = $request->jumlah;
        $pinjamen->jaminan = $request->jaminan;
        $pinjamen->status = $request->status;
        $pinjamen->kategori_id = 0;
        

        $pinjamen->save();

        return redirect('/pinjaman');
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
        $Pinjamen = Pinjamen::where('id', $id)->first();
        return view('pinjaman.edit', ['Pinjamen' => $Pinjamen]);
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
        $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'nik' => 'required',
            'jumlah' => 'required',
            'jaminan' => 'required',
            'status' => 'required'
        ]);

        Pinjamen::find($id)->update([
            'nama' => $request->nama,
            'kategori_id' => $request->kategori_id,
            'nik' => $request->nik,
            'jumlah' => $request->jumlah,
            'jaminan' => $request->jaminan,
            'status' => $request->status
        ]);

        return redirect('/pinjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pinjamen::find($id)->delete();
        return redirect('/pinjaman');
    }
}
