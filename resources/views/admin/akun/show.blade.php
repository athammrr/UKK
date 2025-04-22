@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row" >        
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <h1>Detail Data Akun</h1>
            <table class="table border-spacing-2 ">
                <tr>
                    <th>Nama :</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email :</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Waktu Verifikasi :</th>
                    <td>{{ $user->email_verified_at }}</td>
                </tr>
                <tr>
                    <th>Password :</th>
                    <td>{{ $user->password }}</td>
                </tr>
                <tr>
                    <th>Role :</th>
                    <td>{{ $user->role }}</td>
                </tr>
            </table>
            <div class="p-3">
                <a href="{{ route('admin.index') }}" class="btn btn-primary btn-lg">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
