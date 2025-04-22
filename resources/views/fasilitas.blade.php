@extends('layouts.app')

@section('title', 'Hotel Hebat')

@section('content')
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <h1 class="text-2xl font-semibold text-gray-900 dark:text-gray-200">Hotel Hebat</h1>
        <p class="mt-4 text-gray-700 dark:text-gray-300">Selamat datang di Hotel Hebat!</p>

        <div class="flex justify-end items-center">
            <nav class="text-gray-200">
                <ul class="flex space-x-6">
                    <li><a href="{{ route('user.index') }}" class=" hover:text-gray-400 " >Home</a></li>
                    <li><a href="{{ route('user.kamar') }}" class=" hover:text-gray-400 " >Kamar</a></li>
                    <li><a href="{{ route('user.fa') }}" class="hover:text-gray-400" >Fasilitas</a></li> 
                </ul>
            </nav>    
        </div>
    </div>
    <div class="max-w-9xl mx-auto py-6 sm:px-6 lg:px-8" >
        <div class="rounded overflow-hidden shadow-lg sticky " >    
            <img class="w-full h-96 object-cover " src="/assets/images/7.jpg" alt="Hotel">
        </div>
    </div>


    <div class="mx-auto max-w-8xl lg:px-8" id="fasilitas">
        <div class="flex ">
            <div class="">
                <h1 class="text-5xl font-extrabold text-gray-400 tracking-wide relative inline-block">
                    Fasilitas
                </h1>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-6 p-4 rounded-lg ">
            @if($fahotel->isNotEmpty()) 
            @foreach ($fahotel as $data)
            <div class="relative rounded-lg p-4 bg-gray-700">
                <div class="rounded-sm bg-gray-600">
                    <h1 class="text-white">{{ $data->nama_fasilitas }}</h1>
                </div>
                <div class="rounded-sm bg-gray-600">
                    @if ($data->status == 'available')
                        <h1 class="text-white">Status : <span class="text-green-400">{{ $data->status }}</span></h1>
                        @else
                        <h1 class="text-white">Status : <span class="text-red-500">{{ $data->status }}</span></h1>

                    @endif
                </div>
                <div class="rounded- bg-gray-600">
                    <h1 class="text-white">Keterangan : {{ $data->keterangan }}</h1>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>

@endsection