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
        @foreach ($kamar as $data)
            <div class="rounded overflow-hidden shadow-lg sticky " >    
                <img src="{{ asset('fotobuku/' . $data->image) }}" class="w-full h-96 object-cover" alt="foto">
            </div>
            <div class="flex ">
                <div>
                    <h1 class="text-5xl font-extrabold text-gray-400 tracking-wide">
                        Tipe {{ $data->tipe }}
                    </h1>
                </div>
            </div>
            <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl ">
                <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl ">
                    <p class="text-lg leading-relaxed">
                        <ul>
                            <li>TV 32 Inch</li>
                            <li>Double bed</li>
                            <li>Berukuran 5x4 m2</li>
                        </ul>
                    </p>
                </div>
            </div>
        @endforeach
    </div>

@endsection
