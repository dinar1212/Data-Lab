<?php

namespace App\Http\Controllers;

use App\Models\Jad_lab;
use App\Models\Kel_lab;
use Illuminate\Http\Request;


class Jad_labController extends Controller
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
        $jad_lab = Jad_lab::with('kel')->get();
        // $jad_lab = Jad_lab::all();
        return view('jad_lab.index', compact('jad_lab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kel_labs = Kel_lab::all();
        return view('jad_lab.create',compact('kel_labs'));
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
            'nama' => 'required',
            'hari' => 'required',
            'kel_id' => 'required',
            'tanggal' => 'required',
            // 'jam' => 'required',
            'lantai' => 'required',
            // 'no_lab' => 'required',
            'kegiatan' => 'required',
            'tanggal_berakhir' => 'required',
            'keterangan' => 'required',
        ]);
        $jad_lab = new Jad_lab();
        $jad_lab->nama = $request->nama;
        $jad_lab->kel_id = $request->kel_id;
        $jad_lab->hari = $request->hari;
        $jad_lab->tanggal = $request->tanggal;
        // $jad_lab->jam = $request->jam;
        $jad_lab->lantai = $request->lantai;
        // $jad_lab->no_lab = $request->no_lab;
        $jad_lab->kegiatan = $request->kegiatan;
        $jad_lab->tanggal_berakhir = $request->tanggal_berakhir;
        $jad_lab->keterangan = $request->keterangan;
        $jad_lab->save();
        return redirect()->route('jad_lab.index')
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
        $jad_lab = Jad_lab::findOrFail($id);
        return view('jad_lab.show', compact('jad_lab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jad_lab = Jad_lab::findOrFail($id);
        $kel_labs = Kel_lab::all();
        return view('jad_lab.edit', compact('jad_lab','kel_labs'));
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
            'hari' => 'required',
            'nama' => 'required',
            'kel_id' => 'required',
            'tanggal' => 'required',
            // 'jam' => 'required',
            'lantai' => 'required',
            // 'no_lab' => 'required',
            'kegiatan' => 'required',
            'tanggal_berakhir' => 'required',
            'keterangan' => 'required',
        ]);

        $jad_lab = Jad_lab::findOrFail($id);
        $jad_lab->nama = $request->nama;
        $jad_lab->kel_id = $request->kel_id;
        $jad_lab->hari = $request->hari;
        $jad_lab->tanggal = $request->tanggal;
        // $jad_lab->jam = $request->jam;
        $jad_lab->lantai = $request->lantai;
        // $jad_lab->no_lab = $request->no_lab;
        $jad_lab->kegiatan = $request->kegiatan;
        $jad_lab->tanggal_berakhir = $request->tanggal_berakhir;
        $jad_lab->keterangan = $request->keterangan;
        $jad_lab->save();
        return redirect()->route('jad_lab.index')
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
        $jad_lab = Jad_lab::findOrFail($id);
        $jad_lab->delete();
        return redirect()->route('jad_lab.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
