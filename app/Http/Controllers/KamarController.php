<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;

class KamarController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dari database
        $kamar = Kamar::all();

        // Kirim data ke Blade menggunakan compact()
        return view('admin.kamar.kamar', compact('kamar'));
    }

    public function create() {
        return view('admin.kamar.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe'  => 'required|string|max:255|in:Superior,Deluxe', 
            'jumlah_kamar' => 'required|integer|max:50',
            'harga' => 'required|string|max:100',
            'keterangan' => 'required|string|max:255',
            'image' => 'required|mimes:jpeg,jpg,png,webp',
        ]);

        // Simpan data ke database
        $kamar = Kamar::create([
            'tipe' => $request->tipe,
            'jumlah_kamar'=> $request->jumlah_kamar,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
            'image' => $request->image,
        ]);

        if($request->hasFile('image')){
            $request->file('image')->move('fotobuku/', $request->file('image')->getClientOriginalName());
            $kamar->image = $request->file('image')->getClientOriginalName();
            $kamar->save();
        }

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil ditambahkan');
    }

    public function show($id)
    {
        $kamar = Kamar::find($id);

        if(!$kamar){
            return redirect()->route('kamar.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.kamar.show', compact('kamar'));
    }

    public function edit($id)
    {
        $kamar = Kamar::find($id);

        if(!$kamar){
            return redirect()->route('kamar.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.kamar.edit', compact('kamar'));
    }


    public function update(Request $request, $id)
    {
        $kamar = Kamar::where('id',$id)->first();

        if(!$kamar){
            return back()->withErrors(['msg' => 'Data tidak ditemukan']);
        }

        $request->validate([
            'tipe'  => 'required|string|max:255', 
            'jumlah_kamar' => 'required|integer|max:50',
            'harga' => 'required|string|max:100',
            'keterangan' => 'required|string|max:255',
        ]);

        $kamar->update([
            'tipe' => $request->tipe,
            'jumlah_kamar'=> $request->jumlah_kamar,
            'harga' => $request->harga,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('kamar.index')
            ->with('success', 'Data kamar updated successfully.');
    }



    public function destroy($id){
        $kamar = Kamar::find($id);

        if(!$kamar){
            return redirect()->route('kamar.index')->with('error', 'Kamar not found');
        }

        $kamar->delete();
        return redirect()->route('kamar.index')->with('success', 'Data deleted successfully');
    }
}
