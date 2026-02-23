@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<div class="relative bg-gradient-to-br from-blue-900 via-blue-800 to-indigo-900 pt-24 pb-16">

    <!-- Decorative Elements -->
    <div class="absolute top-0 right-0 -mt-20 -mr-20 w-64 h-64 bg-white opacity-5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-0 left-0 -mb-20 -ml-20 w-64 h-64 bg-blue-400 opacity-5 rounded-full blur-3xl"></div>

    <div class="relative max-w-4xl mx-auto px-6">
        <!-- Breadcrumb -->
        <div class="flex items-center text-sm text-blue-200 mb-6">
            <a href="/" class="hover:text-white transition flex items-center gap-1">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                <span>Beranda</span>
            </a>
            <svg class="w-4 h-4 mx-2 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <a href="/agenda" class="hover:text-white transition">Agenda</a>
            <svg class="w-4 h-4 mx-2 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
            <span class="text-white font-medium">Detail Hari</span>
        </div>

        <!-- Header Content -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm text-white px-4 py-2 rounded-full mb-4 border border-white/20">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    <span class="text-sm font-semibold tracking-wide">DETAIL AGENDA</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-2 leading-tight">
                    Agenda Kegiatan
                </h1>
                <p class="text-xl text-blue-200 flex items-center gap-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                    {{ \Carbon\Carbon::parse($date)->locale('id')->translatedFormat('l, d F Y') }}
                </p>
            </div>

            <!-- Stats Card -->
            <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-4 border border-white/20">
                <div class="flex items-center gap-3">
                    <div class="bg-white/20 rounded-xl p-3">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-blue-200 text-sm">Total Agenda</p>
                        <p class="text-white text-2xl font-bold">{{ count($agenda) }} Kegiatan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MAIN CONTENT -->
<div class="max-w-4xl mx-auto px-6 py-12">
    @forelse ($agenda as $index => $item)
        <!-- Agenda Card with Animation -->
        <div class="group bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 border border-gray-100 mb-6 overflow-hidden hover:-translate-y-1"
             style="animation: fadeInUp 0.5s ease-out {{ $index * 0.1 }}s both;">

            <!-- Card Header with Status Bar -->
            <div class="relative">
                <!-- Status Bar -->
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500"></div>

                <!-- Header Content -->
                <div class="p-6 pb-4">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="flex items-start gap-4">
                            <!-- Icon Circle -->
                            <div class="hidden md:flex w-12 h-12 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-xl shadow-lg items-center justify-center text-white transform group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                                </svg>
                            </div>
                            <div>
                                <h2 class="text-xl font-bold text-gray-800 group-hover:text-blue-600 transition-colors duration-300">
                                    {{ $item['nama'] }}
                                </h2>
                                <div class="flex items-center gap-2 mt-1">
                                    <span class="bg-blue-50 text-blue-600 text-xs font-semibold px-3 py-1 rounded-full flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l5 5a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-5-5A1.994 1.994 0 013 12V7a4 4 0 014-4z"/>
                                        </svg>
                                        Agenda
                                    </span>
                                    <span class="text-gray-400 text-sm">#{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Time Badge -->
                        <div class="flex items-center gap-2 bg-gray-50 px-4 py-2 rounded-xl">
                            <svg class="w-5 h-5 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span class="font-semibold text-gray-700">{{ $item['jam_mulai'] }}</span>
                            <span class="text-gray-400">-</span>
                            <span class="text-gray-500">Selesai</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card Body -->
            <div class="p-6 pt-0">
                <!-- Info Grid -->
                <div class="grid md:grid-cols-2 gap-4 mb-6">
                    <!-- Date Info -->
                    <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                        <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Tanggal</p>
                            <p class="font-semibold text-gray-800">
                                {{ \Carbon\Carbon::parse($item['tanggal'])->locale('id')->translatedFormat('l, d F Y') }}
                            </p>
                        </div>
                    </div>

                    <!-- Time Info -->
                    <div class="flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                        <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Waktu</p>
                            <p class="font-semibold text-gray-800">
                                {{ $item['jam_mulai'] }} - Selesai
                            </p>
                        </div>
                    </div>

                    <!-- Location Info (Full Width) -->
                    <div class="md:col-span-2 flex items-center gap-3 bg-gray-50 p-3 rounded-xl">
                        <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500">Lokasi</p>
                            <p class="font-semibold text-gray-800">
                                {{ $item['lokasi'] }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Description Section -->
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-xl p-5 border border-gray-100">
                    <div class="flex items-center gap-2 mb-3">
                        <svg class="w-5 h-5 text-blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"/>
                        </svg>
                        <h3 class="font-semibold text-gray-700">Deskripsi Kegiatan</h3>
                    </div>
                    <p class="text-gray-600 leading-relaxed">
                        {{ $item['deskripsi'] }}
                    </p>
                </div>
            </div>

            <!-- Card Footer -->
            <div class="px-6 py-4 bg-gray-50 border-t border-gray-100 flex justify-between items-center">
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Estimasi durasi: {{ rand(60, 180) }} menit</span>
                </div>
                <button class="text-blue-600 hover:text-blue-800 text-sm font-semibold flex items-center gap-1 group/btn">
                    <span>Detail</span>
                    <svg class="w-4 h-4 transform group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>
        </div>
    @empty
        <!-- Empty State -->
        <div class="text-center py-16">
            <div class="bg-white rounded-2xl shadow-xl p-12 max-w-md mx-auto">
                <div class="w-24 h-24 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-12 h-12 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-800 mb-2">Belum Ada Agenda</h3>
                <p class="text-gray-500 mb-6">Tidak ditemukan agenda pada tanggal {{ \Carbon\Carbon::parse($date)->locale('id')->translatedFormat('l, d F Y') }}</p>
                <a href="/agenda" class="inline-flex items-center gap-2 bg-blue-600 text-white px-6 py-3 rounded-xl hover:bg-blue-700 transition-all duration-300 shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    <span>Kembali ke Agenda</span>
                </a>
            </div>
        </div>
    @endforelse

    <!-- Back to Top Button -->
    @if(count($agenda) > 0)
    <div class="text-center mt-10">
        <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="inline-flex items-center gap-2 bg-gray-100 hover:bg-gray-200 text-gray-700 px-6 py-3 rounded-xl transition-all duration-300 group">
            <svg class="w-5 h-5 transform group-hover:-translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
            </svg>
            <span>Kembali ke Atas</span>
        </button>
    </div>
    @endif
</div>

<!-- Animation Styles -->
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

@endsection
