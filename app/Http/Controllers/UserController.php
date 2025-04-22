<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CheckIn;
use App\Models\Kamar;
use App\Models\Fahotel;

class UserController extends Controller
{
    public function index() {
        return view('home');
    }

    public function form(){
        $kamar = Kamar::all();
        return view('form', compact('kamar'));
    }

    public function kamar() { 
        $kamar = Kamar::all();
        return view('kamar', compact('kamar'));
    }

    public function fasilitas(){
        $fahotel = Fahotel::all();
        return view('fasilitas', compact('fahotel'));
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
            'status' => 'string|in:pending,approved,done',
        ]);

        CheckIn::create($request->all());

        return redirect()->route('user.index')->with('success', 'Pemesanan telah dibuat');
    }
}
