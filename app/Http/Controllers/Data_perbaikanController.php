<?php

namespace App\Http\Controllers;

use App\Models\Data_perbaikan;
use App\Models\Laporan_perbaikan;
use App\Models\Data_barang;
use Illuminate\Http\Request;

class Data_perbaikanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data_perbaikan = Data_perbaikan::with('barang')->get();
        return view('data_perbaikan.index', compact('data_perbaikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_barangs = Data_barang::all();
        return view('data_perbaikan.create', compact('data_barangs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tanggal_perbaikan' => 'required',
            'barang_id' => 'required',
            // 'nama_barang' => 'required',
            'kerusakan' => 'required',
            // 'penanganan' => 'required',
            'kebutuhan_komputer' => 'required',
            // 'hasil' => 'required',
            'ket' => 'required',
            
        ]);
        $data_perbaikan = new Data_perbaikan();
        $data_perbaikan->tanggal_perbaikan = $request->tanggal_perbaikan;
        $data_perbaikan->barang_id = $request->barang_id;
        // $data_perbaikan->nama_barang = $request->nama_barang;
        $data_perbaikan->kerusakan = $request->kerusakan;
        // $data_perbaikan->penanganan = $request->penanganan;
        $data_perbaikan->kebutuhan_komputer = $request->kebutuhan_komputer;
        // $data_perbaikan->hasil = $request->hasil;
        $data_perbaikan->ket = $request->ket;

        $laporan_perbaikan =  new Laporan_perbaikan();
        $laporan_perbaikan->tanggal_perbaikan = $request->tanggal_perbaikan;
        $laporan_perbaikan->barang_id = $request->barang_id;
        // $laporan_perbaikan->nama_barang = $request->nama_barang;
        $laporan_perbaikan->kerusakan = $request->kerusakan;
        // $laporan_perbaikan->penanganan = $request->penanganan;
        $laporan_perbaikan->kebutuhan_komputer = $request->kebutuhan_komputer;
        // $laporan_perbaikan->hasil = $request->hasil;
        $laporan_perbaikan->ket = $request->ket;
      
       
        $laporan_perbaikan->save();

        $data_perbaikan->save();
        return redirect()->route('data_perbaikan.index')
        ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_perbaikan = Data_perbaikan::findOrFail($id);
        return view('data_perbaikan.show', compact('data_perbaikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_perbaikan = Data_perbaikan::findOrFail($id);
        return view('data_perbaikan.edit', compact('data_perbaikan'));
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
        
        $validated = $request->validate([
            'tanggal_perbaikan' => 'required',
            'barang_id' => 'required',
            // 'nama_barang' => 'required',
            'kerusakan' => 'required',
            // 'penanganan' => 'required',
            'kebutuhan_komputer' => 'required',
            // 'hasil' => 'required',
            'ket' => 'required',
         
        ]);

        $data_perbaikan = Data_perbaikan::findOrFail($id);
        $data_perbaikan->tanggal_perbaikan = $request->tanggal_perbaikan;
        $data_perbaikan->barang_id = $request->barang_id;
        // $data_perbaikan->nama_barang = $request->nama_barang;
        $data_perbaikan->kerusakan = $request->kerusakan;
        // $data_perbaikan->penanganan = $request->penanganan;
        $data_perbaikan->kebutuhan_komputer = $request->kebutuhan_komputer;
        // $data_perbaikan->hasil = $request->hasil;
        $data_perbaikan->ket = $request->ket;
        
        $data_perbaikan->save();
        return redirect()->route('data_perbaikan.index')
        ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_perbaikan = Data_perbaikan::findOrFail($id);
        $data_perbaikan->delete();
        return redirect()->route('data_perbaikan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
