<?php

namespace App\Http\Controllers;

use App\Models\pesanan;
use App\Http\Requests\StorepesananRequest;
use App\Http\Requests\UpdatepesananRequest;
use Illuminate\Support\Facades\DB;



class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('pesanan')->with([
            'pesanan' => pesanan::all(),
            'perPesanan' => DB::table('pesanans')->distinct('tanggal')->get('tanggal'),
            'data' => pesanan::all()->where('tanggal','=','2023-05-03 06:55:12'),
            'baris' => pesanan::all()->count(),
            'user'=> 'Arif',
            'role'=> 'pengguna',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepesananRequest $request)
    {
        $validate = $request->validated();
        $data = DB::table('keranjangs')->get();
        foreach($data as $exe){
            $user = new pesanan;
            $user -> user = $exe->user;
            $user -> nama = $exe->nama;
            $user -> harga_awal = $exe->harga;
            $user -> harga = $request->txtsubtotal;
            $user -> totalHar = $request->txttotal;
            $user -> jumlah = $exe->jumlah;
            $user -> warna = $exe->warna;
            $user -> catatan = $exe->catatan;
            $user -> gambar = $exe->gambar;
            $user -> alamat = $request->txtprovinsi.', '.$request->txtalamat;
            $user -> pos = $request->txtpos;
            $user -> hp = $request->txthp;
            $user -> Hkurir = $request->txtkurir;
            $user -> Pembayaran = $request->txtbayar;
            $user -> save();
        }
        $deleted = DB::table('keranjangs')->where('user', '=', $request->txtuser)->delete();
        return redirect('pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(pesanan $pesanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pesanan $pesanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepesananRequest $request, pesanan $pesanan)
    {
        //
    }

    public function hapus($id){
        $delete = pesanan::where('tanggal', $id)->delete();
        return redirect('pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pesanan $pesanan)
    {
        // pesanan::where('tanggal', $pesanan->tanggal)->delete();
        // echo $pesanan->txtid;
        // $data = $pesanan->find($pesanan->tanggal);
        // $data->delete();
        // return redirect('pesanan');
    }
}
