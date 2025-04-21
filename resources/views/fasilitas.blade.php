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
            <div class="relative rounded-lg bg-gray-800">
                <img src="assets/images/1.jpg" alt="MacBook" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-lg bg-gray-800">
                <img src="assets/images/2.jpg" alt="MacBook" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-lg bg-gray-800">
                <img src="assets/images/3.jpg" alt="MacBook" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-lg bg-gray-800">
                <img src="assets/images/4.jpg" alt="MacBook" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-lg bg-gray-800">
                <img src="assets/images/5.jpg" alt="MacBook" class="w-full h-auto object-cover">
            </div>
            <div class="rounded-lg bg-gray-800">
                <img src="assets/images/7.jpg" alt="MacBook" class="w-full h-auto object-cover">
            </div>
        </div>
    </div>

@endsection