@extends('layouts.admin')

@section('title', 'Edit Data Aparat')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h1 class="mb-4 text-center">Edit Data Fasilitas Kamar</h1>

        <form action="{{ route('fakamar.update', $fakamar->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="kamar_id" class="form-label text-dark">Tipe Kamar :</label>
                <select name="kamar_id" class="form-control" required>
                    <option value="" disabled selected>Pilih tipe kamar...</option>
                    @foreach ($kamars as $kamar)
                        <option value="{{ $kamar->id }}" 
                            {{ $fakamar->kamar_id == $kamar->id ? 'selected' : '' }}>
                            {{ $kamar->tipe }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="nama_fasilitas" class="form-label fw-bold">Nama Fasilitas</label>
                <input type="text" name="nama_fasilitas" class="form-control" value="{{ $fakamar->nama_fasilitas }}" required>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('fakamar.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary btn-lg">Update Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
