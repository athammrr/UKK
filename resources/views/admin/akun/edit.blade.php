@extends('layouts.admin')

@section('title', 'Edit Data Akun')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h1 class="mb-4 text-center">Edit Data Akun</h1>

        <form action="{{ route('admin.update', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label fw-bold">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">Email :</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">Password :</label>
                <input type="password" name="password" class="form-control" value="{{ $user->password }}" required>
            </div>
            <div class="mb-3">
                <label for="role" class="form-label text-dark">Tipe Kamar :</label>
                <select name="role" class="form-control" required>
                    <option value="" disabled selected>Pilih role...</option>
                    <option value="resepsionis" {{ $user->role == 'resepsionis' ? 'selected' : '' }}>Resepsionis</option>
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary btn-lg">Update Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
