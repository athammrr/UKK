<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil semua data pengguna dari database
        $user = User::all();

        // Kirim data ke Blade menggunakan compact()
        return view('admin.akun.akun', compact('user'));
    }

    public function create() {
        return view('admin.akun.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'role'  => 'required|in:admin,resepsionis,user',
        ]);

        // Simpan data ke database
        User::create($request->all());

        return redirect()->route('admin.index')->with('success', 'User berhasil ditambahkan');
    }

    public function show($id){
        $user= User::find($id);

        if(!$user){
            return redirect()->route('admin.index')->with('error', 'Id notfound');
        }
        return view('admin.akun.show', compact('user'));
    }

    public function edit($id){
        $user = User::find($id);

        if(!$user){
            return redirect()->route('admin.index')->with('error', 'Id not found');
        }
        return view('admin.akun.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user = User::where('id', $id)->first();
        
        if(!$user){
            return redirect()->route('admin.index')->with('error', 'Id not found');
        }
         $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'role'  => 'required|in:admin,resepsionis,user',
        ]);
        $user->update($request->all());
        return redirect()->route('admin.index')->with('success', 'Account updated');
    }

    public function destroy($id){
        $user = User::find($id);

        if(!$user){
            return redirect()->route('admin.index')->with('error', 'User not found');
        }

        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Data deleted successfully');
    }
}
