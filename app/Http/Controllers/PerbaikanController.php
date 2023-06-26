<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Perbaikan;
use Illuminate\Http\Request;

class PerbaikanController extends Controller
{
    public function index()
    {
        $perbaikans = Perbaikan::all();
        return view('Menu.index', compact('perbaikans'));
    }

    public function add()
    {
        return view('Menu.add');
    }

    public function simpan(Request $request)
    {
        // validasi data sebelum disimpan
        $request->validate([
            'soal_26' => 'required|min:5',
            'jenis_26' => 'required|min:5',
            'jawaban_26' => 'required|min:5',
        ]);
        // simpan data melalui model
        Perbaikan::create($request->all());
        return to_route('pertanyaan.index')->with('pesan', 'Data Berhasil disimpan.');
    }

    public function edit($id)
    {
        $perbaikans = Perbaikan::where('id', $id)->first();
        return view('Menu.edit', compact('perbaikans'));
    }

    public function update(Request $request, $id)
    {
        $perbaikans = Perbaikan::where('id', $id)->first();
        $request->validate([
            'soal_26' => 'required|min:5',
            'jenis_26' => 'required|min:5',
            'jawaban_26' => 'required|min:5',
        ]);
        $perbaikans->update($request->all());
        return to_route('pertanyaan.index')->with('pesan', 'Data Berhasil disimpan.');
    }

    public function delete($id)
    {
        $perbaikans = Perbaikan::where('id', $id)->first();
        $perbaikans->delete();
        return to_route('pertanyaan.index')->with('pesan', 'Data Berhasil dihapus.');
    }
}
