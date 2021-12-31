<?php

namespace App\Http\Controllers;

use App\Models\pengasuh;
use Illuminate\Http\Request;

class PengasuhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengasuh = Pengasuh::all();
        return view('pengasuh.index', compact('pengasuh'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengasuh.create');
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
            'id_pengasuhs' => 'required',
            'nama_pengasuh' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $pengasuh = new Pengasuh;
        $pengasuh->id_pengasuhs = $request->id_pengasuhs;
        $pengasuh->nama_pengasuh = $request->nama_pengasuh;
        $pengasuh->jk = $request->jk;
        $pengasuh->tgl_lahir = $request->tgl_lahir;
        $pengasuh->save();
        return redirect()->route('pengasuh.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pengasuh = Pengasuh::findOrFail($id);
        return view('pengasuh.show', compact('pengasuh'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengasuh = Pengasuh::findOrFail($id);
        return view('pengasuh.edit', compact('pengasuh'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id_pengasuhs' => 'required',
            'nama_pengasuh' => 'required',
            'jk' => 'required',
            'tgl_lahir' => 'required',
        ]);

        $pengasuh = Pengasuh::findOrFail($id);
        $pengasuh->id_pengasuhs = $request->id_pengasuhs;
        $pengasuh->nama_pengasuh = $request->nama_pengasuh;
        $pengasuh->jk = $request->jk;
        $pengasuh->tgl_lahir = $request->tgl_lahir;
        $pengasuh->save();
        return redirect()->route('pengasuh.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengasuh  $pengasuh
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengasuh = Pengasuh::findOrFail($id);
        $pengasuh->delete();
        return redirect()->route('pengasuh.index');
    }
}
