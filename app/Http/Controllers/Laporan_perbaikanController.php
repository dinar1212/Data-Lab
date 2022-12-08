<?php

namespace App\Http\Controllers;
use App\Models\Data_perbaikan;
use App\Models\Laporan_perbaikan;
use App\Models\Data_barang;
use Illuminate\Http\Request;
use DB;

class Laporan_perbaikanController extends Controller
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
        
        $laporan_perbaikan = Data_perbaikan::with('barang')->get();
        // $laporan_perbaikan = Laporan_perbaikan::all();
        return view('laporan_perbaikan.index', compact('laporan_perbaikan'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_barangs = Data_barang::all();
        return view('laporan_perbaikan.create',compact('data_barangs'));
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
        // $laporan_perbaikan = new Laporan_perbaikan();
        // $kode_peminjamans = DB::table('data_peminjamen')->select(DB::raw('MAX(RIGHT(kode_peminjam,3)) as kode'));
        // if ($kode_peminjamans->count() > 0) {
        //     foreach ($kode_peminjamans->get() as $kode_peminjam) {
        //         $x = ((int) $kode_peminjam->kode) + 1;
        //         $kode = sprintf("%03s", $x);
        //     }
        // } else {
        //     $kode = "001";
        // }
        $laporan_perbaikan =  new Laporan_perbaikan();
        $laporan_perbaikan->tanggal_perbaikan = $request->tanggal_perbaikan;
        $laporan_perbaikan->barang_id = $request->barang_id;
        // $laporan_perbaikan->nama_barang = $request->nama_barang;
        $laporan_perbaikan->kerusakan = $request->kerusakan;
        // $laporan_perbaikan->penanganan = $request->penanganan;
        $laporan_perbaikan->kebutuhan_komputer = $request->kebutuhan_komputer;
        // $laporan_perbaikan->hasil = $request->hasil;
        $laporan_perbaikan->ket = $request->ket;

       
      
        $laporan_perbaikan->tanggal_perbaikan = $request->tanggal_perbaikan;
         $laporan_perbaikan->barang_id = $request->barang_id;
         // $laporan_perbaikan->nama_barang = $request->nama_barang;
         $laporan_perbaikan->kerusakan = $request->kerusakan;
         // $laporan_perbaikan->penanganan = $request->penanganan;
         $laporan_perbaikan->kebutuhan_komputer = $request->kebutuhan_komputer;
         // $laporan_perbaikan->hasil = $request->hasil;
         $laporan_perbaikan->ket = $request->ket;

       
        $laporan_perbaikan->save();
      
        // $laporan_perbaikan = new Laporan_perbaikan::findOrFail($laporan_perbaikan->laporan_id);
        // // $laporan_perbaikan->status='checkout';
        // $laporan_perbaikan->save();
        $laporan_perbaikan->save();
        return redirect()->route('laporan_perbaikan.index')
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
        $laporan_perbaikan = Laporan_perbaikan::findOrFail($id);
        return view('laporan_perbaikan.show', compact('laporan_perbaikan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laporan_perbaikan = Laporan_perbaikan::findOrFail($id);
        return view('laporan_perbaikan.edit', compact('laporan_perbaikan'));
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

        $laporan_perbaikan = Laporan_perbaikan::findOrFail($id);
        $laporan_perbaikan->tanggal_perbaikan = $request->tanggal_perbaikan;
        $laporan_perbaikan->barang_id = $request->barang_id;
        // $laporan_perbaikan->nama_barang = $request->nama_barang;
        $laporan_perbaikan->kerusakan = $request->kerusakan;
        // $laporan_perbaikan->penanganan = $request->penanganan;
        $laporan_perbaikan->kebutuhan_komputer = $request->kebutuhan_komputer;
        // $laporan_perbaikan->hasil = $request->hasil;
        $laporan_perbaikan->ket = $request->ket;

      
     
        $laporan_perbaikan->save();
        return redirect()->route('laporan_perbaikan.index')
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
        $laporan_perbaikan = Laporan_perbaikan::findOrFail($id);
        $laporan_perbaikan->delete();
        return redirect()->route('laporan_perbaikan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
