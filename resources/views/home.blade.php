<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BAPPERIDA Kota Bogor - Perencanaan Pembangunan Riset Dan Inovasi Daerah</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <!-- Glide.js for carousel -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide/dist/css/glide.core.min.css">
  <!-- Instagram Feed CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instagram-feed/dist/instagramFeed.css">
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation Bar -->
    @include('layouts.nav')

  <!-- Hero Section -->
  <section class="relative overflow-hidden bg-gradient-to-r from-blue-900 to-blue-800">
    <!-- Hero Background -->
    <div class="absolute inset-0 z-0">
      <div class="grid grid-cols-3 h-full">
        @for ($i = 1; $i <= 3; $i++)
          <div class="h-full">
            <img src="{{ asset("image/tampilan$i.jpeg") }}" class="h-full w-full object-cover opacity-20" alt="Background {{ $i }}">
          </div>
        @endfor
      </div>
    </div>

    <!-- Hero Content -->
    <div class="relative z-10 container mx-auto px-4 py-32">
      <div class="max-w-4xl mx-auto text-center">
        <div class="inline-flex items-center space-x-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full mb-8">
          <span class="text-white text-sm font-medium">Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah</span>
        </div>

        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6 leading-tight">
          BAPPERIDA KOTA BOGOR
        </h1>

        <p class="text-xl text-gray-200 mb-10 max-w-2xl mx-auto">
          Perencanaan Pembangunan, Riset dan Inovasi Daerah untuk mewujudkan Kota Bogor yang maju, sejahtera, dan berkelanjutan.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a href="#" class="px-8 py-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors duration-200 flex items-center justify-center gap-2">
            <i class="fas fa-book-open"></i> Dokumen Publik
          </a>
          <a href="#" class="px-8 py-4 bg-white/20 backdrop-blur-sm text-white font-semibold rounded-lg hover:bg-white/30 transition-colors duration-200 flex items-center justify-center gap-2 border border-white/30">
            <i class="fas fa-calendar-alt"></i> Agenda Kegiatan
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Berita Section -->
  <section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-4 py-2 rounded-full mb-4">
          <i class="fas fa-newspaper"></i>
          <span class="text-sm font-semibold">UPDATE TERBARU</span>
        </div>
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Berita & Informasi</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Ikuti perkembangan terkini seputar kegiatan, program, dan pencapaian Bapperida Kota Bogor</p>
      </div>

      <!-- Berita Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
        @for ($i = 1; $i <= 4; $i++)
          <div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
            <div class="relative overflow-hidden h-56">
              <img src="{{ asset("image/BeritaBaperida$i.jpeg") }}"
                   class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                   alt="Berita Bapperida {{ $i }}">
              <div class="absolute top-4 left-4">
                <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-semibold">Berita</span>
              </div>
              <div class="absolute bottom-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg">
              <span class="text-sm text-blue-700">15 Nov 2024</span>
              </div>
            </div>
            <div class="p-6">
              <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-600 transition-colors">
                Pengembangan Inovasi Digital Kota Bogor 2024
              </h3>
              <p class="text-gray-600 mb-4 text-sm line-clamp-2">
                Bapperida meluncurkan platform digital terbaru untuk mendukung pelayanan publik yang lebih efisien.
              </p>
              <div class="flex items-center justify-between">
                <a href="#" class="text-blue-600 font-semibold text-sm flex items-center gap-2 group-hover:gap-3 transition-all">
                  Baca Selengkapnya
                  <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                </a>
                <div class="flex items-center text-gray-500 text-sm">
                  <i class="far fa-eye mr-1"></i>
                  <span>245</span>
                </div>
              </div>
            </div>
          </div>
        @endfor
      </div>

      <!-- View All Button -->
      <div class="text-center">
        <a href="#" class="inline-flex items-center gap-2 px-8 py-3 bg-white text-blue-600 font-semibold rounded-lg border-2 border-blue-600 hover:bg-blue-600 hover:text-white transition-all duration-200">
          <span>Lihat Semua Berita</span>
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <!-- Dokumen Section -->
  <section class="py-20 bg-gradient-to-br from-blue-50 to-indigo-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Dokumen Digital Bapperida</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Akses berbagai dokumen perencanaan, riset, dan publikasi resmi dari Bapperida Kota Bogor</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        @php
          $dokumen = [
            ['icon' => 'fas fa-chart-line', 'title' => 'Perencanaan Pembangunan', 'desc' => 'Dokumen strategis pembangunan daerah'],
            ['icon' => 'fas fa-flask', 'title' => 'Penelitian & Pengembangan', 'desc' => 'Hasil riset inovasi daerah'],
            ['icon' => 'fas fa-file-contract', 'title' => 'Standar Pelayanan BAPPERIDA', 'desc' => 'Panduan layanan publik'],
            ['icon' => 'fas fa-newspaper', 'title' => 'Buletin Pembangunan Daerah', 'desc' => 'Informasi berkala pembangunan'],
            ['icon' => 'fas fa-gavel', 'title' => 'Peraturan', 'desc' => 'Regulasi terkait pembangunan'],
            ['icon' => 'fas fa-bullseye', 'title' => 'Rencana Kinerja BAPPERIDA', 'desc' => 'Target dan capaian kinerja'],
            ['icon' => 'fas fa-newspaper', 'title' => 'Materi Presentasi', 'desc' => 'Slide presentasi kegiatan'],
            ['icon' => 'fas fa-info-circle', 'title' => 'PPID', 'desc' => 'Pejabat Pengelola Informasi dan Dokumentasi'],
          ];
        @endphp

        @foreach ($dokumen as $item)
            <a href="#"
                class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-xl
                        transition-all duration-300 transform hover:-translate-y-1
                        border border-gray-100">

                <div class="flex items-start justify-between mb-4">
                <div class="bg-blue-100 text-blue-600 p-3 rounded-lg">
                    <i class="{{ $item['icon'] }} text-xl"></i>
                </div>
                <i class="fas fa-arrow-right text-gray-400
                            group-hover:text-blue-500
                            group-hover:translate-x-1
                            transition-all"></i>
                </div>

                <h3 class="text-lg font-bold text-gray-800 mb-2
                        group-hover:text-blue-600 transition-colors duration-300">
                {{ $item['title'] }}
                </h3>

                <p class="text-gray-600 text-sm">
                {{ $item['desc'] }}
                </p>
            </a>
        @endforeach
      </div>
    </div>
  </section>

  <!-- Kaleidoskop Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Kaleidoskop Kota Bogor 2020 - 2025</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Video dokumentasi perkembangan dan capaian Kota Bogor dalam 5 tahun terakhir</p>
      </div>

      <div class="max-w-4xl mx-auto">
        <div class="relative rounded-2xl overflow-hidden shadow-2xl">
          <div class="aspect-video">
            <iframe class="w-full h-full" src="https://www.youtube.com/embed/zuXx7mUB0RU"
                    title="Kaleidoskop Kota Bogor 2020-2025"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Infografis Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-4 py-2 rounded-full mb-4">
                <i class="fas fa-chart-pie"></i>
                <span class="text-sm font-semibold">INFOGRAPHIC</span>
            </div>
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Infografis Bapperida</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Visualisasi data kinerja dan informasi penting dalam format yang mudah dipahami</p>
        </div>

        @php
            $infografis = [
                'capaian_indikator_kinerja_utama_2024_bapperida_kota_bogor.jpg',
                'hasil_skm_semester_i_tahun_2025.jpg',
                'hasil_skm_triwulan_i_tahun_2025.jpg',
                'hasil_spak_semester_i_tahun_2025.jpg',
                'hasil_spak_triwulan_i_tahun_2025.jpg',
                'informasi_publik_bapperida_2025_1.jpg',
                'informasi_publik_bapperida_2025_2.jpg',
                'informasi_publik_bapperida_2025_3.jpg',
                'informasi_publik_bapperida_2025.jpg',
                'kenali_dan_cegah_korupsi_di_sekitar_kita_1.jpg',
                'kenali_dan_cegah_korupsi_di_sekitar_kita_2.jpg',
                'kenali_dan_cegah_korupsi_di_sekitar_kita_3.jpg',
                'kenali_dan_cegah_korupsi_di_sekitar_kita_4.jpg',
                'kenali_dan_cegah_korupsi_di_sekitar_kita_5.jpg',
                'kenali_dan_cegah_korupsi_di_sekitar_kita_6.jpg',
                'netralitas_asn_pada_pilkada_serentak_2024.jpeg',
                'sasaran_indikator_kerja_utama_2025_bapperida_kota_bogor.jpg',
                'skm_bapperida_2025.jpg',
                'standar_pelayanan_penyusunan_kerja_perangkat_daerah.jpg'
            ];

            // Split into visible and hidden items
            $visibleInfografis = array_slice($infografis, 0, 10);
            $hiddenInfografis = array_slice($infografis, 10);
            $totalCount = count($infografis);
            $visibleCount = count($visibleInfografis);
            $hiddenCount = count($hiddenInfografis);
        @endphp

        <!-- Infografis Grid (Visible) -->
        <div id="visibleInfografis" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 mb-8">
            @foreach($visibleInfografis as $index => $img)
            <div
                class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer"
                onclick="openInfografisModal('{{ str_replace(['_', '.jpg', '.jpeg'], ' ', $img) }}', '{{ asset('image/'.$img) }}')">

                <img
                src="{{ asset('image/'.$img) }}"
                class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500"
                alt="Infografis {{ $index + 1 }}">

                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                <p class="text-white text-sm font-medium truncate">
                    {{ str_replace(['_', '.jpg', '.jpeg'], ' ', $img) }}
                </p>
                </div>

                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                <i class="fas fa-expand text-gray-700 text-sm"></i>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Hidden Infografis (Initially Hidden) -->
        <div id="hiddenInfografis" class="hidden grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 mb-8">
            @foreach($hiddenInfografis as $index => $img)
            <div
                class="group relative overflow-hidden rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 cursor-pointer"
                onclick="openInfografisModal('{{ str_replace(['_', '.jpg', '.jpeg'], ' ', $img) }}', '{{ asset('image/'.$img) }}')">

                <img
                src="{{ asset('image/'.$img) }}"
                class="w-full h-48 object-cover group-hover:scale-110 transition-transform duration-500"
                alt="Infografis {{ $visibleCount + $index + 1 }}">

                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                <p class="text-white text-sm font-medium truncate">
                    {{ str_replace(['_', '.jpg', '.jpeg'], ' ', $img) }}
                </p>
                </div>

                <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm p-2 rounded-full opacity-0 group-hover:opacity-100 transition-opacity">
                <i class="fas fa-expand text-gray-700 text-sm"></i>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Show More/Less Button -->
        @if($hiddenCount > 0)
        <div class="text-center">
            <button
                id="toggleInfografisBtn"
                onclick="toggleInfografis()"
                class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-full transition-all duration-300 hover:shadow-lg hover:gap-3"
            >
                <span id="toggleText">Lihat Semua Infografis ({{ $totalCount }})</span>
                <i id="toggleIcon" class="fas fa-chevron-down transition-transform duration-300"></i>
            </button>
        </div>
        @endif

        <!-- Modal for Infografis -->
        <div
        id="infografisModal"
        class="fixed inset-0 z-[9999] hidden flex items-center justify-center p-4
                bg-black/40 backdrop-blur-sm">

        <!-- Modal Box -->
        <div
            id="infografisModalBox"
            class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh]
                overflow-hidden shadow-2xl
                transform scale-95 opacity-0 transition-all duration-300">

            <!-- Header -->
            <div class="flex justify-between items-center p-6 border-b">
            <h3 id="infografisModalTitle" class="text-2xl font-bold text-gray-800"></h3>
            <button onclick="closeInfografisModal()" class="text-gray-500 hover:text-red-500">
                <i class="fas fa-times text-2xl"></i>
            </button>
            </div>

            <!-- Content -->
            <div class="p-6 flex justify-center">
            <img
                id="infografisModalImage"
                src=""
                class="max-h-[70vh] w-auto object-contain rounded-lg"
                alt="">
            </div>

        </div>
        </div>
    </div>
</section>

  <!-- Media Bapperida Section -->
<section class="py-20 bg-white">
  <div class="container mx-auto px-4">

    <!-- Heading -->
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">Media Bapperida</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">
        Konten terbaru dari saluran media sosial resmi Bapperida Kota Bogor
      </p>
    </div>

    <!-- Content Grid -->
    <div class="grid lg:grid-cols-3 gap-8">

      <!-- YouTube Video -->
      <div class="lg:col-span-1">
        <div class="bg-gray-50 rounded-2xl p-6 shadow-lg h-full">
          <h3 class="text-2xl font-bold mb-4 text-gray-800 flex items-center gap-2">
            <i class="fab fa-youtube text-red-600"></i>
            Video Terbaru
          </h3>

          <div class="aspect-video rounded-xl overflow-hidden shadow-md">
            <iframe
              class="w-full h-full"
              src="https://www.youtube.com/embed/LUjgokOVOaM"
              title="Video Bapperida Kota Bogor"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen>
            </iframe>
          </div>
        </div>
      </div>

      <!-- Instagram Feed (LightWidget) -->
      <div class="lg:col-span-2">
        <div class="bg-gray-50 rounded-2xl p-6 shadow-lg">
          <h3 class="text-2xl font-bold mb-6 text-gray-800 flex items-center gap-2">
            <i class="fab fa-instagram text-pink-600"></i>
            Instagram Terbaru
          </h3>

          <!-- LightWidget WIDGET -->
          <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
          <iframe src="//lightwidget.com/widgets/6321d654bd7051248b5175c6fd5b21fa.html"
          scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

          <!-- Button -->
          <div class="text-center mt-8">
            <a href="https://www.instagram.com/bapperida.kotabogor"
               target="_blank"
               class="inline-flex items-center gap-2 px-6 py-3 bg-gradient-to-r from-pink-500 to-purple-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg hover:from-pink-600 hover:to-purple-700 transition-all duration-200">
              <i class="fab fa-instagram"></i>
              Lihat Semua di Instagram
            </a>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- LightWidget Script -->
<script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>

  <!-- Kunjungan Section -->
  <section class="py-20 bg-gradient-to-r from-blue-600 to-blue-700">
    <div class="container mx-auto px-4">
      <div class="max-w-3xl mx-auto text-center text-white">
        <i class="fas fa-building text-5xl mb-6 opacity-80"></i>
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Mau berkunjung ke BAPPERIDA Kota Bogor?</h2>
        <p class="text-lg md:text-xl mb-8 opacity-90">
          Kami menerima kunjungan dari luar khusus setiap hari Rabu. Silahkan isi formulir permohonan kunjungan, kemudian tunggu email konfirmasi persetujuan dari kami.
        </p>
        <a href="#" class="inline-flex items-center gap-3 px-8 py-4 bg-white text-blue-700 font-bold rounded-lg hover:bg-gray-100 transition-all duration-200 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
          <i class="fas fa-file-alt"></i>
          <span>Formulir Permohonan Kunjungan</span>
          <i class="fas fa-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

 <!-- Prestasi & Penghargaan -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">Prestasi & Penghargaan Bapperida Kota Bogor</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Penghargaan dan apresiasi atas kinerja dan dedikasi dalam pembangunan daerah</p>
        </div>

        <div class="glide" id="prestasi-carousel">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    @for ($i = 1; $i <= 5; $i++)
                        <li class="glide__slide">
                            <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 cursor-pointer border border-gray-100 mx-2"
                                 onclick="openPrestasiModal('Penghargaan {{ $i }}', '{{ asset("image/penghargaan-$i.jpg") }}', 'Apresiasi atas kinerja Bapperida Kota Bogor tahun 2024')">
                                <!-- Image Container -->
                                <div class="relative overflow-hidden h-64">
                                    <img src="{{ asset("image/penghargaan-$i.jpg") }}"
                                         class="w-full h-full object-cover transition-transform duration-500 hover:scale-110"
                                         alt="Penghargaan {{ $i }}">
                                    <!-- Hover Icon -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                                        <div class="bg-white/90 backdrop-blur-sm p-3 rounded-full">
                                            <i class="fas fa-expand text-gray-700 text-xl"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="p-6">
                                    <div class="flex items-center gap-3 mb-3">
                                        <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                                            <i class="fas fa-trophy"></i>
                                        </div>
                                        <h3 class="text-xl font-bold text-gray-800">Penghargaan {{ $i }}</h3>
                                    </div>
                                    <p class="text-gray-600 text-sm mb-4">
                                        Apresiasi atas kinerja Bapperida Kota Bogor tahun 2024
                                    </p>
                                    <div class="flex items-center justify-between text-sm text-gray-500 pt-4 border-t border-gray-100">
                                        <span class="flex items-center gap-1">
                                            <i class="fas fa-calendar"></i>
                                            <span>2024</span>
                                        </span>
                                        <span class="text-blue-600 font-medium flex items-center gap-1">
                                            <span>Lihat Detail</span>
                                            <i class="fas fa-arrow-right"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endfor
                </ul>
            </div>

            <!-- Arrows - Posisi di luar track -->
            <div class="glide__arrows mt-8 flex justify-center gap-4" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left bg-white shadow-md hover:shadow-lg text-gray-700 hover:text-blue-600 w-12 h-12 rounded-full flex items-center justify-center transition-all duration-200 border border-gray-200 hover:border-blue-300" data-glide-dir="<">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="glide__arrow glide__arrow--right bg-white shadow-md hover:shadow-lg text-gray-700 hover:text-blue-600 w-12 h-12 rounded-full flex items-center justify-center transition-all duration-200 border border-gray-200 hover:border-blue-300" data-glide-dir=">">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Modal for Prestasi & Penghargaan -->
<div id="prestasiModal" class="fixed inset-0 z-[9999] hidden flex items-center justify-center p-4 bg-black/40 backdrop-blur-sm">
    <div id="prestasiModalBox" class="bg-white rounded-2xl max-w-4xl w-full max-h-[90vh] overflow-hidden shadow-2xl transform scale-95 opacity-0 transition-all duration-300">
        <!-- Header -->
        <div class="flex justify-between items-center p-6 border-b">
            <h3 id="prestasiModalTitle" class="text-2xl font-bold text-gray-800"></h3>
            <button onclick="closePrestasiModal()" class="text-gray-500 hover:text-red-500 transition-colors">
                <i class="fas fa-times text-2xl"></i>
            </button>
        </div>

        <!-- Content -->
        <div class="p-6">
            <div class="flex flex-col lg:flex-row gap-6">
                <!-- Image -->
                <div class="lg:w-2/3">
                    <img id="prestasiModalImage" src=""
                         class="w-full h-auto max-h-[60vh] object-contain rounded-lg"
                         alt="">
                </div>

                <!-- Description -->
                <div class="lg:w-1/3">
                    <div class="bg-gray-50 rounded-lg p-6">
                        <h4 class="text-lg font-bold text-gray-800 mb-4">Deskripsi</h4>
                        <p id="prestasiModalDesc" class="text-gray-600 mb-6"></p>
                        <div class="flex items-center text-sm text-gray-500">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            <span>Diterima pada: Tahun 2024</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="px-6 py-4 border-t bg-gray-50">
            <div class="flex justify-end">
                <button onclick="closePrestasiModal()"
                        class="px-6 py-2 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-colors">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

    <style>
    /* Mengatur jarak antar slide */
    #prestasi-carousel .glide__slide {
        padding: 0 8px; /* Jarak horizontal antar card */
    }

    /* Mengatur tinggi track agar tidak nabrak */
    #prestasi-carousel .glide__track {
        padding-bottom: 10px;
    }

    /* Smooth transition untuk arrow buttons */
    .glide__arrow {
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .glide__arrow:hover {
        box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        transform: translateY(-1px);
    }
    </style>

  <!-- Agenda Section -->
  <section class="py-20 bg-white">
    <div class="container mx-auto px-4">
      <div class="text-center mb-12">
        <div class="inline-flex items-center gap-2 bg-blue-100 text-blue-700 px-4 py-2 rounded-full mb-4">
          <i class="fas fa-calendar-alt"></i>
          <span class="text-sm font-semibold">AGENDA TERDEKAT</span>
        </div>
        <h2 class="text-4xl font-bold text-gray-800 mb-4">Agenda Kegiatan</h2>
        <p class="text-gray-600 max-w-2xl mx-auto">Jadwal kegiatan dan acara Bapperida Kota Bogor yang akan datang</p>
      </div>

      <div class="grid md:grid-cols-3 gap-8">
        @php
          // Generate sample agenda dates
          $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
          $months = [
            1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
            5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
            9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
          ];

          $agenda_dates = [];
          for ($i = 0; $i < 3; $i++) {
            $date = date('Y-m-d', strtotime("+{$i} days"));
            $day_num = date('w', strtotime($date));
            $day_name = $days[$day_num];
            $month_num = date('n', strtotime($date));
            $month_name = $months[$month_num];
            $day_date = date('j', strtotime($date));
            $year = date('Y', strtotime($date));

            $agenda_dates[] = [
              'full_date' => "{$day_name}, {$day_date} {$month_name} {$year}",
              'day_name' => $day_name,
              'date_number' => $day_date,
              'month_name' => $month_name,
              'year' => $year,
              'count' => rand(1, 5) // Random number of events for that day
            ];
          }
        @endphp

        @foreach($agenda_dates as $index => $agenda)
          <div class="group bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2">
            <div class="p-8 text-center">
              <!-- Date Badge -->
              <div class="inline-flex flex-col items-center justify-center mb-6">
                <div class="text-4xl font-bold text-blue-600">{{ $agenda['date_number'] }}</div>
                <div class="text-sm text-gray-500">{{ $agenda['month_name'] }} {{ $agenda['year'] }}</div>
              </div>

              <!-- Day Name -->
              <h3 class="text-2xl font-bold text-gray-800 mb-4">{{ $agenda['day_name'] }}</h3>

              <!-- Event Count -->
              <div class="mb-6">
                <div class="inline-flex items-center gap-2 bg-blue-50 text-blue-700 px-4 py-2 rounded-full">
                  <i class="fas fa-calendar-check"></i>
                  <span class="font-semibold">{{ $agenda['count'] }} Agenda</span>
                </div>
              </div>

              <!-- Description -->
              <p class="text-gray-600 mb-6 text-sm">
                Ada {{ $agenda['count'] }} kegiatan yang dijadwalkan pada hari ini
              </p>

              <!-- View Details Button -->
              <a href="#" class="inline-flex items-center justify-center gap-2 w-full py-3 bg-blue-600 text-white font-medium rounded-lg hover:bg-blue-700 transition-all duration-200">
                <i class="fas fa-list-ul"></i>
                <span>Lihat Detail Agenda</span>
              </a>

              <!-- Date Info -->
              <div class="mt-6 pt-4 border-t border-gray-100">
                <p class="text-sm text-gray-500">{{ $agenda['full_date'] }}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <!-- View All Agenda Button -->
      <div class="text-center mt-12">
        <a href="#" class="inline-flex items-center gap-2 px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-all duration-200 shadow-lg hover:shadow-xl">
          <i class="fas fa-calendar-check"></i>
          <span>Lihat Kalender Lengkap</span>
        </a>
      </div>
    </div>
  </section>

  <!-- Tautan Section -->
<section class="py-20 bg-gray-50">
  <div class="container mx-auto px-4">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-gray-800 mb-4">Tautan</h2>
      <p class="text-gray-600 max-w-2xl mx-auto">Lembaga dan instansi mitra Bapperida Kota Bogor</p>
    </div>

    <div class="glide" id="tautan-carousel">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          @php
            $links = [
              1 => 'https://bapperida.kotabogor.go.id/konsultasi',
              2 => 'https://simanja.kotabogor.go.id/login',
              3 => 'https://presensimeeting.kotabogor.go.id/',
              4 => 'https://bogorkota.bps.go.id/id',
              5 => 'https://csr.kotabogor.go.id/',
              6 => 'https://jabar.bps.go.id/id',
              7 => 'https://siapmang.kotabogor.go.id/',
              8 => 'https://data.go.id/home',
              9 => 'https://opendata.jabarprov.go.id/id',
              10 => 'https://opendata.kotabogor.go.id/',
              11 => 'http://simtaru.kotabogor.go.id/',
              12 => 'https://www.bappenas.go.id/id',
              13 => 'https://bappeda.jabarprov.go.id/',
              14 => 'https://kotabogor.go.id/',
              15 => 'https://bapperida.kotabogor.go.id/pengaduan',
              16 => 'https://calendar.google.com/calendar/u/0/embed?height=600&wkst=1&ctz=Asia/Jakarta&bgcolor=%23ffffff&src=YmFwcGVkYS5yZW5sYXBAZ21haWwuY29t&src=NGZ0Y2NrZGNmcGwzM2E2NXNpajhkYjJnMTRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=amZ2OTdjNTNpYXQ0aW52cmkyaWcza2ZqdmtAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=ZWl0dmg1cmFncDc0MGpkNnZqZ21uZ2xoam9AZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=NTYwM3ZmaTljcGxhdWs0bW1wa2R2Y2J0bXNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=a2kxdWZjbmZiMnA3YzRhNmthNHJlbTk3a3NAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=NnU4dGRtZmZqdWpja2lnN3I2bHFmZmZhbjhAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&src=OWFsN3M5anJscTRxZzVrYnBiMjloNTFzcWNAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23A79B8E&color=%23F4511E&color=%23AD1457&color=%2333B679&color=%23F6BF26&color=%233F51B5&color=%23039BE5&color=%230f0f10&pli=1',
              17 => 'https://www.lapor.go.id/',
              18 => 'https://play.google.com/store/apps/details?id=com.bogor.aspirasi'
            ];
          @endphp

          @for ($i = 1; $i <= 18; $i++)
            <li class="glide__slide">
              <a href="{{ $links[$i] }}"
                 target="_blank"
                 rel="noopener noreferrer"
                 class="block bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 h-32 flex items-center justify-center hover:bg-gray-50">
                <img src="{{ asset('image/Tautan'.$i.'.png') }}"
                     class="max-h-16 max-w-full object-contain"
                     alt="Tautan {{ $i }}">
              </a>
            </li>
          @endfor
        </ul>
      </div>
    </div>
  </div>
</section>

  <!-- Footer -->
    @include('layouts.footer')

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
  <!-- Instagram Feed JS -->
  <script src="https://cdn.jsdelivr.net/npm/instagram-feed/dist/instagramFeed.min.js"></script>
  <script>
    // Mobile Menu Toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });

    // Infografis Modal Functions
    function openInfografisModal(title, image) {
      const modal = document.getElementById('infografisModal');
      const modalBox = document.getElementById('infografisModalBox');

      document.getElementById('infografisModalTitle').textContent = title;
      document.getElementById('infografisModalImage').src = image;
      document.getElementById('infografisModalImage').alt = title;

      modal.classList.remove('hidden');
      document.body.style.overflow = 'hidden';

      setTimeout(() => {
        modalBox.classList.remove('scale-95', 'opacity-0');
        modalBox.classList.add('scale-100', 'opacity-100');
      }, 10);
    }

    function closeInfografisModal() {
      const modal = document.getElementById('infografisModal');
      const modalBox = document.getElementById('infografisModalBox');

      modalBox.classList.remove('scale-100', 'opacity-100');
      modalBox.classList.add('scale-95', 'opacity-0');

      setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
      }, 300);
    }

    // Prestasi Modal Functions
    function openPrestasiModal(title, image, desc) {
      const modal = document.getElementById('prestasiModal');
      const modalBox = document.getElementById('prestasiModalBox');

      document.getElementById('prestasiModalTitle').textContent = title;
      document.getElementById('prestasiModalImage').src = image;
      document.getElementById('prestasiModalImage').alt = title;
      document.getElementById('prestasiModalDesc').textContent = desc;

      modal.classList.remove('hidden');
      document.body.style.overflow = 'hidden';

      setTimeout(() => {
        modalBox.classList.remove('scale-95', 'opacity-0');
        modalBox.classList.add('scale-100', 'opacity-100');
      }, 10);
    }

    function closePrestasiModal() {
      const modal = document.getElementById('prestasiModal');
      const modalBox = document.getElementById('prestasiModalBox');

      modalBox.classList.remove('scale-100', 'opacity-100');
      modalBox.classList.add('scale-95', 'opacity-0');

      setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
      }, 300);
    }

    // Toggle show more/less function for Infografis
    function toggleInfografis() {
      const hiddenSection = document.getElementById('hiddenInfografis');
      const toggleBtn = document.getElementById('toggleInfografisBtn');
      const toggleText = document.getElementById('toggleText');
      const toggleIcon = document.getElementById('toggleIcon');

      const isHidden = hiddenSection.classList.contains('hidden');

      if (isHidden) {
        // Show all
        hiddenSection.classList.remove('hidden');
        hiddenSection.classList.add('grid');
        toggleText.textContent = 'Lihat Lebih Sedikit';
        toggleIcon.classList.remove('fa-chevron-down');
        toggleIcon.classList.add('fa-chevron-up');

        // Smooth scroll to the bottom of newly shown content
        setTimeout(() => {
          hiddenSection.scrollIntoView({
            behavior: 'smooth',
            block: 'nearest'
          });
        }, 300);
      } else {
        // Show only first 10
        hiddenSection.classList.add('hidden');
        hiddenSection.classList.remove('grid');
        toggleText.textContent = 'Lihat Semua Infografis ({{ $totalCount }})';
        toggleIcon.classList.remove('fa-chevron-up');
        toggleIcon.classList.add('fa-chevron-down');

        // Scroll back to the button position
        toggleBtn.scrollIntoView({
          behavior: 'smooth',
          block: 'center'
        });
      }
    }

    // Close modals when clicking outside
    document.getElementById('infografisModal').addEventListener('click', function(e) {
      if (e.target.id === 'infografisModal') {
        closeInfografisModal();
      }
    });

    document.getElementById('prestasiModal').addEventListener('click', function(e) {
      if (e.target.id === 'prestasiModal') {
        closePrestasiModal();
      }
    });

    // Close modals with Escape key
    document.addEventListener('keydown', function(e) {
      if (e.key === 'Escape') {
        if (!document.getElementById('infografisModal').classList.contains('hidden')) {
          closeInfografisModal();
        }
        if (!document.getElementById('prestasiModal').classList.contains('hidden')) {
          closePrestasiModal();
        }
      }
    });

    // Initialize Glide.js for Prestasi Carousel
    new Glide('#prestasi-carousel', {
      type: 'carousel',
      perView: 3,
      gap: 32,
      breakpoints: {
        1024: { perView: 2 },
        768: { perView: 1 }
      }
    }).mount();

    // Initialize Glide.js for Tautan Carousel
    new Glide('#tautan-carousel', {
      type: 'carousel',
      perView: 6,
      gap: 24,
      autoplay: 3000,
      hoverpause: true,
      breakpoints: {
        1280: { perView: 5 },
        1024: { perView: 4 },
        768: { perView: 3 },
        640: { perView: 2 }
      }
    }).mount();

    // Initialize Instagram Feed
    new InstagramFeed({
      'username': 'bapperida.kotabogor',
      'container': document.getElementById("instagram-feed"),
      'display_profile': false,
      'display_biography': false,
      'display_gallery': true,
      'display_captions': false,
      'callback': null,
      'styling': true,
      'items': 6,
      'items_per_row': 3,
      'margin': 0.5,
      'image_size': 320
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });
  </script>

  <style>
    /* Smooth animation for the hidden section */
    #hiddenInfografis {
      animation: fadeIn 0.5s ease-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Modal animations */
    #infografisModalBox, #prestasiModalBox {
      transform-origin: center;
    }
  </style>
</body>
</html>
