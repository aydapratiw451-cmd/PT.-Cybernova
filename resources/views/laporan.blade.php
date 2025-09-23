
@extends('layouts.navbar-footer')

@section('title', 'Laporan PKL')

@section('content')
<main class="flex-1 flex justify-center items-start p-6">
    <div class="bg-white shadow-xl rounded-2xl w-full max-w-5xl p-6">
        <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Laporan PKL</h1>

        <!-- ✅ Tombol Tambahkan Laporan -->
        <div class="flex justify-end mb-4">
            <a href="{{ url('/form-laporan') }}" 
               class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm font-medium shadow">
                + Tambahkan Laporan
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-200 rounded-lg">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 border text-left">Tanggal</th>
                        <th class="px-4 py-3 border text-left">Kegiatan</th>
                        <th class="px-4 py-3 border text-left">Jam</th>
                        <th class="px-4 py-3 border text-center">Status</th>
                        <th class="px-4 py-3 border text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 border">2025-09-23</td>
                        <td class="px-4 py-3 border">Membantu input data</td>
                        <td class="px-4 py-3 border">08:00 - 15:00</td>
                        <td class="px-4 py-3 border text-center">
                            <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded">Revisi</span>
                        </td>
                        <td class="px-4 py-3 border text-center">
                            <button class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-1 rounded text-sm">
                                Edit
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-3 border">2025-09-22</td>
                        <td class="px-4 py-3 border">Menyusun laporan harian</td>
                        <td class="px-4 py-3 border">08:00 - 15:00</td>
                        <td class="px-4 py-3 border text-center">
                            <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded">Disetujui</span>
                        </td>
                        <td class="px-4 py-3 border text-center">
                            <button class="bg-gray-300 text-gray-600 px-3 py-1 rounded text-sm cursor-not-allowed" disabled>
                                ✔
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection
