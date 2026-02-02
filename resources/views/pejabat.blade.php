<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pejabat BAPPERIDA Kota Bogor - Halaman 1</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Additional styles for pagination */
    .pagination-btn {
      min-width: 44px;
      height: 44px;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      transition: all 0.3s ease;
    }

    .pagination-btn:hover:not(.active) {
      transform: translateY(-2px);
    }

    .pagination-btn.active {
      box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
    }

    /* Animation for page transition */
    .pejabat-page {
      animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(10px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation Bar -->
    @include('layouts.nav')

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
          <i class="fas fa-user-tie mr-2"></i>Pejabat Bapperida - Halaman 1
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

    <!-- Search and Filter -->
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
        <div class="flex items-center gap-2">
          <span class="text-gray-600 text-sm font-medium">Halaman:</span>
          <div class="flex gap-2">
            <button class="pagination-btn px-4 py-2 rounded-lg font-medium bg-blue-600 text-white active" data-page="1">
              1
            </button>
            <button class="pagination-btn px-4 py-2 rounded-lg font-medium bg-white border border-gray-300 text-gray-700 hover:bg-gray-50" data-page="2">
              2
            </button>
            <button class="pagination-btn px-4 py-2 rounded-lg font-medium bg-white border border-gray-300 text-gray-700 hover:bg-gray-50" data-page="3">
              3
            </button>
          </div>
        </div>
      </div>

      <!-- Results Counter -->
      <div id="results-counter" class="mt-4 text-sm text-gray-600 hidden">
        Menampilkan <span id="start-count">0</span> - <span id="end-count">0</span> dari <span id="total-count">0</span> pejabat
      </div>
    </div>

    <!-- Pejabat Grid Container -->
    <div class="mb-8">
      <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
        <i class="fas fa-users text-blue-600"></i>
        Daftar Pejabat - <span id="page-title">Halaman 1</span>
      </h2>

      <!-- Page 1 Content -->
      <div id="page-1" class="pejabat-page grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Pejabat 1-9 di Halaman 1 -->
        <!-- Pejabat 1: Rudy Mashudi -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="rudy mashudi">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/rudy.jpg') }}"
                       alt="Rudy Mashudi"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-blue-600 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Kepala Badan
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Rudy Mashudi, S.T., M.P.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Kepala BAPPERIDA</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197707062006041018</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.T., M.P.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 2: Agnes Andriani -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="agnes andriani">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/agnes.jpg') }}"
                       alt="Agnes Andriani"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Sekretaris
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Agnes Andriani Kartika Sari, S.Hut., M.T., M.Sc.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Sekretaris BAPPERIDA</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197408141999032008</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.Hut., M.T., M.Sc.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 3: Naufal Isnaeni -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="naufal isnaeni">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/naufal.jpg') }}"
                       alt="Naufal Isnaeni"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-blue-400 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Kepala Bidang
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Naufal Isnaeni, S.Si., M.T.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Kepala Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197410212006041009</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.Si., M.T.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 4: Sofie Linawati -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="sofie linawati">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/sofie.jpg') }}"
                       alt="Sofie Linawati"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-blue-400 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Kepala Bidang
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Sofie Linawati, S.T., M.M.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Kepala Bidang Perekonomian, Sumber Daya Alam, Infrastruktur dan Kewilayahan</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197411232006042012</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.T., M.M.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 5: Ara Wiraswara -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="ara wiraswara">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/ara.jpg') }}"
                       alt="Ara Wiraswara"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-blue-400 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Kepala Bidang
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Ara Wiraswara, S.E.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Kepala Bidang Pemerintahan dan Pembangunan Manusia</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">198110022009021002</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.E.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 6: Irma Arlini Dewi -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="irma arlini">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/irma.jpg') }}"
                       alt="Irma Arlini Dewi"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-blue-400 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Kepala Bidang
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Irma Arlini Dewi, S.T.P., M.Sc.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Kepala Bidang Penelitian dan Pengembangan</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197405021999012001</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.T.P., M.Sc.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 7: Sissy Lusiyanti -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="sissy lusiyanti">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/sissy.jpg') }}"
                       alt="Sissy Lusiyanti"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-indigo-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Kasubag
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Sissy Lusiyanti Saptalia, S.E., M.SE.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Kasubag Umum dan Kepegawaian</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">197209091999012001</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.E., M.SE.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 8: Sakti Aditya -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="sakti aditya">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/sakti.jpg') }}"
                       alt="Sakti Aditya"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-teal-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Perencana
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Sakti Aditya, S.H., M.M.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Perencana Ahli Muda</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">198209302011011001</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.H., M.M.</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Pejabat 9: Yanti Heryanti -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="yanti heryanti">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <img src="{{ asset('image/yanti.jpg') }}"
                       alt="Yanti Heryanti"
                       class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-purple-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Analis
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Yanti Heryanti, S.E., M.M.</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Analis Keuangan Pusat dan Daerah Ahli Muda</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">196910051996032000</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">S.E., M.M.</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Page 2 Content -->
      <div id="page-2" class="pejabat-page hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Pejabat 10-18 di Halaman 2 -->
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

      <!-- Page 3 Content -->
      <div id="page-3" class="pejabat-page hidden grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Pejabat 19-27 di Halaman 3 -->
        <!-- Pejabat 19: Sumaryanto -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="sumaryanto">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                    <i class="fas fa-user text-gray-400 text-4xl"></i>
                  </div>
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-gray-600 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Staf
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Sumaryanto</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Staf Administrasi</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">-</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">-</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Anda bisa menambahkan pejabat 20-27 di sini dengan format yang sama -->
        <!-- Contoh: Pejabat 20 -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="odih sumirat">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                    <i class="fas fa-user text-gray-400 text-4xl"></i>
                  </div>
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-gray-600 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Staf
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Odih Sumirat</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Staf Administrasi</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">-</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">-</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Contoh: Pejabat 21 -->
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="azhar ginandjar">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                    <i class="fas fa-user text-gray-400 text-4xl"></i>
                  </div>
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-teal-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Perencana
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Azhar Ginandjar</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Perencana Ahli Muda</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">-</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">-</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Anda bisa menambahkan pejabat lain hingga 27 -->
        <!-- Untuk sementara, kita isi dengan placeholder -->
        @for($i = 22; $i <= 27; $i++)
        <div class="pejabat-card bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300"
             data-nama="pejabat {{ $i }}">
          <div class="p-5">
            <div class="flex flex-col items-center text-center mb-4">
              <div class="relative mb-3">
                <div class="w-28 h-28 rounded-full overflow-hidden border-4 border-blue-100 mx-auto">
                  <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                    <i class="fas fa-user text-gray-400 text-4xl"></i>
                  </div>
                </div>
                <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2">
                  <span class="bg-gray-500 text-white px-2 py-1 rounded-full text-xs font-semibold whitespace-nowrap">
                    Staf
                  </span>
                </div>
              </div>
              <h3 class="text-lg font-bold text-gray-800 leading-tight">Pejabat {{ $i }}</h3>
              <p class="text-blue-600 font-medium text-sm mt-1">Posisi Belum Ditentukan</p>
            </div>

            <div class="space-y-2 text-sm">
              <div class="flex items-center gap-2">
                <i class="fas fa-id-card text-blue-500 text-xs"></i>
                <span class="text-gray-700">NIP: <span class="font-medium">-</span></span>
              </div>
              <div class="flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-500 text-xs"></i>
                <span class="text-gray-700">-</span>
              </div>
            </div>
          </div>
        </div>
        @endfor
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

    <!-- Pagination Footer -->
    <div class="flex flex-col sm:flex-row justify-between items-center gap-4 mb-12">
      <div class="text-sm text-gray-600">
        Menampilkan <span id="current-page">1</span> dari <span id="total-pages">3</span> halaman
      </div>
      <div class="flex gap-2">
        <button id="prev-page" class="pagination-btn px-4 py-2 rounded-lg font-medium bg-white border border-gray-300 text-gray-700 hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
          <i class="fas fa-chevron-left mr-2"></i>Sebelumnya
        </button>
        <button id="next-page" class="pagination-btn px-4 py-2 rounded-lg font-medium bg-white border border-gray-300 text-gray-700 hover:bg-gray-50">
          Selanjutnya<i class="fas fa-chevron-right ml-2"></i>
        </button>
      </div>
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

  <!-- Footer -->
    @include('layouts.footer')

  <!-- Floating Action Button -->
  <div class="fixed bottom-6 right-6 z-40">
    <button onclick="scrollToTop()" class="w-14 h-14 bg-blue-600 text-white rounded-full shadow-2xl hover:bg-blue-700 transition-colors flex items-center justify-center">
      <i class="fas fa-arrow-up text-xl"></i>
    </button>
  </div>

  <script>
    // Pagination Configuration
    const TOTAL_PAGES = 3;
    const ITEMS_PER_PAGE = 9;
    let currentPage = 1;

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

    // Pagination Functions
    function showPage(page) {
      // Hide all pages
      for (let i = 1; i <= TOTAL_PAGES; i++) {
        const pageElement = document.getElementById(`page-${i}`);
        if (pageElement) {
          pageElement.classList.add('hidden');
        }
      }

      // Show selected page
      const selectedPage = document.getElementById(`page-${page}`);
      if (selectedPage) {
        selectedPage.classList.remove('hidden');
      }

      // Update page title
      document.getElementById('page-title').textContent = `Halaman ${page}`;
      document.getElementById('current-page').textContent = page;

      // Update URL without reloading
      const url = new URL(window.location);
      url.searchParams.set('page', page);
      window.history.pushState({page: page}, '', url);

      // Update breadcrumb
      updateBreadcrumb(page);

      // Update pagination buttons
      updatePaginationButtons(page);

      // Update results counter
      updateResultsCounter(page);
    }

    function updatePaginationButtons(page) {
      // Update page number buttons
      document.querySelectorAll('.pagination-btn').forEach(btn => {
        const btnPage = parseInt(btn.getAttribute('data-page'));
        if (btnPage === page) {
          btn.classList.add('active', 'bg-blue-600', 'text-white');
          btn.classList.remove('bg-white', 'border', 'border-gray-300', 'text-gray-700');
        } else {
          btn.classList.remove('active', 'bg-blue-600', 'text-white');
          btn.classList.add('bg-white', 'border', 'border-gray-300', 'text-gray-700');
        }
      });

      // Update prev/next buttons
      const prevBtn = document.getElementById('prev-page');
      const nextBtn = document.getElementById('next-page');

      prevBtn.disabled = page === 1;
      nextBtn.disabled = page === TOTAL_PAGES;

      // Update prev/next button styles
      if (page === 1) {
        prevBtn.classList.add('opacity-50', 'cursor-not-allowed');
      } else {
        prevBtn.classList.remove('opacity-50', 'cursor-not-allowed');
      }

      if (page === TOTAL_PAGES) {
        nextBtn.classList.add('opacity-50', 'cursor-not-allowed');
      } else {
        nextBtn.classList.remove('opacity-50', 'cursor-not-allowed');
      }
    }

    function updateResultsCounter(page) {
      const start = (page - 1) * ITEMS_PER_PAGE + 1;
      let end = page * ITEMS_PER_PAGE;
      const totalItems = document.querySelectorAll('.pejabat-card').length;

      // Adjust end if it exceeds total items
      if (end > totalItems) {
        end = totalItems;
      }

      document.getElementById('start-count').textContent = start;
      document.getElementById('end-count').textContent = end;
      document.getElementById('total-count').textContent = totalItems;

      // Show counter if not in search mode
      const searchTerm = document.getElementById('search-pejabat').value.trim();
      if (!searchTerm) {
        document.getElementById('results-counter').classList.remove('hidden');
      }
    }

    function updateBreadcrumb(page) {
      const breadcrumb = document.querySelector('.breadcrumb span:last-child');
      if (breadcrumb) {
        breadcrumb.textContent = `Pejabat Bapperida - Halaman ${page}`;
      }
    }

    // Event Listeners for Pagination
    document.querySelectorAll('.pagination-btn').forEach(btn => {
      btn.addEventListener('click', function() {
        const page = parseInt(this.getAttribute('data-page'));
        if (page && page !== currentPage) {
          currentPage = page;
          showPage(page);

          // Scroll to top of pejabat section smoothly
          document.querySelector('.mb-8').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    document.getElementById('prev-page').addEventListener('click', function() {
      if (currentPage > 1) {
        currentPage--;
        showPage(currentPage);

        // Scroll to top of pejabat section smoothly
        document.querySelector('.mb-8').scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });

    document.getElementById('next-page').addEventListener('click', function() {
      if (currentPage < TOTAL_PAGES) {
        currentPage++;
        showPage(currentPage);

        // Scroll to top of pejabat section smoothly
        document.querySelector('.mb-8').scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });

    // Initialize with page from URL or default to 1
    function initializePage() {
      const urlParams = new URLSearchParams(window.location.search);
      const pageParam = parseInt(urlParams.get('page'));
      if (pageParam && pageParam >= 1 && pageParam <= TOTAL_PAGES) {
        currentPage = pageParam;
      }
      showPage(currentPage);
    }

    // Search functionality
    const searchInput = document.getElementById('search-pejabat');
    const pejabatCards = document.querySelectorAll('.pejabat-card');
    const noResults = document.getElementById('no-results');
    const pageContainers = ['page-1', 'page-2', 'page-3'];

    function filterPejabat() {
      const searchTerm = searchInput.value.toLowerCase().trim();
      const resultsCounter = document.getElementById('results-counter');

      if (searchTerm) {
        // Hide results counter in search mode
        resultsCounter.classList.add('hidden');

        // Hide all pages and show search results
        pageContainers.forEach(pageId => {
          document.getElementById(pageId).classList.add('hidden');
        });

        // Show all cards that match search
        let visibleCount = 0;
        pejabatCards.forEach(card => {
          const nama = card.getAttribute('data-nama') || '';
          const nipElement = card.querySelector('.font-medium');
          const nip = nipElement ? nipElement.textContent : '';
          const textContent = card.textContent.toLowerCase();

          if (nama.includes(searchTerm) ||
              nip.includes(searchTerm) ||
              textContent.includes(searchTerm)) {
            card.style.display = 'block';
            visibleCount++;
          } else {
            card.style.display = 'none';
          }
        });

        // Show/hide no results message
        if (visibleCount === 0) {
          noResults.classList.remove('hidden');
          // Show page 1 container for the no results message
          document.getElementById('page-1').classList.remove('hidden');
        } else {
          noResults.classList.add('hidden');
          // Show page 1 container for search results
          document.getElementById('page-1').classList.remove('hidden');
        }
      } else {
        // Show results counter when not searching
        resultsCounter.classList.remove('hidden');

        // Return to normal pagination view
        showPage(currentPage);
        noResults.classList.add('hidden');

        // Reset card display
        pejabatCards.forEach(card => {
          card.style.display = 'block';
        });
      }
    }

    // Event listener for search
    if (searchInput) {
      searchInput.addEventListener('input', filterPejabat);
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
      initializePage();

      // Check URL hash for search focus
      const hash = window.location.hash;
      if (hash === '#search-pejabat' && searchInput) {
        searchInput.focus();
      }
    });

    // Handle browser back/forward buttons
    window.addEventListener('popstate', function(event) {
      const urlParams = new URLSearchParams(window.location.search);
      const pageParam = parseInt(urlParams.get('page'));
      if (pageParam && pageParam >= 1 && pageParam <= TOTAL_PAGES) {
        currentPage = pageParam;
        showPage(currentPage);
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
