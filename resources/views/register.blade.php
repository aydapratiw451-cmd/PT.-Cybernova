@extends('layouts.navbar-footer')

@section('title', 'Register')

@section('content')
<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white shadow-xl rounded-xl p-10 w-full max-w-3xl">
        <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">Register</h2>

        <form action="{{ url('/register') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @csrf
            
            <!-- Kolom Kiri -->
            <div class="space-y-4">
                <!-- Nama Lengkap -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap"
                           class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
                </div>

                <!-- Tahun Lulus -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Tahun Lulus</label>
                    <input type="number" name="tahun_lulus" placeholder="2025"
                           class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
                </div>

                <!-- Jurusan -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Jurusan</label>
                    <input type="text" name="jurusan" placeholder="Masukkan jurusan"
                           class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
                </div>
            </div>

            <!-- Kolom Kanan -->
            <div class="space-y-4">
                <!-- Email -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" placeholder="Masukkan email"
                           class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Password</label>
                    <input type="password" name="password" placeholder="Masukkan password"
                           class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
                </div>

                <!-- Konfirmasi Password -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" placeholder="Ulangi password"
                           class="w-full px-4 py-3 border rounded-lg focus:ring-2 focus:ring-orange-400 focus:outline-none">
                </div>
            </div>

            <!-- Tombol Daftar (Posisi Tengah, Full Width di bawah form) -->
            <div class="col-span-1 md:col-span-2 flex justify-center mt-6">
                <button type="submit"
                    class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-3 px-8 rounded-lg transition w-1/2 text-center">
                    Daftar
                </button>
            </div>
        </form>

        <p class="mt-6 text-center text-sm text-gray-600">
            Sudah punya akun?
            <a href="{{ url('/login') }}" class="text-orange-500 hover:underline font-semibold">Login</a>
        </p>
    </div>
</div>
@endsection
