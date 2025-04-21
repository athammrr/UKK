@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row" >        
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <h1>Detail Data Kamar</h1>
            <table class="table border-spacing-2 ">
                <tr>
                    <th>Nama Fasilitas</th>
                    <td>{{ $fakamar->nama_fasilitas }}</td>
                </tr>
                <tr>
                    <th>Tipe Kamar</th>
                    <td>{{ $fakamar->kamar->tipe }}</td>
                </tr>
            </table>
            <div class="p-3">
                <a href="{{ route('fakamar.index') }}" class="btn btn-primary btn-lg">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
