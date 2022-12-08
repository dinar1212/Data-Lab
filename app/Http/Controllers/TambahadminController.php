<?php

namespace App\Http\Controllers;

use App\Models\Tambahadmin;
use App\Models\Ket_lab;
use App\Models\Komputer;
use App\Models\Data_perbaikan;
use App\Models\Jad_lab;
use Illuminate\Http\Request;

class TambahadminController extends Controller
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
        
        $tambahadmin = Tambahadmin::latest()->get();
        $komputer = Komputer::all();
        $data_perbaikan = Data_perbaikan::all();
        $data_perbaikans = Data_perbaikan::where('ket','perbaikan')->count();
        $jad_lab = Jad_lab::all();
        $jad_labs = Jad_lab::whereIn('keterangan',['digunakan','selesai'])->count();
        $ket_lab = Ket_lab::all();
        $ket_labs = Ket_lab::where('kondisi','baik')->count();
        $komputers = Komputer::where('keterangan','komputer')->count();
        $admins = Tambahadmin::where('keterangan','Admin')->count();
        return view('tambahadmin.index', compact('tambahadmin', 'admins','komputer','komputers','data_perbaikan','data_perbaikans','ket_lab','ket_labs','jad_lab','jad_labs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahadmin.create');
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
            'nip' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'foto' => 'required',
            'keterangan' => 'required',
        ]);

        $tambahadmin = new Tambahadmin();
        $tambahadmin->nip = $request->nip;
        $tambahadmin->nama = $request->nama;
        $tambahadmin->email = $request->email;
        $tambahadmin->password = $request->password;
        $tambahadmin->keterangan = $request->keterangan;
        if ($request->hasFile('foto')) {
            $tambahadmin->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/tambahadmin/', $name);
            $tambahadmin->foto = $name;
        }
        $tambahadmin->save();
        return redirect()->route('tambahadmin.index')
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
        $tambahadmin = Tambahadmin::findOrFail($id);
        return view('tambahadmin.show', compact('tambahadmin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tambahadmin = Tambahadmin::findOrFail($id);
        return view('tambahadmin.edit', compact('tambahadmin'));
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
            'nip' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'password' => 'required',
            'foto' => 'required',
            'keterangan' => 'required',
        ]);

        $tambahadmin = Tambahadmin::findOrFail($id);
        $tambahadmin->nip = $request->nip;
        $tambahadmin->nama = $request->nama;
        $tambahadmin->email = $request->email;
        $tambahadmin->password = $request->password;
        $tambahadmin->keterangan = $request->keterangan;
        if ($request->hasFile('foto')) {
            $tambahadmin->deleteImage(); //menghapus image sebelum di update melalui method deleteImage di model
            $image = $request->file('foto');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/tambahadmin/', $name);
            $tambahadmin->foto = $name;
        }
        $tambahadmin->save();
        return redirect()->route('tambahadmin.index')
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
        $tambahadmin = Tambahadmin::findOrFail($id);
        $tambahadmin->deleteImage();
        $tambahadmin->delete();
        return redirect()->route('tambahadmin.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}
