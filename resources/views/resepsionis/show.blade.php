@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row" >        
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <h1>Detail Pemesanan</h1>
            <table class="table border-spacing-2 ">
                <tr>
                    <th>Nomor</th>
                    <td>{{ $cekin->id }}</td>
                </tr>
                <tr>
                    <th>Nama Tamu</th>
                    <td>{{ $cekin->nama_tamu }}</td>
                </tr>
                <tr>
                    <th>E-mail</th>
                    <td>{{ $cekin->email }}</td>
                </tr>
                <tr>
                    <th>Nomor Handphone</th>
                    <td>{{ $cekin->no_hp }}</td>
                </tr>
                <tr>
                    <th>Tipe Kamar/th>
                    <td>{{ $cekin->tipe }}</td>
                </tr>
                <tr>
                    <th>Tanggal Check In</th>
                    <td>{{ $cekin->check_in }}</td>
                </tr>
                <tr>
                    <th>Tanggal Check Out</th>
                    <td>{{ $cekin->check_out }}</td>
                </tr>
                <tr>
                    <th>Jumlah Kamar</th>
                    <td>{{ $cekin->jumlah_kamar }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>
                        @if ($cekin->status == 'approved')
                           <span class="text-success"> {{ $cekin->status }} </span>
                           @else
                           <span class="text-warning"> {{ $cekin->status }} </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Tanggal Pemesanan</th>
                    <td>{{ $cekin->created_at }}</td>
                </tr>
            </table>
            <div class="p-3">
                <a href="{{ route('resepsionis.index') }}" class="btn btn-primary btn-lg">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
