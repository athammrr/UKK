@extends('layouts.admin')

@section('title', 'Edit Data Aparat')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h1 class="mb-4 text-center">Edit Data Kamar</h1>

        <form action="{{ route('kamar.update', $kamar->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="tipe" class="form-label text-dark">Tipe Kamar :</label>
                <select name="tipe" class="form-control" required>
                    <option value="" disabled selected>Pilih tipe kamar...</option>
                    <option value="Superior" {{ $kamar->tipe == 'Superior' ? 'selected' : '' }}>Superior</option>
                    <option value="Deluxe" {{ $kamar->tipe == 'Deluxe' ? 'selected' : '' }}>Deluxe</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jumlah_kamar" class="form-label fw-bold">Jumlah Kamar</label>
                <input type="number" name="jumlah_kamar" class="form-control" value="{{ $kamar->jumlah_kamar }}" required>
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label fw-bold">Harga</label>
                <input type="number" name="harga" class="form-control" value="{{ $kamar->harga }}" required>
            </div>
            <div class="mb-3">
                <label for="keterangan" class="form-label fw-bold"> Keterangan : </label>
                <textarea name="keterangan" class="form-control" required>{{ $kamar->keterangan }}</textarea>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ route('kamar.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary btn-lg">Update Data</button>
            </div>
        </form>
    </div>
</div>
@endsection
