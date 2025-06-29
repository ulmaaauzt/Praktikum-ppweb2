<?php

namespace App\Http\Controllers;

use App\Models\Paramedik;
use Illuminate\Http\Request;


class ParamedikController extends Controller
{
    public function index()
    {
        $list_paramedik = Paramedik::all();
        return view('paramediks.index', compact('list_paramedik'));
    }

    public function create()
    {
        return view('paramediks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:paramediks',
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'spesialis' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required|exists:unit_kerja,id',
        ]);

        Paramedik::create($request->all());

        return redirect()->route('paramediks.index')->with('success', 'Data Paramedik berhasil ditambahkan.');
    }

    public function show($id)
    {
        $paramedik = Paramedik::findOrFail($id);
        return view('paramediks.show', compact('paramedik'));
    }

    public function edit($id)
    {
        $paramedik = Paramedik::findOrFail($id);
        return view('paramediks.edit', compact('paramedik'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'gender' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'spesialis' => 'required',
            'telpon' => 'required',
            'alamat' => 'required',
            'unit_kerja_id' => 'required|exists:unit_kerja,id',
        ]);

        $paramedik = Paramedik::findOrFail($id);
        $paramedik->update($request->all());

        return redirect()->route('paramediks.index')->with('success', 'Data Paramedik berhasil diupdate.');
    }

    public function destroy($id)
    {
        Paramedik::destroy($id);
        return redirect()->route('paramediks.index')->with('success', 'Data Berhasil Dihapus');
    }
}