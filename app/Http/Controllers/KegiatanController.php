<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kegiatan = Kegiatan::all();
        return view('kegiatan.index', compact('kegiatan'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kegiatan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'judul' => 'required',
            'image' => 'required',
            'isi' => 'required',
            'tgl_kegiatan' => 'required',

        ]);

        $kegiatan = new Kegiatan;
        $kegiatan->judul = $request->judul;
        if ($request->hasFile('images')) {
            $kegiatan = $request->file('images');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $kegiatan->move('images/kegiatan/', $name);
            $kegiatan->image = $name;
        }
        $kegiatan->isi = $request->isi;
        $kegiatan->tgl_kegiatan = $request->tgl_kegiatan;
        $kegiatan->save();
        return redirect()->route('kegiatan.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.edit', compact('kegiatan'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'judul' => 'required',
            'image' => 'required',
            'isi' => 'required',
            'tgl_kegiatan' => 'required',

        ]);

        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->judul = $request->judul;
        if ($request->hasFile('image')) {
            $kegiatan->deleteImage();
            $kegiatan = $request->file('image');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $kegiatan->move('image/kegiatan/', $name);
            $kegiatan->image = $name;
        }
        $kegiatan->isi = $request->isi;
        $kegiatan->tgl_kegiatan = $request->tgl_kegiatan;
        $kegiatan->save();
        return redirect()->route('kegiatan.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->deleteImage();
        $kegiatan->delete();
        return redirect()->route('kegiatan.index');

    }
}
