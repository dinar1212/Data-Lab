<?php

namespace App\Http\Controllers;

// use App\Models\Laporan;
use App\Models\Data_peminjaman;
use App\Models\Data_barang;
use Illuminate\Http\Request;
use DB;

class LaporanController extends Controller
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
        
        $laporan = Data_peminjaman::all();
        // $laporan = Laporan::all();
        return view('laporan.index', compact('laporan'));
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_barangs = Data_barang::all();
        return view('laporan.create',compact('data_barangs'));
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
            // 'kode_peminjam' => 'required',
            'nama_peminjam' => 'required',
            'barang_id' => 'required',
            'tanggal_pinjam' => 'required',
            'jumlah' => 'required',
            'tanggal_kembali' => 'required',
            'contact' => 'required',
          
        ]);
        // $laporan = new Laporan();
        // $kode_peminjamans = DB::table('data_peminjamen')->select(DB::raw('MAX(RIGHT(kode_peminjam,3)) as kode'));
        // if ($kode_peminjamans->count() > 0) {
        //     foreach ($kode_peminjamans->get() as $kode_peminjam) {
        //         $x = ((int) $kode_peminjam->kode) + 1;
        //         $kode = sprintf("%03s", $x);
        //     }
        // } else {
        //     $kode = "001";
        // }
        $laporan->kode_peminjam = $data_peminjaman->kode_peminjam;

        $laporan->nama_peminjam = $request->nama_peminjam;
        $laporan->barang_id = $request->barang_id;
        $laporan->tanggal_pinjam = $request->tanggal_pinjam;
        $laporan->jumlah = $request->jumlah;
        $laporan->tanggal_kembali = $request->tanggal_kembali;
        $laporan->contact = $request->contact;

        $laporan =  new Laporan();
      
        $laporan->kode_peminjam =$request->kode_peminjam;
        $laporan->nama_peminjam =$request->nama_peminjam;
        $laporan->barang_id =$request->barang_id;
        $laporan->tanggal_pinjam =$request->tanggal_pinjam;
        $laporan->jumlah =$request->jumlah;
        $laporan->tanggal_kembali =$request->tanggal_kembali;
        $laporan->contact =$request->contact;
        $laporan->save();
      
        // $laporan = new Laporan::findOrFail($laporan->laporan_id);
        // // $laporan->status='checkout';
        // $laporan->save();
        $laporan->save();
        return redirect()->route('laporan.index')
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
        $laporan = Laporan::findOrFail($id);
        return view('laporan.show', compact('laporan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $laporan = Laporan::findOrFail($id);
        return view('laporan.edit', compact('laporan'));
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
            'kode_peminjam' => 'required',
            'nama_peminjam' => 'required',
            'nama_barang' => 'required',
            'tanggal_pinjam' => 'required',
            'jumlah' => 'required',
            'tanggal_kembali' => 'required',
            'contact' => 'required',
        
        ]);

        $laporan = Laporan::findOrFail($id);
        $laporan->kode_peminjam = $request->kode_peminjam;
        $laporan->nama_peminjam = $request->nama_peminjam;
        $laporan->nama_barang = $request->nama_barang;
        $laporan->tanggal_pinjam = $request->tanggal_pinjam;
        $laporan->jumlah = $request->jumlah;
        $laporan->tanggal_kembali = $request->tanggal_kembali;
        $laporan->contact = $request->contact;
     
        $laporan->save();
        return redirect()->route('laporan.index')
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
        $laporan = Laporan::findOrFail($id);
        $laporan->delete();
        return redirect()->route('laporan.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
