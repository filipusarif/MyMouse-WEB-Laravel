<?php

namespace App\Http\Controllers;

use App\Models\produks;
use App\Http\Requests\StoreproduksRequest;
use App\Http\Requests\UpdateproduksRequest;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;

class ProduksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(HttpRequest $request)
    {
        $search = $request->query('search');
        $brand = $request->query('brand');
        $dari = $request->query('dariHar');
        $sampai = $request->query('sampaiHar');
        $diskon = $request->query('filDiskon');
        $jenis = $request->query('filJenis');

        if(!empty($search)){
            $data = produks::where('nama','like','%'.$search.'%')->get();
        }else if(!empty($brand)&&!empty($dari)&&!empty($sampai)&&!empty($diskon)&&!empty($jenis)){
            $data = produks::whereBetween('terdiskon', [$dari, $sampai])
            ->where('brand','=',$brand)
            ->where('diskon','=',$diskon)
            ->where('jenis','=',$jenis)->get();
        }else if(!empty($brand)){
            $data = produks::where('brand','=',$brand)->get();
        }else if(!empty($dari)&&!empty($sampai)){
            $data = produks::whereBetween('terdiskon', [$dari, $sampai])->get();
        }else if(!empty($diskon)){
            $data = produks::where('diskon','=',$diskon)->get();
        }else if(!empty($jenis)){
            $data = produks::where('jenis','=',$jenis)->get();
        } else {
            $data = produks::all();
        }
        
        return view('toko')->with([
            'produks' => $data,
            'search' => $search,
            'row'=> $data->count(),
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
    public function store(StoreproduksRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(produks $produks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(produks $produks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateproduksRequest $request, produks $produks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(produks $produks)
    {
        //
    }
}
