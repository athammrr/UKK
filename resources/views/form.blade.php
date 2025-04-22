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
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <div class="flex gap-4 bg-gray-800 p-4 rounded-md">
            <div class="flex-1">
                <label class="text-white block">Tanggal Check-in:</label>
                <input type="date" name="check_in" required class="w-full rounded p-2" />
            </div>
            <div class="flex-1">
                <label class="text-white block">Tanggal Check-out:</label>
                <input type="date" name="check_out" required class="w-full rounded p-2" />
            </div>
            <div class="flex-1">
                <label class="text-white block">Jumlah Kamar:</label>
                <input type="number" name="jumlah_kamar" required class="w-full rounded p-2" />
            </div>
        </div>
        <div class="bg-gray-100 p-6 mt-6 rounded-md">
            <h2 class="text-center text-xl font-semibold mb-4">Form Pemesanan</h2>
            <div class="grid grid-cols-2 gap-4">
                <input type="text" name="nama_tamu" placeholder="Nama Tamu" class="p-2 rounded" required value="{{ Auth::user()->name }}">
                <input type="email" name="email" placeholder="Email" class="p-2 rounded" required value="{{ Auth::user()->email }}">
                <input type="text" name="no_hp" placeholder="No HP" class="p-2 rounded" required>
                <input type="hidden" name="status" placeholder="status" class="p-2 rounded" value="pending" required>
            </div>
            <div class="mt-4">
                <label for="tipe" class="block mb-2">Tipe Kamar</label>
                <select name="tipe" id="tipe" class="form-control w-full p-2 border border-gray-300 rounded" required>
                    <option value="" disabled selected>Pilih tipe kamar...</option>
                    @foreach ($kamar as $data)
                        <option value="{{ $data->id }}">{{ $data->tipe }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="mt-4 text-center">
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Konfirmasi Pemesanan</button>
            </div>
        </div>
    </form>
    
    @if(session('success'))
    <div 
        x-data="{ show: true }" 
        x-show="show"
        x-init="setTimeout(() => show = false, 4000)"
        class="fixed top-5 right-5 z-50 bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg transition-opacity duration-300"
    >
        <div class="flex items-center justify-between">
            <span class="mr-4">
                ✅ {{ session('success') }}
            </span>
            <button @click="show = false" class="text-white font-bold">&times;</button>
        </div>
    </div>
@endif
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

