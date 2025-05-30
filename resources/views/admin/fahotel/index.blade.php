@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4" >
                <h1 class="text-dark">Data Fasilitas Hotel</h1>
                <div class="card-body">
                <table class="table border-spacing-2">
                    <thead>
                        <tr>
                            <th >Nama Fasilitas</th>
                            <th >Status</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($fahotel->isNotEmpty()) 
                            @foreach ($fahotel as $data)
                                <tr>
                                    <td>{{ $data->nama_fasilitas }}</td>
                                    <td>{{ $data->status }}</td>
                                    <td class="d-flex gap-5">
                                        <a href="{{ route('fahotel.show', $data->id) }}" class="btn btn-primary btn-sm">
                                            Show
                                        </a>

                                        <a href="{{ route('fahotel.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        {{-- <form action="{{ route('fahotel.destroy', $data->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    Delete
                                                </button>
                                            </form> --}}
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
                <div class="p-3 ">
                    <a class="btn btn-success btn-lg" href="{{ route('fahotel.create') }}">+</a>
                </div>
                </div>
            </div>
</div>
@endsection
