@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Hello Sir/Mam!</h6>
            </div>
            <div class="card-body">
                <p>You're logged in!</p>
            </div>
        </div>
    </div>    
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4" >
            <h1 class="text-dark">Daftar Pemesanan</h1>
            <table class="table border-spacing-2">
                <thead>
                    <tr>
                        <th>Nama Tamu</th>
                        <th>No. Hp</th>
                        <th>Tanggal Checkin</th>
                        <th>Tanggal Checkout</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if($cekin->isNotEmpty())
                        @foreach ($cekin as $data)
                            <tr>
                                <td>{{ $data->nama_tamu }}</td>
                                <td>{{ $data->no_hp }}</td>
                                <td>{{ $data->check_in }}</td>
                                <td>{{ $data->check_out }}</td>
                                <td>
                                @if ($data->status == 'pending')
                                <p class="text-warning">{{ $data->status }}</p>
                                    @else 
                                <p class="text-success">{{ $data->status }}</p>
                                @endif
                                </td>
                                <td class="d-flex gap-5">
                                    <a href="{{ route('resepsionis.show', $data->id) }}" class="btn btn-primary btn-sm">
                                        Show
                                    </a>
                                    @if ($data->status == 'done')  
                                    <div class="card bg-success">
                                        <a href="#"> ✅</a>  
                                    </div>   
                                    @else
                                    <a href="{{ route('resepsionis.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                        Check In 
                                    </a>                                  
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="3" class="text-center text-muted">Tidak ada data tersedia</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
</div>
@endsection
