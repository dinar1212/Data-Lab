<?php

namespace App\Http\Controllers;

use App\Models\Komputer;
use Illuminate\Http\Request;

class KomputerController extends Controller
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
        
        $komputer = Komputer::all();
        return view('komputer.index', compact('komputer'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('komputer.create');
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
          
            'keterangan' => 'required',
            'pc' => 'required',
            // 'mouse' => 'required',
            // 'monitor' => 'required',
            // 'keyboard' => 'required',
            // 'kabel_pga' => 'required',
            // 'kabel_power' => 'required',
        ]);
        $komputer = new Komputer();
      
        $komputer->keterangan = $request->keterangan;
        $komputer->pc = $request->pc;
        // $komputer->mouse = $request->mouse;
        // $komputer->monitor = $request->monitor;
        // $komputer->keyboard = $request->keyboard;
        // $komputer->kabel_pga = $request->kabel_pga;
        // $komputer->kabel_power = $request->kabel_power;
        $komputer->save();
        return redirect()->route('komputer.index')
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
        $komputer = Komputer::findOrFail($id);
        return view('komputer.show', compact('komputer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komputer = Komputer::findOrFail($id);
        return view('komputer.edit', compact('komputer'));
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
          
            'keterangan' => 'required',
            'pc' => 'required',
            // 'mouse' => 'required',
            // 'monitor' => 'required',
            // 'keyboard' => 'required',
            // 'kabel_pga' => 'required',
            // 'kabel_power' => 'required',
        ]);

        $komputer = Komputer::findOrFail($id);
        
        $komputer->keterangan = $request->keterangan;
        $komputer->pc = $request->pc;
        // $komputer->mouse = $request->mouse;
        // $komputer->monitor = $request->monitor;
        // $komputer->keyboard = $request->keyboard;
        // $komputer->kabel_power = $request->kabel_power;
        // $komputer->kabel_pga = $request->kabel_pga;
        $komputer->save();
        return redirect()->route('komputer.index')
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
        $komputer = Komputer::findOrFail($id);
        $komputer->delete();
        return redirect()->route('komputer.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
