@extends('layouts.admin')

@section('title', 'Booking Approval')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm p-4">
        <h1 class="mb-4 text-center">Booking Approval</h1>

        <form action="{{ route('resepsionis.update', $cekin->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3 text-dark">
                <th>Nama :</th>
                <td>{{ $cekin->nama_tamu }}</td>
            </div>
            <div class="mb-3 text-dark">
                <th>Email :</th>
                <td>{{ $cekin->email }}</td>
            </div>
            <div class="mb-3 text-dark">
                <th>Nomor Handphone :</th>
                <td>{{ $cekin->no_hp }}</td>
            </div>
            <div class="mb-3 text-dark">
                <th>Jumlah Kamar :</th>
                <td>{{ $cekin->jumlah_kamar }}</td>
            </div>
            <div class="mb-3 text-dark">
                <th>Tanggal Check In :</th>
                <td>{{ $cekin->check_in }}</td>
            </div>
            <div class="mb-3 text-dark">
                <th>Tanggal Check Out :</th>
                <td>{{ $cekin->check_out }}</td>
            </div>
            

            <div class="mb-3 ">
                <label for="status" class="form-label text-dark"> Status :</label>
                <select name="status" class="form-control" required>
                    <option value="" disabled selected>Pilih status...</option>
                    <option value="pending" {{ $cekin->status == 'pending' ? 'selected' : '' }}>Pending</option>
                    <option value="approved" {{ $cekin->status == 'approved' ? 'selected' : '' }}>Approved</option>
                    <option value="done" {{ $cekin->status == 'done' ? 'selected' : '' }}>Done</option>
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('resepsionis.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary btn-lg">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
