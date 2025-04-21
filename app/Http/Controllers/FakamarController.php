<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakamar;
use App\Models\Kamar;

class FakamarController extends Controller
{
    public function index()
    {
        $fakamar = Fakamar::with('kamar')->get();

        return view('admin.fakamar.index', compact('fakamar'));
    }

    public function create()
{
    $kamar = Kamar::all();
    return view('admin.fakamar.tambah', compact('kamar'));
}


    public function store(Request $request)
    {
        $request->validate([
            'kamar_id'  => 'required|exists:kamars,id', 
            'nama_fasilitas' => 'required|string|max:255',
        ]);

        // Simpan data ke database
        Fakamar::create([
            'kamar_id' => $request->kamar_id,
            'nama_fasilitas' => $request->nama_fasilitas,
        ]); 

        return redirect()->route('fakamar.index')->with('success', 'Fakamar berhasil ditambahkan');
    }

    public function show($id)
    {
        $fakamar = Fakamar::find($id);

        if(!$fakamar){
            return redirect()->route('fakamar.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.fakamar.show', compact('fakamar'));
    }

    public function edit($id)
{
    $fakamar = Fakamar::find($id);
    $kamars = Kamar::all(); 

    if (!$fakamar) {
        return redirect()->route('fakamar.index')->with('error', 'Data tidak ditemukan');
    }

    return view('admin.fakamar.edit', compact('fakamar', 'kamars'));
}



public function update(Request $request, $id)
{
    $fakamar = Fakamar::find($id);

    if (!$fakamar) {
        return back()->withErrors(['msg' => 'Data fasilitas tidak ditemukan.']);
    }

    $request->validate([
        'kamar_id' => 'required|exists:kamars,id',
        'nama_fasilitas' => 'required|string|max:255',
    ]);

    $fakamar->update([
        'kamar_id' => $request->kamar_id,
        'nama_fasilitas' => $request->nama_fasilitas,
    ]);

    return redirect()->route('fakamar.index')->with('success', 'Data fasilitas kamar berhasil diperbarui.');
}




    public function destroy($id){
        $fakamar = Fakamar::find($id);

        if(!$fakamar){
            return redirect()->route('fakamar.index')->with('error', 'Fakamar not found');
        }

        $fakamar->delete();
        return redirect()->route('fakamar.index')->with('success', 'Data deleted successfully');
    }
}
