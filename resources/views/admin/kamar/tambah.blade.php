@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="row"> 
    <div class="col-lg-12">
        <div class="card shadow mb-4" >
            <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="p-3 mb-3">
                    <label for="tipe" class="form-label">Tipe</label>
                    <input type="text" name="tipe" class="form-control" required>
                </div>
                <div class="p-3 mb-3">
                    <label for="jumlah_kamar" class="form-label">Jumlah Kamar:</label>
                    <input type="number" name="jumlah_kamar" class="form-control" required>
                </div>
            
                <div class="p-3 mb-3">
                    <label for="harga" class="form-label">Harga:</label>
                    <input type="text" name="harga" class="form-control" required>
                </div>

                <div class="p-3 mb-3">
                    <label for="keterangan" class="form-label fw-bold"> Keterangan : </label>
                    <textarea name="keterangan" class="form-control" required></textarea>
                </div>
                <div class="p-3 mb-3">
                    <label for="image" class="form-label">Image :</label>
                    <input type="file" name="image" class="form-control" required>
                </div>
                <div class="p-3 ">
                    <button type="submit" class="btn btn-primary">Tambah Kamar</button>
                </div>
            </form>
            
        </div>
</div>



@endsection