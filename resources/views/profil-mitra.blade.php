@extends('layouts.navbar-footer')

@section('title', 'Profil Mitra')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Profil Pemaparan Mitra</h1>

    <!-- 🔍 Search Bar -->
    <div class="flex items-center gap-2 mb-6">
        <input type="text" placeholder="Search" class="flex-1 border rounded-xl px-4 py-2 focus:ring-2 focus:ring-orange-400 focus:outline-none">
        <button class="bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded-xl">
            🔍
        </button>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- 🏷️ Sidebar Filter -->
        <aside class="bg-white rounded-xl shadow p-4 h-fit">
            <h2 class="font-semibold text-gray-700 mb-3">Filter</h2>
            <div>
                <h3 class="text-sm font-medium text-gray-600 mb-2">Bidang Industri</h3>
                <label class="flex items-center mb-1"><input type="checkbox" class="mr-2"> IT & Software</label>
                <label class="flex items-center mb-1"><input type="checkbox" class="mr-2"> Desain Grafis</label>
                <label class="flex items-center mb-1"><input type="checkbox" class="mr-2"> Otomotif</label>
                <label class="flex items-center mb-1"><input type="checkbox" class="mr-2"> Manufaktur</label>
            </div>
        </aside>

        <!-- 📋 Daftar Profil -->
        <main class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach (range(1,9) as $i)
            <div class="bg-white rounded-xl shadow p-4 hover:shadow-lg hover:-translate-y-1 transition">
                <div class="flex items-center justify-between mb-2">
                    <h3 class="font-semibold text-gray-800">Mitra {{ $i }}</h3>
                    <span class="text-xs bg-orange-100 text-orange-700 px-2 py-1 rounded">Jakarta</span>
                </div>
                <p class="text-sm text-gray-600 mb-3">Bidang Industri</p>
                <button class="bg-orange-500 hover:bg-orange-600 text-white text-sm px-3 py-1 rounded-lg">Lihat Detail</button>
            </div>
            @endforeach
        </main>
    </div>
</div>
@endsection
