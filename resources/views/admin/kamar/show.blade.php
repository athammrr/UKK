@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row" >        
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <h1>Detail Data Kamar</h1>
            <table class="table border-spacing-2 ">
                <tr>
                    <th>Tipe Kamar</th>
                    <td>{{ $kamar->tipe }}</td>
                </tr>
                <tr>
                    <th>Jumlah Kamar</th>
                    <td>{{ $kamar->jumlah_kamar }}</td>
                </tr>
                <tr>
                    <th>Harga</th>
                    <td>{{ $kamar->harga }}</td>
                </tr>
                <tr>
                    <th>Keterangan</th>
                    <td>{{ $kamar->keterangan }}</td>
                </tr>
            </table>
            <div class="p-3">
                <a href="{{ route('kamar.index') }}" class="btn btn-primary btn-lg">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
