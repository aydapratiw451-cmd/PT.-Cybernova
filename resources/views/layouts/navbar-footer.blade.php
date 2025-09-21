<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Informalis PKL')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!--  NAVBAR -->
    <header class="bg-gray-900 border-b border-gray-700 shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
            
            <!-- Judul Sistem (Tanpa Logo) -->
            <span class="text-xl font-bold text-white">Sistem Informasi PKL</span>

            <!-- Menu Navigasi -->
            <nav class="space-x-6 hidden md:block">
                <a href="{{ url('/') }}" class="text-gray-200 hover:text-orange-400">Beranda</a>
                <a href="{{ url('/profil-mitra') }}" class="text-gray-200 hover:text-orange-400">Profil Mitra</a>
                <a href="{{ url('/pendaftaran') }}" class="text-gray-200 hover:text-orange-400">Pendaftaran</a>
                <a href="{{ url('/laporan') }}" class="text-gray-200 hover:text-orange-400">Laporan</a>
                <a href="{{ url('/login') }}" class="text-gray-200 hover:text-orange-400">Login</a>
            </nav>
            
        </div>
    </header>

    <!-- KONTEN -->
    <main>
        @yield('content')
    </main>

    <!--  FOOTER -->
    <footer class="bg-gray-900 text-gray-300 mt-10">
        <div class="max-w-6xl mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Kolom 1: Nama Sistem -->
            <div>
                <h2 class="text-lg font-bold text-white">Sistem Informalis PKL</h2>
                <p class="text-sm mt-2">
                    Platform digital untuk pendaftaran PKL, monitoring, dan profil mitra.
                </p>
            </div>

            <!-- Kolom 2: Menu Cepat -->
            <div>
                <h3 class="text-md font-semibold text-white mb-2">Navigasi</h3>
                <ul class="space-y-1 text-sm">
                    <li><a href="{{ url('/') }}" class="hover:text-orange-400">Beranda</a></li>
                    <li><a href="{{ url('/profil-mitra') }}" class="hover:text-orange-400">Profil Mitra</a></li>
                    <li><a href="{{ url('/pendaftaran') }}" class="hover:text-orange-400">Pendaftaran PKL</a></li>
                    <li><a href="{{ url('/laporan') }}" class="hover:text-orange-400">Laporan Monitoring</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Kontak -->
            <div>
                <h3 class="text-md font-semibold text-white mb-2">Kontak</h3>
                <p class="text-sm">📧 email@smk.sch.id</p>
                <p class="text-sm">📞 (021) 1234567</p>
                <p class="text-sm">📍 Jl. Pendidikan No. 1, Kota Anda</p>
            </div>

        </div>

        <div class="text-center text-xs text-gray-500 py-4 border-t border-gray-700">
            © 2025 Sistem Informalis PKL — Dikembangkan oleh Tim CYBERNOVA
        </div>
    </footer>

</body>
</html>
