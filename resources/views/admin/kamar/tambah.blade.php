@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="row"> 
    <div class="col-lg-12">
        <div class="card shadow mb-4" >
            <form action="{{ route('kamar.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="tipe" class="form-label">Tipe Kamar:</label>
                    <select name="tipe" class="form-control" required>
                        <option value="" disabled selected>Pilih tipe kamar...</option>
                        <option value="Superior">Superior</option>
                        <option value="Deluxe">Deluxe</option> 
                    </select>
                </div>
            
                <div class="mb-3">
                    <label for="jumlah_kamar" class="form-label">Jumlah Kamar:</label>
                    <input type="number" name="jumlah_kamar" class="form-control" required>
                </div>
            
                <div class="mb-3">
                    <label for="harga" class="form-label">Harga:</label>
                    <input type="text" name="harga" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="keterangan" class="form-label fw-bold"> Keterangan : </label>
                    <textarea name="keterangan" class="form-control" required></textarea>
                </div>
            
                <button type="submit" class="btn btn-primary">Tambah Kamar</button>
            </form>
            
        </div>
</div>



@endsection