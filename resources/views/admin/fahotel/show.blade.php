@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row" >        
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <h1>Detail Data Kamar</h1>
            <table class="table border-spacing-2 ">
                <tr>
                    <th>Nama Fasilitas :</th>
                    <td>{{ $fahotel->nama_fasilitas }}</td>
                </tr>
                <tr>
                    <th>Status :</th>
                    <td>{{ $fahotel->status }}</td>
                </tr>
                <tr>
                    <th>Keterangan :</th>
                    <td>{{ $fahotel->keterangan }}</td>
                </tr>
            </table>
            <div class="p-3">
                <a href="{{ route('fahotel.index') }}" class="btn btn-primary btn-lg">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
