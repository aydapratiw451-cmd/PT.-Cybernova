@extends('layouts.navbar-footer')

@section('title', 'Formulir Pendaftaran PKL')

@section('content')
<div class="flex justify-center bg-gray-100 py-16">
    <!-- Card diperlebar & diberi jarak dari atas & bawah -->
    <div class="bg-white shadow-xl rounded-xl p-10 w-full max-w-4xl">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Formulir Pendaftaran PKL</h2>

        <form action="{{ url('/pendaftaran') }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nama Lengkap -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" placeholder="Masukkan nama lengkap"
                       class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
            </div>

            <!-- NIS -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">NIS</label>
                <input type="text" name="nis" placeholder="Masukkan NIS"
                       class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
            </div>

            <!-- Jurusan -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Jurusan</label>
                <select name="jurusan"
                        class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
                    <option value="">Pilih Jurusan</option>
                    <option value="TKJ">TKJ</option>
                    <option value="RPL">RPL</option>
                    <option value="MM">MM</option>
                    <option value="OTKP">OTKP</option>
                </select>
            </div>

            <!-- Tanggal Mulai PKL -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Mulai PKL</label>
                <input type="date" name="tanggal_mulai"
                       class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
            </div>

            <!-- Tanggal Selesai PKL -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Tanggal Selesai PKL</label>
                <input type="date" name="tanggal_selesai"
                       class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
            </div>

            <!-- Catatan Tambahan -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Catatan Tambahan</label>
                <textarea name="catatan" rows="3" placeholder="Tuliskan catatan tambahan..."
                          class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none"></textarea>
            </div>

            <!-- Skill -->
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-1">Skill</label>
                <textarea name="skill" rows="4" placeholder="Tuliskan skill yang kamu miliki..."
                          class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none"></textarea>
            </div>

            <!-- Tombol Kirim -->
            <div class="flex justify-center pt-6">
                <button type="submit"
                        class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-lg transition w-1/2 text-center">
                    Kirim Pendaftaran
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
