<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pinjamen;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Kategori = Kategori::get();

        return response()->json([
            'success'   => true,
            'message'   => 'Daftar Data Kategori',
            'data'      => $Kategori
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
            'jenis' => 'required',
            'jangka' => 'required',
            'nilai' => 'required',
        ]);
    
        $Kategori = Kategori::create([
            'jenis'  => $request->jenis,
            'jangka' => $request->jangka,
            'nilai' => $request->nilai,
    
        ]);
    
        if($Kategori){
            return response()->json([
                'success'   => true,
                'message'   => 'Kategori Berhasil Ditambahkan',
                'data'      => $Kategori
            ], 200);
            
        } else {
            return response()->json([
                'success'   => false,
                'message'   => 'Kategori Gagal Ditambahkan',
                'data'      => $Kategori
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
        $Kategori = Kategori::where('id', $id)->first();

        return response()->json([
            'success' => true,
            'message' => 'Detail Data Kategori',
            'data' => $Kategori
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
            'jenis' => 'required',
            'jangka' => 'required',
            'nilai' => 'required',
        ]);

        $Kategori = Kategori::find($id)->update([
            'jenis' => $request->jenis,
            'jangka' => $request->jangka,
            'nilai' => $request->nilai,
        ]);

        return response()->json([
            'success' => true,
            'message' => "Data Diubah",
            'data' => $Kategori
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
        $Kategori = Kategori::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data Dihapus',
            'data' => $Kategori
        ], 200);
    }
    
}
