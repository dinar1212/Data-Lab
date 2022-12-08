<?php

namespace App\Http\Controllers;


// use App\Models\Laporan_barang;
use App\Models\Data_barang;
use Illuminate\Http\Request;

class Laporan_barangController extends Controller
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
        
        $laporan_barang = Data_barang::all();
        return view('laporan_barang.index', compact('laporan_barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('laporan_barang.create');
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
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            // 'dari_lab' => 'required',
            // 'status' => 'required',
            'kondisi' => 'required',
            // 'asal_barang' => 'required',
            'harga' => 'required',
        ]);
        $laporan_barang = new Laporan_barang();
        $laporan_barang->kode_barang = $request->kode_barang;
        $laporan_barang->nama_barang = $request->nama_barang;
        // $laporan_barang->dari_lab = $request->dari_lab;
        // $laporan_barang->status = $request->status;
        $laporan_barang->kondisi = $request->kondisi;
        // $laporan_barang->asal_barang = $request->asal_barang;
        $laporan_barang->harga = $request->harga;

        $laporan_barang->kode_barang = $request->kode_barang;
        $laporan_barang->nama_barang = $request->nama_barang;
        // $laporan_barang->dari_lab = $request->dari_lab;
        // $laporan_barang->status = $request->status;
        $laporan_barang->kondisi = $request->kondisi;
        // $laporan_barang->asal_barang = $request->asal_barang;
        $laporan_barang->harga = $request->harga;
        $laporan_barang->save();
        $laporan_barang->save();
        return redirect()->route('laporan_barang.index')
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
        $laporan_barang = Laporan_barang::findOrFail($id);
        return view('laporan_barang.show', compact('laporan_barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laporan_barang = Laporan_barang::findOrFail($id);
        return view('laporan_barang.edit', compact('laporan_barang'));
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
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            // 'dari_lab' => 'required',
            // 'status' => 'required',
            'kondisi' => 'required',
            // 'asal_barang' => 'required',
            'harga' => 'required',
        ]);

        $laporan_barang = Laporan_barang::findOrFail($id);
        $laporan_barang->kode_barang = $request->kode_barang;
        $laporan_barang->nama_barang = $request->nama_barang;
        // $laporan_barang->dari_lab = $request->dari_lab;
        // $laporan_barang->status = $request->status;
        $laporan_barang->kondisi = $request->kondisi;
        // $laporan_barang->asal_barang = $request->asal_barang;
        $laporan_barang->harga = $request->harga;
        $laporan_barang->save();
        return redirect()->route('laporan_barang.index')
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
        $laporan_barang = Laporan_barang::findOrFail($id);
        $laporan_barang->delete();
        return redirect()->route('laporan_barang.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
