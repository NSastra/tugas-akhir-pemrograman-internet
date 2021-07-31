<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pinjamen;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Pinjamen = Pinjamen::with('kategori')->whereHas('kategori')->get();

        return response()->json([
            'success'   => true,
            'message'   => 'Data Peminjaman',
            'data'      => $Pinjamen
        ], 200);
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
            'kategori_id' => 'required',
            'status' => 'required',
            'jaminan' => 'required',
        ]);

        $Pinjamen = Pinjamen::create([
            'nama'  => $request->nama,
            'nik' => $request->nik,
            'jumlah' => $request->jumlah,
            'jaminan' => $request->jaminan,
            'kategori_id' => $request->kategori_id,
            'status' => $request->status,
        ]);

        if($Pinjamen){
            return response()->json([
                'success'   => true,
                'message'   => 'Data Berhasil Ditambahkan',
                'data'      => $Pinjamen
            ], 200);
            
        } else {
            return response()->json([
                'success'   => false,
                'message'   => 'Data Gagal Ditambahkan',
                'data'      => $Pinjamen
            ], 409);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Pinjamen = Pinjamen::with('kategori')->where('id', $id)->get();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Peminjaman',
            'data' => $Pinjamen
        ], 200);
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
            'nik' => 'required',
            'jumlah' => 'required',
            'jaminan' => 'required',
            'status' => 'required',
            'kategori_id' => 'required',
        ]);

        $Pinjamen = Pinjamen::find($id)->update([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'jumlah' => $request->jumlah,
            'jaminan' => $request->jaminan,
            'status' => $request->status,
            'kategori_id' => $request->kategori_id,
        ]);

        return response()->json([
            'success' => true,
            'message' => "Data Diubah",
            'data' => $Pinjamen
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Pinjamen = Pinjamen::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Dihapus',
            'data' => $Pinjamen
        ], 200);
    }
    
}
