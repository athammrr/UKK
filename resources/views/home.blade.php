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
        <div class="w-full flex justify-center">
            <div class="w-full max-w-5xl rounded-md bg-gray-800 p-6 shadow-md">
                <div class="mb-6">
                    <h2 class="text-xl text-white font-semibold text-center mb-4">Pemesanan Hotel</h2>
                        <div class="flex justify-center gap-6">
                            <div class=" flex flex-col">
                                <br>
                                <a href="{{ route('user.form') }}" class="justify-center bg-blue-600 text-white px-6 py-2 rounded outline-transparent hover:bg-blue-700">Pesan Kamar</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div id="tentangKami" class="max-w-7xl mx-auto py-10 gap-4">
            <div class="flex justify-center">
                <div>
                    <h1 class="text-5xl font-extrabold text-gray-400 tracking-wide">
                        Tentang Kami
                    </h1>
                </div>
            </div>
            <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl mx-auto">
                <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl mx-auto">
                    <p class="text-lg leading-relaxed">
                        <span class="hover:text-blue-300 ">Hotel Hebat</span> adalah hotel dengan sistem yang sangat <span>terstruktur</span> 
                    </p>
                </div>
            </div>
         </div>


     
@endsection

@section('scripts')
<script>
    function togglePemesanan() {
        const form = document.getElementById('formPemesanan');
        const tentang = document.getElementById('tentangKami');

        form.classList.remove('hidden');
        tentang.classList.add('hidden');
        form.scrollIntoView({ behavior: 'smooth' });
    }
</script>
@endsection

