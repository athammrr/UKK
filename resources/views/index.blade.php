<!DOCTYPE html>
<html class="scroll-smooth" lang="id">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Hotel Hebat</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-900">
        <main>
            <div class="max-w-7xl mx-auto p-6">
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            
            <div class="flex justify-between items-center max-w-7xl mx-auto p-6">
                <nav class="text-gray-200">
                    <ul class="flex space-x-6">
                        <li><a href="#" class="hover:text-gray-400">Home</a></li>
                        <li><a href="#kamar" class="hover:text-gray-400 transition">Kamar</a></li>
                        <li><a href="#fasilitas" class="hover:text-gray-400">Fasilitas</a></li>
                    </ul>
                </nav>
            </div>
            

            <div class="max-w-9xl mx-auto py-6 sm:px-6 lg:px-8">
                <div class="rounded overflow-hidden shadow-lg sticky">
                    <img class="w-full h-96 object-cover" src="/assets/images/hotel.jpg" alt="Hotel">
                </div>
            </div>

            <!-- Form untuk check-in dan check-out -->
            <div class="w-full flex justify-center">
                <div class="w-full max-w-7xl rounded-md bg-gray-800 p-6 shadow-md">
                    <div class="mb-6">
                        <h2 class="text-xl text-white font-semibold text-center mb-4">Pemesanan Hotel</h2>
                        <form action="{{ route('login') }}">
                            <div class="flex justify-center gap-6">
                                <div class="flex flex-col">
                                    <label for="check_in" class="mb-1 text-white ">Tanggal Check-in</label>
                                    <input type="date" id="check_in" name="check_in" class=" w-full rounded p-2 border shadow-sm" required/>
                                </div>
                                <div class="flex flex-col">
                                    <label for="check_out" class="mb-1 text-white ">Tanggal Check-out</label>
                                    <input type="date" id="check_out" name="check_out" class="w-full rounded p-2 border shadow-sm" required/>
                                </div>
                                <div class="flex flex-col">
                                    <br>
                                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">Konfirmasi Pemesanan</a>
                                </div>
                            </div>
                        </form>
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
                            🔍 <span class="font-semibold">Perubahan & Penjelasan</span><br>
                            <span class="text-blue-400">text-5xl</span> → Bikin lebih besar & lebih eye-catching.<br>
                            <span class="text-blue-400">font-extrabold</span> → Lebih tegas dibanding bold.<br>
                            <span class="text-blue-400">text-gray-600</span> → Warna sedikit lebih gelap dari text-gray-400, jadi lebih nyaman dilihat.<br>
                            <span class="text-blue-400">tracking-wide</span> → Tambahin sedikit jarak antar huruf biar terlihat elegan.<br>
                            <span class="text-blue-400">py-10</span> → Biar ada ruang atas-bawah supaya gak terlalu rapat.<br>
                            🚀 Sekarang tampilannya lebih profesional dan nyaman dibaca! 😎
                        </p>
                    </div>
                </div>
             </div>
             <div class="max-w-9xl mx-auto py-6 sm:px-6 lg:px-8" >
                <div class="rounded overflow-hidden shadow-lg sticky " >    
                    <img class="w-full h-96 object-cover transition-transform duration-300 hover:scale-110" src="/assets/images/35.jpg" alt="Hotel">
                </div>
            </div>
            
        
            <div id="kamar" class="max-w-9xl mx-auto py-10 lg:px-8 gap-4">
                <div class="flex ">
                    <div>
                        <h1 class="text-5xl font-extrabold text-gray-400 tracking-wide">
                            Tipe Superior
                        </h1>
                    </div>
                </div>
                <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl ">
                    <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl ">
                        <p class="text-lg leading-relaxed">
                            🔍 <span class="font-semibold">Fasilitas :</span><br>
                            <span class="text-blue-400">text-5xl</span> → Bikin lebih besar & lebih eye-catching.<br>
                            <span class="text-blue-400">font-extrabold</span> → Lebih tegas dibanding bold.<br>
                            <span class="text-blue-400">text-gray-600</span> → Warna sedikit lebih gelap dari text-gray-400, jadi lebih nyaman dilihat.<br>
                            <span class="text-blue-400">tracking-wide</span> → Tambahin sedikit jarak antar huruf biar terlihat elegan.<br>
                            <span class="text-blue-400">py-10</span> → Biar ada ruang atas-bawah supaya gak terlalu rapat.<br>
                            🚀 Sekarang tampilannya lebih profesional dan nyaman dibaca! 😎
                        </p>
                    </div>
                </div>
             </div>
        
             <div class="max-w-9xl mx-auto py-6 sm:px-6 lg:px-8" >
                <div class="rounded overflow-hidden shadow-lg sticky " >    
                    <img class="w-full h-96 object-cover transition-transform duration-300 hover:scale-110" src="/assets/images/7.jpg" alt="Hotel">
                </div>
            </div>
            
        
            <div class="max-w-9xl mx-auto py-10 lg:px-8 gap-4">
                <div class="flex ">
                    <div>
                        <h1 class="text-5xl font-extrabold text-gray-400 tracking-wide">
                            Tipe Deluxe
                        </h1>
                    </div>
                </div>
                <div id="fasilitas" class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl ">
                    <div class="rounded-lg bg-gray-800 text-white p-6 shadow-lg max-w-2xl ">
                        <p class="text-lg leading-relaxed">
                            🔍 <span class="font-semibold">Fasilitas :</span><br>
                            <span class="text-blue-400">text-5xl</span> → Bikin lebih besar & lebih eye-catching.<br>
                            <span class="text-blue-400">font-extrabold</span> → Lebih tegas dibanding bold.<br>
                            <span class="text-blue-400">text-gray-600</span> → Warna sedikit lebih gelap dari text-gray-400, jadi lebih nyaman dilihat.<br>
                            <span class="text-blue-400">tracking-wide</span> → Tambahin sedikit jarak antar huruf biar terlihat elegan.<br>
                            <span class="text-blue-400">py-10</span> → Biar ada ruang atas-bawah supaya gak terlalu rapat.<br>
                            🚀 Sekarang tampilannya lebih profesional dan nyaman dibaca! 😎
                        </p>
                    </div>
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
                    <div class="relative overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/1.jpg" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/2.jpg" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/3.jpg" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/4.jpg" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/5.jpg" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/7.jpg" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                </div>
            </div>
        
        </main>
    </body>
</html>
