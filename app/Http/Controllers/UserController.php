<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CheckIn;
use App\Models\Kamar;

class UserController extends Controller
{
    public function index() {
        $kamar = Kamar::all();
        return view('home', compact('kamar'));
    }
    
    

    public function kamar() {
        return view('kamar');
    }

    public function fasilitas(){
        return view('fasilitas');
    }

    public function store(Request $request) {
        $request->validate([
            'nama_tamu' => 'required|string|max:255',
            'email' => 'required|email',
            'no_hp' => 'required|string',
            'tipe' => 'required|exists:kamars,id',
            'jumlah_kamar' => 'required|integer|min:1',
            'check_in' => 'required|date|after_or_equal:today',
            'check_out' => 'required|date|after:check_in',
            'status' => 'string|in:pending,approved',
        ]);

        CheckIn::create($request->all());

        return redirect()->route('user.index')->with('success', 'Pemesanan telah dibuat');
    }
}
