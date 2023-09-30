<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Http\Requests\StorekeranjangRequest;
use App\Http\Requests\UpdatekeranjangRequest;
use App\Models\kurir;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Input;
// use Illuminate\Http\Request;


class KeranjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('keranjang', [
            'kurir' => kurir::all(),
            'keranjang' => keranjang::all(),
            'user'=> 'Arif',
            'role'=> 'pengguna',
            'pos' => '51255', 
            'alamat' => 'Jl Nakula RT07/RW02, Kota Semarang',
            'hp' => '08836743291',
            'baris'=> keranjang::all()->count(),
            'ongkir' => '23000',
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
    public function store(StorekeranjangRequest $request)
    {
        $validate = $request->validated();
        $user = new keranjang;
        $user -> jumlah = $request->txtjumlah;
        $user -> warna = $request->txtwarna;
        $user -> catatan = $request->txtcatatan;
        $user -> harga = $request->txtharga;
        $user -> Tharga = $request->txtharga * $request->txtjumlah;
        $user -> gambar = $request->txtgambar;
        $user -> user = $request->txtuser;
        $user -> nama = $request->txtnama;
        $user -> diskon = $request->txtdiskon;
        $user -> save();
        return redirect('keranjang');
    }

    /**
     * Display the specified resource.
     */
    public function show(keranjang $keranjang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(keranjang $keranjang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatekeranjangRequest $request, keranjang $keranjang)
    {
        $data = $keranjang->find($request->txtid);
        $data -> jumlah = $request->txtjumlah;
        $data -> warna = $request->txtwarna;
        $data -> catatan = $request->txtcatatan;
        $data -> harga = $request->txtharga;
        $data -> Tharga = $request->txtharga * $request->txtjumlah;
        $data -> gambar = $request->txtgambar;
        $data -> user = $request->txtuser;
        $data -> nama = $request->txtnama;
        $data -> diskon = $request->txtdiskon;
        $data -> save();
        return redirect('keranjang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(keranjang $keranjang)
    {
        // echo $keranjang->txtid;
        $data = $keranjang->find($keranjang->id);
        $data->delete();
        return redirect('keranjang');
    }
}
