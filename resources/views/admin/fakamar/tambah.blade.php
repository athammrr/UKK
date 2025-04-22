@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="row"> 
    <div class="col-lg-12">
        <div class="card shadow mb-4" >
            <form action="{{ route('fakamar.store') }}" method="POST">
                @csrf
                <div class="p-3 mb-3">
                    <label for="kamar_id" class="form-label">Tipe Kamar:</label>
                    <select name="kamar_id" id="kamar_id" class="form-control" required>
                        <option value="" disabled selected>Pilih tipe kamar...</option>
                        @foreach ($kamar as $data)
                            <option value="{{ $data->id }}">{{ $data->tipe }}</option>
                        @endforeach
                    </select>
                </div>
            
                <div class="p-3 mb-3">
                    <label for="nama_fasilitas" class="form-label">Nama Fasilitas:</label>
                    <input type="text" name="nama_fasilitas" class="form-control" required>
                </div>
            
                <div class="p-3 ">
                    <button type="submit" class="btn btn-primary">Tambah Kamar</button>
                </div>
            </form>
            
        </div>
</div>



@endsection