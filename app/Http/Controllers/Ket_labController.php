<?php

namespace App\Http\Controllers;

use App\Models\Ket_lab;
use Illuminate\Http\Request;

class Ket_labController extends Controller
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
        
        $ket_lab = Ket_lab::all();
        return view('ket_lab.index', compact('ket_lab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ket_lab.create');
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
            'no_lab' => 'required',
            'kondisi' => 'required',
            // 'komputer' => 'required',
            // 'rusak' => 'required',
            // 'keterangan' => 'required',
        ]);
        $ket_lab = new Ket_lab();
        $ket_lab->no_lab = $request->no_lab;
        $ket_lab->kondisi = $request->kondisi;
        // $ket_lab->komputer = $request->komputer;
        // $ket_lab->rusak = $request->rusak;
        // $ket_lab->keterangan = $request->keterangan;
        $ket_lab->save();
        return redirect()->route('ket_lab.index')
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
        $ket_lab = Ket_lab::findOrFail($id);
        return view('ket_lab.show', compact('ket_lab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ket_lab = Ket_lab::findOrFail($id);
        return view('ket_lab.edit', compact('ket_lab'));
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
            'no_lab' => 'required',
            'kondisi' => 'required',
            // 'komputer' => 'required',
            // 'rusak' => 'required',
            // 'keterangan' => 'required',
        ]);

        $ket_lab = Ket_lab::findOrFail($id);
        $ket_lab->no_lab = $request->no_lab;
        $ket_lab->kondisi = $request->kondisi;
        // $ket_lab->komputer = $request->komputer;
        // $ket_lab->rusak = $request->rusak;
        // $ket_lab->keterangan = $request->keterangan;
        $ket_lab->save();
        return redirect()->route('ket_lab.index')
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
        $ket_lab = Ket_lab::findOrFail($id);
        $ket_lab->delete();
        return redirect()->route('ket_lab.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
