<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pejabat BAPPERIDA Kota Bogor - Halaman 2</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans antialiased bg-gray-50">
  <!-- Navigation Bar (Sama seperti halaman 1) -->
  <!-- Navigation Bar -->
  <nav class="sticky top-0 z-50 bg-white shadow-lg border-b border-gray-100">
    <div class="container mx-auto px-4">
      <div class="flex items-center justify-between h-20">
        <!-- Logo -->
        <div class="flex items-center space-x-4">
          <div class="flex items-center space-x-3">
            <img src="{{ asset('image/logokotabogor.png') }}" class="h-12 w-auto" alt="Logo Kota Bogor">
            <img src="{{ asset('image/logobapperida.png') }}" class="h-12 w-auto" alt="Logo Bapperida">
            <img src="{{ asset('image/logoberahlak.png') }}" class="h-12 w-auto" alt="Logo BerAKHLAK">
          </div>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center space-x-1">
          <a href="{{ route('home') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
            Beranda
          </a>
          <a href="{{ route('profile') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
            Profil Bapperida
          </a>

          <!-- Dokumen Dropdown -->
          <div class="relative group">
            <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 flex items-center gap-1">
              Dokumen <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
              <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 border-b border-gray-100">
                Dokumen Perencanaan
              </a>
              <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                Dokumen Litbang
              </a>
            </div>
          </div>

          <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
            PPID
          </a>
          <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
            Agenda
          </a>
          <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
            Galeri Kegiatan
          </a>
          <a href="#" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
            Kontak
          </a>

          <!-- Permohonan Dropdown -->
          <div class="relative group">
            <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 flex items-center gap-1">
              Permohonan <i class="fas fa-chevron-down text-xs"></i>
            </button>
            <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
              <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 border-b border-gray-100">
                Permohonan Informasi
              </a>
              <a href="#" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
                Permohonan Keberatan
              </a>
            </div>
          </div>
        </div>

        <!-- Mobile Menu Button -->
        <button id="mobile-menu-button" class="lg:hidden p-2 rounded-lg text-gray-600 hover:bg-gray-100">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="lg:hidden hidden bg-white border-t border-gray-100">
      <div class="container mx-auto px-4 py-4 space-y-1">
        <a href="{{ route('home') }}" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
          Beranda
        </a>
        <a href="{{ route('profile') }}" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
          Profil Bapperida
        </a>
        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
          Dokumen Perencanaan
        </a>
        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
          Dokumen Litbang
        </a>
        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
          PPID
        </a>
        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
          Agenda
        </a>
        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
          Galeri Kegiatan
        </a>
        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
          Kontak
        </a>
        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
          Permohonan Informasi
        </a>
        <a href="#" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
          Permohonan Keberatan
        </a>
      </div>
    </div>
  </nav>

  <!-- Breadcrumb -->
  <div class="bg-gray-100 border-b border-gray-200">
    <div class="container mx-auto px-4 py-4">
      <nav class="flex text-sm">
        <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600">
          <i class="fas fa-home mr-2"></i>Beranda
        </a>
        <span class="mx-2 text-gray-400">/</span>
        <a href="{{ route('profile') }}" class="text-gray-600 hover:text-blue-600">
          <i class="fas fa-building mr-2"></i>Profil Bapperida
        </a>
        <span class="mx-2 text-gray-400">/</span>
        <span class="text-blue-600 font-medium">
          <i class="fas fa-user-tie mr-2"></i>Pejabat Bapperida
        </span>
      </nav>
     </div>
  </div>

  <!-- Main Content -->
  <div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="mb-8">
      <div class="flex items-start justify-between mb-6">
        <div>
          <h1 class="text-3xl font-bold text-gray-800 mb-2">Pejabat BAPPERIDA Kota Bogor</h1>
          <p class="text-gray-600">Daftar pejabat dan staf Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah</p>
        </div>

        <!-- Button Kembali -->
        <a href="{{ route('profile') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors whitespace-nowrap">
          <i class="fas fa-arrow-left"></i>
          <span>Kembali ke Profil</span>
        </a>
      </div>

      <!-- Navigation Tabs -->
      <div class="flex border-b border-gray-200">
        <a href="{{ route('struktur') }}" class="px-6 py-4 text-gray-600 hover:text-blue-600 font-medium hover:bg-blue-50 transition-colors">
          <i class="fas fa-sitemap mr-2"></i>Struktur Organisasi
        </a>
        <a href="{{ route('pejabat') }}" class="px-6 py-4 text-blue-600 font-medium border-b-2 border-blue-600 bg-blue-50">
          <i class="fas fa-user-tie mr-2"></i>Pejabat Bapperida
        </a>
      </div>
    </div>


    <div class="bg-white rounded-xl shadow-lg p-6 mb-8">
      <div class="flex flex-col md:flex-row gap-4 items-center justify-between">
        <div class="w-full md:w-auto">
          <h3 class="text-lg font-bold text-gray-800 mb-2">Cari Pejabat</h3>
          <div class="relative">
            <input type="text"
                   id="search-pejabat"
                   placeholder="Cari berdasarkan nama atau NIP..."
                   class="w-full md:w-96 px-4 py-3 pl-12 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            <i class="fas fa-search absolute left-4 top-3.5 text-gray-400"></i>
          </div>
        </div>
        <div class="flex gap-2">
        <a href="{{ route('pejabat') }}"
            class="px-4 py-2 rounded-lg font-medium
            {{ request()->routeIs('pejabat')
                ? 'bg-blue-600 text-white'
                : 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-50' }}">
            1
        </a>

        <a href="{{ route('pejabat-page2') }}"
            class="px-4 py-2 rounded-lg font-medium
            {{ request()->routeIs('pejabat-page2')
                ? 'bg-blue-600 text-white'
                : 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-50' }}">
            2
        </a>

        <a href="{{ route('pejabat-page3') }}"
            class="px-4 py-2 rounded-lg font-medium
            {{ request()->routeIs('pejabat-page3')
                ? 'bg-blue-600 text-white'
                : 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-50' }}">
            3
        </a>

        <a href="{{ route('pejabat-page4') }}"
            class="px-4 py-2 rounded-lg font-medium
            {{ request()->routeIs('pejabat-page4')
                ? 'bg-blue-600 text-white'
                : 'bg-white border border-gray-300 text-gray-700 hover:bg-gray-50' }}">
            4
        </a>
        </div>

      </div>
    </div>


    <!-- Pejabat Grid 3x3 -->
    <div class="mb-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-users text-blue-600"></i>
        Daftar Pejabat 
      </h2>

      <div id="pejabat-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Pejabat 10: Febby Lestari -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="febby lestari">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/febby.jpg') }}"
                       alt="Febby Lestari"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-teal-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Perencana
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Febby Lestari, S.P.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Perencana Ahli Muda</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">198402182011012008</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.P.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 11: Drie Sarwiedi -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="drie sarwiedi">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/drie.jpg') }}"
                       alt="Drie Sarwiedi"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-teal-600 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Perencana Madya
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Drie Sarwiedi S., S.P., M.Si</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Perencana Ahli Madya</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197303142003121005</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.P., M.Si</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 12: Ratu Vivi Silviani -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="ratu vivi">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/ratu.jpg') }}"
                       alt="Ratu Vivi Silviani"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-teal-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Perencana
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Ratu Vivi Silviani, S.T., M.Si.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Perencana Ahli Muda</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197807302007012005</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.T., M.Si.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 13: Lusi Nurbaiti -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="lusi nurbaiti">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/lusi.jpg') }}"
                       alt="Lusi Nurbaiti Badri"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-purple-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Analis
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Lusi Nurbaiti Badri, S.T., M.Si.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Analis Kebijakan Ahli Muda</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197609152002122003</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.T., M.Si.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 14: Oni Hidayati -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="oni hidayati">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/oni.jpg') }}"
                       alt="Oni Hidayati"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-purple-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Analis
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Oni Hidayati, S.Pi., M.Si</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Analis Kebijakan Ahli Muda</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197404282006042018</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.Pi., M.Si</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 15: Inolasari -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="inolasari">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/inolasari.jpg') }}"
                       alt="Inolasari"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-teal-600 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Perencana Madya
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Inolasari, S.T., M.T</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Perencana Ahli Madya</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197207061999032007</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.T., M.T</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 16: Fitri Hidayati -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="fitri hidayati">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/fitri.jpg') }}"
                       alt="Fitri Hidayati"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-teal-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Perencana
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Fitri Hidayati, S.E.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Perencana Ahli Muda</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197512182006042025</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.E.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 17: Ratih Gustiani -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="ratih gustiani">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/ratih.jpg') }}"
                       alt="Ratih Gustiani"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-teal-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Perencana
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Ratih Gustiani, S.Si., MM.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Perencana Ahli Muda</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">198207172010012021</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.Si., MM.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 18: Uvi Mitra Vienny -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="uvi mitra">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/uvi.jpg') }}"
                       alt="Uvi Mitra Vienny"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-teal-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Perencana
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Uvi Mitra Vienny, S.E., Ak., M.E.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Perencana Ahli Muda</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197506292006042000</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.E., Ak., M.E.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- No Results Message -->
      <div id="no-results" class="hidden text-center py-12">
        <div class="bg-white rounded-2xl shadow-lg p-8">
          <i class="fas fa-user-slash text-5xl text-gray-400 mb-4"></i>
          <h3 class="text-xl font-bold text-gray-800 mb-2">Pejabat tidak ditemukan</h3>
          <p class="text-gray-600">Coba gunakan kata kunci pencarian yang berbeda</p>
        </div>
      </div>
    </div>

    <!-- Pagination -->
    <div class="flex justify-center items-center gap-2 mb-12">
      <span class="text-gray-600 mr-4">Halaman:</span>
      <a href="{{ route('pejabat') }}" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50">1</a>
      <a href="{{ route('pejabat-page2') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg font-medium">2</a>
      <a href="{{ route('pejabat-page3') }}" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50">3</a>
      <a href="{{ route('pejabat-page4') }}" class="px-4 py-2 bg-white border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50">4</a>
    </div>

    <!-- Berita Terkini -->
    <div class="bg-white rounded-2xl shadow-lg p-8">
      <div class="flex items-center justify-between mb-8">
        <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-3">
          <i class="fas fa-newspaper text-blue-600"></i>
          Berita Terkini Bapperida
        </h2>
        <a href="#" class="text-blue-600 hover:text-blue-700 font-medium text-sm flex items-center gap-2">
          Lihat Semua <i class="fas fa-arrow-right"></i>
        </a>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        @for($i = 1; $i <= 4; $i++)
          <div class="group border border-gray-200 rounded-xl overflow-hidden hover:border-blue-300 hover:shadow-lg transition-all duration-300">
            <div class="relative overflow-hidden h-48">
              <img src="{{ asset('image/BeritaBaperida'.$i.'.jpeg') }}"
                   class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                   alt="Berita Bapperida {{ $i }}">
              <div class="absolute top-4 left-4">
                <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-semibold">Berita</span>
              </div>
            </div>
            <div class="p-5">
              <div class="text-sm text-gray-500 mb-2 flex items-center gap-2">
                <i class="far fa-calendar"></i>
                15 November 2024
              </div>
              <h3 class="font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                Pengembangan Inovasi Digital Kota Bogor Tahun 2024
              </h3>
              <p class="text-gray-600 text-sm mb-4 line-clamp-2">
                Bapperida meluncurkan platform digital terbaru untuk mendukung pelayanan publik yang lebih efisien.
              </p>
              <a href="#" class="text-blue-600 hover:text-blue-700 font-medium text-sm flex items-center gap-2 group">
                Baca Selengkapnya
                <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
              </a>
            </div>
          </div>
        @endfor
      </div>
    </div>
  </div>

  <!-- Footer (Sama seperti halaman 1) -->
 <!-- Footer -->
  <footer class="bg-gray-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-4">
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
        <!-- Info -->
        <div>
          <div class="flex items-center gap-3 mb-6">
            <img src="{{ asset('image/logokotabogor.png') }}" class="h-12" alt="Kota Bogor">
            <img src="{{ asset('image/logobapperida.png') }}" class="h-12" alt="Bapperida">
          </div>
          <h3 class="font-bold text-xl mb-2">BAPPERIDA Kota Bogor</h3>
          <p class="text-gray-400 mb-4 text-sm">
            Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah Kota Bogor
          </p>
          <div class="space-y-2 text-sm text-gray-400">
            <p><i class="fas fa-map-marker-alt mr-3 text-blue-400"></i>Jl. Kapten Muslihat No.21 - Bogor 16121</p>
            <p><i class="fas fa-phone mr-3 text-blue-400"></i>(0251) 8338052</p>
            <p><i class="fas fa-envelope mr-3 text-blue-400"></i>bapperida@kotabogor.go.id</p>
          </div>
        </div>

        <!-- Statistik Pengunjung -->
        <div>
          <h4 class="text-lg font-bold mb-6">Statistik Pengunjung</h4>
          <div class="space-y-4">
            <div class="bg-gray-800 rounded-lg p-4">
              <div class="text-2xl font-bold text-blue-400 mb-1">548</div>
              <p class="text-sm text-gray-400">Hari Ini</p>
            </div>
            <div class="bg-gray-800 rounded-lg p-4">
              <div class="text-2xl font-bold text-blue-400 mb-1">23,567</div>
              <p class="text-sm text-gray-400">Bulan Ini</p>
            </div>
            <div class="bg-gray-800 rounded-lg p-4">
              <div class="text-2xl font-bold text-blue-400 mb-1">411,161</div>
              <p class="text-sm text-gray-400">Tahun Ini</p>
            </div>
            <div class="bg-gray-800 rounded-lg p-4">
              <div class="text-2xl font-bold text-blue-400 mb-1">900,929</div>
              <p class="text-sm text-gray-400">Total</p>
            </div>
          </div>
        </div>

        <!-- Jam Layanan -->
        <div>
          <h4 class="text-lg font-bold mb-6">Waktu Pelayanan</h4>
          <div class="space-y-3 text-sm text-gray-400">
            <div class="flex justify-between py-2 border-b border-gray-800">
              <span><i class="fas fa-clock mr-2 text-blue-400"></i>Senin - Kamis</span>
              <span class="text-blue-400 font-medium">07.30 - 16.00</span>
            </div>
            <div class="flex justify-between py-2 border-b border-gray-800">
              <span><i class="fas fa-clock mr-2 text-blue-400"></i>Jum'at</span>
              <span class="text-blue-400 font-medium">07.30 - 16.30</span>
            </div>
            <div class="pt-4">
              <p class="text-sm mb-2"><i class="fas fa-coffee mr-2 text-blue-400"></i>Jam Istirahat: 12.00 - 13.00</p>
              <p class="text-xs text-gray-500"><i class="fas fa-mail-bulk mr-2"></i>Layanan surat menyurat: 24 jam</p>
            </div>
          </div>
        </div>

        <!-- Lokasi Kantor -->
        <div>
          <h4 class="text-lg font-bold mb-6">Lokasi Kantor</h4>
          <div class="bg-gray-800 rounded-xl overflow-hidden">
            <iframe src="https://maps.google.com/maps?q=Jalan+Kapten+Muslihat+No.21,+Bogor+16121&output=embed"
                    width="100%"
                    height="100%"
                    frameborder="0"
                    style="border:0"
                    allowfullscreen
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="p-4">
              <a href="https://maps.google.com/?q=Bapperida+Kota+Bogor"
                 target="_blank"
                 class="inline-flex items-center gap-2 text-blue-400 hover:text-blue-300 text-sm font-medium">
                <i class="fas fa-directions"></i>
                <span>Lihat di Google Maps</span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Social Media Links -->
      <div class="flex justify-center gap-6 mb-8">
        <a href="https://www.instagram.com/bapperida.kotabogor" target="_blank" class="bg-gray-800 p-3 rounded-full hover:bg-pink-600 transition-colors">
          <i class="fab fa-instagram text-xl"></i>
        </a>
        <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-blue-600 transition-colors">
          <i class="fab fa-facebook-f text-xl"></i>
        </a>
        <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-blue-400 transition-colors">
          <i class="fab fa-twitter text-xl"></i>
        </a>
        <a href="#" class="bg-gray-800 p-3 rounded-full hover:bg-red-600 transition-colors">
          <i class="fab fa-youtube text-xl"></i>
        </a>
      </div>

      <!-- Copyright -->
      <div class="pt-8 border-t border-gray-800 text-center">
        <p class="text-gray-400 text-sm">© 2024 BAPPERIDA Kota Bogor. Hak Cipta Dilindungi.</p>
        <p class="text-gray-500 text-xs mt-2">Dibangun dengan semangat melayani masyarakat Bogor</p>
      </div>
    </div>
  </footer>

  <!-- Floating Action Button -->
  <div class="fixed bottom-6 right-6 z-40">
    <button onclick="scrollToTop()" class="w-14 h-14 bg-blue-600 text-white rounded-full shadow-2xl hover:bg-blue-700 transition-colors flex items-center justify-center">
      <i class="fas fa-arrow-up text-xl"></i>
    </button>
  </div>

  <script>
    // Mobile Menu Toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });

    // Scroll to top function
    function scrollToTop() {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    }

    // All pejabat data for global search
    const allPejabatData = [
      // Page 1
      { nama: 'rudy mashudi', page: '{{ route("pejabat") }}', pageNum: 1 },
      { nama: 'agnes andriani', page: '{{ route("pejabat") }}', pageNum: 1 },
      { nama: 'naufal isnaeni', page: '{{ route("pejabat") }}', pageNum: 1 },
      { nama: 'sofie linawati', page: '{{ route("pejabat") }}', pageNum: 1 },
      { nama: 'ara wiraswara', page: '{{ route("pejabat") }}', pageNum: 1 },
      { nama: 'irma arlini', page: '{{ route("pejabat") }}', pageNum: 1 },
      { nama: 'sissy lusiyanti', page: '{{ route("pejabat") }}', pageNum: 1 },
      { nama: 'sakti aditya', page: '{{ route("pejabat") }}', pageNum: 1 },
      { nama: 'yanti heryanti', page: '{{ route("pejabat") }}', pageNum: 1 },
      // Page 2
      { nama: 'febby lestari', page: '{{ route("pejabat-page2") }}', pageNum: 2 },
      { nama: 'drie sarwiedi', page: '{{ route("pejabat-page2") }}', pageNum: 2 },
      { nama: 'ratu vivi', page: '{{ route("pejabat-page2") }}', pageNum: 2 },
      { nama: 'lusi nurbaiti', page: '{{ route("pejabat-page2") }}', pageNum: 2 },
      { nama: 'oni hidayati', page: '{{ route("pejabat-page2") }}', pageNum: 2 },
      { nama: 'inolasari', page: '{{ route("pejabat-page2") }}', pageNum: 2 },
      { nama: 'fitri hidayati', page: '{{ route("pejabat-page2") }}', pageNum: 2 },
      { nama: 'ratih gustiani', page: '{{ route("pejabat-page2") }}', pageNum: 2 },
      { nama: 'uvi mitra', page: '{{ route("pejabat-page2") }}', pageNum: 2 },
      // Page 3
      { nama: 'sumaryanto', page: '{{ route("pejabat-page3") }}', pageNum: 3 },
      { nama: 'odih sumirat', page: '{{ route("pejabat-page3") }}', pageNum: 3 },
      { nama: 'azhar ginandjar', page: '{{ route("pejabat-page3") }}', pageNum: 3 },
      { nama: 'ratu desy', page: '{{ route("pejabat-page3") }}', pageNum: 3 },
      { nama: 'yeyen esva', page: '{{ route("pejabat-page3") }}', pageNum: 3 },
      { nama: 'erni solikhati', page: '{{ route("pejabat-page3") }}', pageNum: 3 },
      { nama: 'abdul haris', page: '{{ route("pejabat-page3") }}', pageNum: 3 },
      { nama: 'dadang komarudin', page: '{{ route("pejabat-page3") }}', pageNum: 3 },
      { nama: 'ati fatimah', page: '{{ route("pejabat-page3") }}', pageNum: 3 },
      // Page 4
      { nama: 'dwi udayani', page: '{{ route("pejabat-page4") }}', pageNum: 4 },
      { nama: 'eko setyo', page: '{{ route("pejabat-page4") }}', pageNum: 4 },
      { nama: 'bayu wijoseno', page: '{{ route("pejabat-page4") }}', pageNum: 4 },
      { nama: 'agus munawar', page: '{{ route("pejabat-page4") }}', pageNum: 4 },
      { nama: 'ridwan adithiansyah', page: '{{ route("pejabat-page4") }}', pageNum: 4 }
    ];

    // Search functionality
    const searchInput = document.getElementById('search-pejabat');
    const pejabatCards = document.querySelectorAll('.pejabat-card');
    const noResults = document.getElementById('no-results');

    // Create search results container only if it doesn't exist
    let searchResultsContainer = document.getElementById('search-results');
    if (!searchResultsContainer) {
        searchResultsContainer = document.createElement('div');
        searchResultsContainer.id = 'search-results';
        searchResultsContainer.className = 'mb-8 bg-white rounded-xl shadow-lg p-6';
        searchResultsContainer.innerHTML = '<h3 class="text-lg font-bold text-gray-800 mb-4">Hasil Pencarian Global</h3><div id="global-results"></div>';

        // Insert after search bar, before pejabat grid
        const pejabatContainer = document.getElementById('pejabat-container');
        pejabatContainer.parentElement.insertBefore(searchResultsContainer, pejabatContainer);
    }

    function filterPejabat() {
        const searchTerm = searchInput.value.toLowerCase().trim();

        // Save to localStorage
        localStorage.setItem('pejabatSearchTerm', searchTerm);

        // Filter local cards
        let visibleCount = 0;
        pejabatCards.forEach(card => {
            const nama = card.getAttribute('data-nama') || '';
            const nip = card.querySelector('.font-medium')?.textContent || '';
            const textContent = card.textContent.toLowerCase();

            if (searchTerm === '' ||
                nama.includes(searchTerm) ||
                nip.includes(searchTerm) ||
                textContent.includes(searchTerm)) {
                card.style.display = 'block';
                visibleCount++;
            } else {
                card.style.display = 'none';
            }
        });

        // Global search results
        const globalResults = allPejabatData.filter(pejabat =>
            pejabat.nama.includes(searchTerm) || searchTerm === ''
        );

        // Display global results
        const globalResultsDiv = document.getElementById('global-results');
        if (searchTerm !== '' && globalResults.length > 0) {
            let resultsHTML = '<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">';
            globalResults.forEach(result => {
                const pejabatName = result.nama.split(' ').map(word =>
                    word.charAt(0).toUpperCase() + word.slice(1)
                ).join(' ');
                resultsHTML += `
                    <a href="${result.page}#search-pejabat" class="block p-4 border border-gray-200 rounded-lg hover:bg-blue-50 hover:border-blue-300 transition-colors">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-user-tie text-blue-600"></i>
                            <div>
                                <div class="font-medium text-gray-800">${pejabatName}</div>
                                <div class="text-sm text-gray-500">Halaman ${result.pageNum}</div>
                            </div>
                        </div>
                    </a>
                `;
            });
            resultsHTML += '</div>';
            globalResultsDiv.innerHTML = resultsHTML;
            searchResultsContainer.style.display = 'block';
        } else {
            searchResultsContainer.style.display = 'none';
        }

        // Show/hide no results message
        if (visibleCount === 0 && searchTerm !== '') {
            noResults.classList.remove('hidden');
        } else {
            noResults.classList.add('hidden');
        }
    }

    // Event listener for search
    if (searchInput) {
        searchInput.addEventListener('input', filterPejabat);
    }

    // Load search term from localStorage on page load and check URL hash
    window.addEventListener('DOMContentLoaded', function() {
        const savedSearchTerm = localStorage.getItem('pejabatSearchTerm');
        const hash = window.location.hash;

        if (savedSearchTerm) {
            searchInput.value = savedSearchTerm;
            filterPejabat();
        }

        // If URL has #search-pejabat hash, focus on search input
        if (hash === '#search-pejabat' && searchInput) {
            searchInput.focus();
        }
    });

    // Show/hide scroll to top button
    window.addEventListener('scroll', function() {
      const scrollButton = document.querySelector('[onclick="scrollToTop()"]');
      if (window.scrollY > 300) {
        scrollButton.classList.remove('opacity-0', 'invisible');
        scrollButton.classList.add('opacity-100', 'visible');
      } else {
        scrollButton.classList.remove('opacity-100', 'visible');
        scrollButton.classList.add('opacity-0', 'invisible');
      }
    });

    // Initialize scroll button visibility
    window.dispatchEvent(new Event('scroll'));
  </script>
</body>
</html>
