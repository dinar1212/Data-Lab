<?php

namespace App\Http\Controllers;

use App\Models\Kel_lab;
// use App\Models\Jad_lab;
use Illuminate\Http\Request;

class Kel_labController extends Controller
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
        
        $kel_lab = Kel_lab::all();
        return view('kel_lab.index', compact('kel_lab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kel_lab.create');
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
            'lantai' => 'required',
            'lab' => 'required',
            'no_lab' => 'required',
        ]);
        $kel_lab = new Kel_lab();
        $kel_lab->lantai = $request->lantai;
        $kel_lab->lab = $request->lab;
        $kel_lab->no_lab = $request->no_lab;
        $kel_lab->save();
        return redirect()->route('kel_lab.index')
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
        $kel_lab = Kel_lab::findOrFail($id);
        return view('kel_lab.show', compact('kel_lab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kel_lab = Kel_lab::findOrFail($id);
        return view('kel_lab.edit', compact('kel_lab'));
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
            'lantai' => 'required',
            'lab' => 'required',
            'no_lab' => 'required',
        ]);

        $kel_lab = Kel_lab::findOrFail($id);
        $kel_lab->lantai = $request->lantai;
        $kel_lab->lab = $request->lab;
        $kel_lab->no_lab = $request->no_lab;
        $kel_lab->save();
        return redirect()->route('kel_lab.index')
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
        $kel_lab = Kel_lab::findOrFail($id);
        $kel_lab->delete();
        return redirect()->route('kel_lab.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
