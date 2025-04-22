<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fahotel;
use App\Models\Image;

class FahotelController extends Controller
{
    public function index()
    {
        $fahotel = Fahotel::all();

        return view('admin.fahotel.index', compact('fahotel'));
    }

    public function create() {
        return view('admin.fahotel.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_fasilitas'  => 'required|string|max:255', 
            'status' => 'required|string|max:255|in:available,not available',
            'keterangan' => 'required|string|max:255',
            // 'image' => 'required|image|mimes:jpeg,png,jpg|max',
        ]);

        // $image = new Image();
        // $imageName = time().'.'.$request->image->extension();
        // $request->image->storageAs('images', $imageName);

        Fahotel::create([
            'nama_fasilitas' => $request->nama_fasilitas,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            // 'image' => $imageName,
        ]);

        return redirect()->route('fahotel.index')->with('success', 'Fasilitas Hotel berhasil ditambahkan');
    }

    public function show($id)
    {
        $fahotel = Fahotel::find($id);

        if(!$fahotel){
            return redirect()->route('fahotel.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.fahotel.show', compact('fahotel'));
    }

    public function edit($id)
    {
        $fahotel = Fahotel::find($id);

        if(!$fahotel){
            return redirect()->route('fahotel.index')->with('error', 'Data doesnt exist');
        }
        return view('admin.fahotel.edit', compact('fahotel'));
    }


    public function update(Request $request, $id)
    {
        $fahotel = Fahotel::where('id',$id)->first();

        if(!$fahotel){
            return back()->withErrors(['msg' => 'Data tidak ditemukan']);
        }

        $request->validate([
            'nama_fasilitas'  => 'required|string|max:255', 
            'status' => 'required|string|max:255|in:available,not available',
            'keterangan' => 'required|string|max:255',
        ]);

        $fahotel->update([
            'nama_fasilitas' => $request->nama_fasilitas,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('fahotel.index')
            ->with('success', 'Data aparat updated successfully.');
    }





    public function destroy($id){
        $fahotel = Fahotel::find($id);

        if(!$fahotel){
            return redirect()->route('fahotel.index')->with('error', 'Fahotel not found');
        }

        $fahotel->delete();
        return redirect()->route('fahotel.index')->with('success', 'Data deleted successfully');
    }
}
