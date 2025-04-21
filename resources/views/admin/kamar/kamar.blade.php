@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4" >
                <h1 class="text-dark">Data Kamar</h1>
                <div class="card-body">
                <table class="table border-spacing-2">
                    <thead>
                        <tr>
                            <th >Tipe Kamar</th>
                            <th >Jumlah Kamar</th>
                            <th colspan="2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($kamar->isNotEmpty()) 
                            @foreach ($kamar as $data)
                                <tr>
                                    <td>{{ $data->tipe }}</td>
                                    <td>{{ $data->jumlah_kamar }}</td>
                                    <td class="d-flex gap-5">
                                        <a href="{{ route('kamar.show', $data->id) }}" class="btn btn-primary btn-sm">
                                            Show
                                        </a>

                                        <a href="{{ route('kamar.edit', $data->id) }}" class="btn btn-warning btn-sm">
                                            Edit
                                        </a>
                                        {{-- <form action="{{ route('kamar.destroy', $data->id) }}" method="POST" style="display:inline;">
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
                    <a class="btn btn-success btn-lg" href="{{ route('kamar.create') }}">+</a>
                </div>
                </div>
            </div>
</div>
@endsection
