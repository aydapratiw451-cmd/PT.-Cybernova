@extends('layouts.navbar-footer')

@section('title', 'Beranda')

@section('content')
<!-- 🔵 HERO SECTION -->
<section class="relative bg-gray-900 text-white">
    <!-- Pattern Background -->
    <div class="absolute inset-0 opacity-20" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/patterns/double-bubble-outline.png'); background-repeat: repeat;"></div>

    <div class="relative max-w-6xl mx-auto px-4 py-20 grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
        <!-- TEKS HERO -->
        <div class="text-left">
            <h1 class="text-3xl md:text-4xl font-bold mb-4">
                Sistem Informalis PKL
            </h1>
            <p class="text-lg text-gray-200 mb-6">
                Profil Pemaparan Mitra, Pendaftaran PKL, dan Laporan Monitoring Kegiatan
            </p>
            <a href="{{ url('/pendaftaran') }}" 
               class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-6 rounded-lg shadow-lg transition">
                Daftar PKL Sekarang
            </a>
        </div>

        <!-- GAMBAR HERO -->
        <div class="flex justify-center">
            <img src="pkl.jpg" 
                 alt="Ilustrasi PKL" class="w-96 h-auto drop-shadow-lg rounded-2xl border-4 border-gray-800">
        </div>
    </div>
</section>

<!-- 🟢 FITUR UTAMA -->
<section class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-xl font-bold mb-6">Fitur Utama</h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card Profil Mitra -->
        <div class="bg-white p-6 rounded-xl shadow hover:bg-orange-500 hover:shadow-lg transition flex flex-col items-center text-center  border-2 border-black">
            <img src="https://img.icons8.com/ios-filled/50/000000/conference-call.png" class="h-10 mb-3" alt="Profil Mitra">
            <h3 class="font-semibold">Profil Mitra</h3>
        </div>

        <!-- Card Pendaftaran -->
        <div class="bg-white p-6 rounded-xl shadow hover:bg-orange-500 hover:shadow-lg transition flex flex-col items-center text-center border-2 border-black">
            <img src="https://img.icons8.com/ios-filled/50/000000/edit.png" class="h-10 mb-3" alt="Pendaftaran PKL">
            <h3 class="font-semibold">Pendaftaran PKL</h3>
        </div>

        <!-- Card Laporan -->
        <div class="bg-white p-6 rounded-xl shadow hover:bg-orange-500 hover:shadow-lg transition flex flex-col items-center text-center border-2 border-black">
            <img src="https://img.icons8.com/ios-filled/50/000000/report-card.png" class="h-10 mb-3" alt="Laporan Monitoring">
            <h3 class="font-semibold">Laporan Monitoring</h3>
        </div>
    </div>
</section>

<!-- 🟡 PROFIL MITRA -->
<section class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-xl font-bold text-gray-800 mb-6">Profil Pemapara Mitra</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white shadow rounded-xl hover:shadow-lg p-4">
            <h3 class="font-semibold text-gray-800">PT Kreatifindo Digital</h3>
            <p class="text-sm text-gray-600">Lemond, Witness Rilsa, No. 4 & 135</p>
            <span class="mt-2 inline-block bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-lg">Live Profil</span>
        </div>
        <div class="bg-white shadow rounded-xl hover:shadow-lg p-4">
            <h3 class="font-semibold text-gray-800">CV Maju Jaya Printing</h3>
            <p class="text-sm text-gray-600">Discord, Witness Rilsa, Mead 4 & 135</p>
            <span class="mt-2 inline-block bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-lg">Live Profil</span>
        </div>
        <div class="bg-white shadow rounded-xl hover:shadow-lg p-4">
            <h3 class="font-semibold text-gray-800">PT Seahatara Motor</h3>
            <p class="text-sm text-gray-600">Eassed, Witness Rilsa, Mead 4 & 135</p>
            <span class="mt-2 inline-block bg-orange-100 text-orange-700 text-xs px-2 py-1 rounded-lg">Live Profil</span>
        </div>
    </div>
</section>

<!-- 🔵 LAPORAN MONITORING -->
<section class="max-w-6xl mx-auto px-4 py-10">
    <h2 class="text-xl font-bold text-gray-800 mb-4">Laporan Monitoring</h2>
    <p class="text-sm text-gray-600 mb-3">Hubungi pihak sekolah untuk update laporan:</p>
    <p class="text-sm font-semibold text-gray-800">📞 0812-3456-7890 | 📧 laporanpkl@smkn6.sch.id</p>
</section>
@endsection
