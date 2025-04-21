@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4" >
            <form action="{{ route('admin.store') }}" method="POST" >
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label text-dark">Name :</label>
                    <input type="text" name="name" class="form-control" required placeholder="Fill here...">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label text-dark">Email :</label>
                    <input type="email" name="email" class="form-control" required placeholder="Fill here...">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label text-dark">Password :</label>
                    <input type="password" name="password" class="form-control" required placeholder="Fill here...">
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label text-dark">Role :</label>
                    <select name="role" class="form-control" required>
                        <option value="" disabled selected>Select a role...</option>
                        <option value="admin">Admin</option>
                        <option value="resepsionis">Resepsionis</option>
                    </select>
                </div>
                
            
            <div class="p-3 ">
                <button class="btn btn-success btn-lg" type="submit">+</button>
            </div>
            </form>
        </div>
</div>



@endsection