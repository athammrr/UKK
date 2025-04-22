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
                <div class="px-4 sm:px-2">
                    <h1 class="text-gray-100 hover:text-gray-400">Hotel Hebat</h1>
                </div>
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
                    <img class="w-full h-96 object-cover" src="/assets/images/kolam 2.avif" alt="Hotel">
                </div>
            </div>

            <!-- Form untuk check-in dan check-out -->

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
                            <span class="hover:text-blue-300 ">Hotel Hebat</span> adalah hotel dengan sistem yang sangat <span>terstruktur</span>.
                            Hotel yang hemat, cermat, mantap, dan tepat
                        </p>
                    </div>
                </div>
             </div>
             <div class="max-w-9xl mx-auto py-6 sm:px-6 lg:px-8" >
                <div class="rounded overflow-hidden shadow-lg sticky " >    
                    <img class="w-full h-96 object-cover" src="/assets/images/hotell.webp" alt="Hotel">
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
                            <ul>
                                <li>TV 32 Inch</li>
                                <li>Double bed</li>
                                <li>Berukuran 5x4 m2</li>
                            </ul> 
                        </p>
                    </div>
                </div>
             </div>
        
             <div class="max-w-9xl max-auto py-6 sm:px-6 lg:px-8" >
                <div class="rounded overflow-hidden shadow-lg sticky " >    
                    <img class="w-full h-96 object-cover " src="/assets/images/hotelll.png" alt="Hotel">
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
                            <ul>
                                <li>TV 42 Inch</li>
                                <li>Super bed</li>
                                <li>Berukuran 6x5 m2</li>
                            </ul> 
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
                        <img src="assets/images/hotel.webp" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/hotell.webp" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/kolam.jpg" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/kolam 2.avif" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/ruang.webp" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                    <div class="overflow-hidden rounded-lg bg-gray-800">
                        <img src="assets/images/home.webp" alt="MacBook" class="w-full h-auto object-cover transition-transform duration-300 hover:scale-110">
                    </div>
                </div>
            </div>
        
        </main>
    </body>
</html>
