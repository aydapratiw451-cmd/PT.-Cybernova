@extends('layouts.navbar-footer')

@section('title', 'Tambah Laporan')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100 py-10">
    <div class="bg-white shadow-xl rounded-2xl w-full max-w-lg">
        <!-- HEADER CARD -->
        <div class="bg-gray-900 text-white text-center rounded-t-2xl py-3 text-lg font-semibold">
            Tambah Laporan
        </div>

        <form class="p-6 space-y-5">
            <!-- Tanggal -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Tanggal</label>
                <input type="date" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
            </div>

            <!-- Kegiatan -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kegiatan</label>
                <textarea rows="2" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none" placeholder="Tuliskan kegiatan hari ini..."></textarea>
            </div>

            <!-- Jam Kerja -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Jam Kerja</label>
                <div class="grid grid-cols-2 gap-3">
                    <input type="time" class="p-2 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
                    <input type="time" class="p-2 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
                </div>
            </div>

            <!-- Kendala -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Kendala</label>
                <input type="text" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none" placeholder="Tuliskan kendala jika ada">
            </div>

            <!-- Solusi -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Solusi</label>
                <input type="text" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none" placeholder="Tuliskan solusi jika ada">
            </div>

            <!-- Upload Foto -->
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Upload Foto</label>
                <input type="file" class="w-full p-2 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
            </div>

            <!-- Tombol Submit -->
            <div class="flex justify-center">
                <a href=""></a>
                <button type="submit" class="bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-6 rounded-lg transition shadow-md">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection