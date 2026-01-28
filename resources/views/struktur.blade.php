<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Struktur Organisasi BAPPERIDA Kota Bogor</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
          <i class="fas fa-sitemap mr-2"></i>Struktur Organisasi
        </span>
      </nav>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container mx-auto px-4 py-8">
    <!-- Header Section -->
    <div class="mb-8">

        <!-- Judul + Button (Sejajar) -->
        <div class="flex items-start justify-between mb-6">
            <div>
            <h1 class="text-3xl font-bold text-gray-800 mb-2">
                Struktur Organisasi BAPPERIDA
            </h1>
            <p class="text-gray-600">
                Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah Kota Bogor
            </p>
            </div>

            <!-- Button Kembali -->
            <a href="{{ route('profile') }}"
            class="inline-flex items-center gap-2 px-6 py-3
                    bg-blue-600 text-white font-medium rounded-lg
                    hover:bg-blue-700 transition-colors whitespace-nowrap">
            <i class="fas fa-arrow-left"></i>
            <span>Kembali ke Profil</span>
            </a>
        </div>

        <!-- Navigation Tabs (Bawah) -->
        <div class="flex border-b border-gray-200">
            <a href="{{ route('struktur') }}"
            class="px-6 py-4 text-blue-600 font-medium
                    border-b-2 border-blue-600 bg-blue-50">
            <i class="fas fa-sitemap mr-2"></i>
            Struktur Organisasi
            </a>

            <a href="{{ route('pejabat') }}"
            class="px-6 py-4 text-gray-600 hover:text-blue-600
                    font-medium hover:bg-blue-50 transition-colors">
            <i class="fas fa-user-tie mr-2"></i>
            Pejabat Bapperida
            </a>
        </div>

    </div>



    <!-- Struktur Organisasi Image -->
    <div class="bg-white rounded-2xl shadow-lg p-6 mb-8">
      <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 flex items-center gap-3">
          <i class="fas fa-sitemap text-blue-600"></i>
          Struktur Organisasi BAPPERIDA Kota Bogor
        </h2>
        <p class="text-gray-600 mb-4">
          Berikut adalah struktur organisasi Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah (BAPPERIDA) Kota Bogor yang berlaku saat ini.
        </p>
      </div>

      <!-- Image Container -->
      <div class="bg-gray-50 rounded-xl p-4 border border-gray-200">
        <div class="relative overflow-hidden rounded-lg">
          <img src="{{ asset('image/strukturBape.jpg') }}"
               class="w-full h-auto object-contain rounded-lg shadow-md"
               alt="Struktur Organisasi BAPPERIDA Kota Bogor">

          <!-- Zoom Controls -->
          <div class="absolute bottom-4 right-4 flex gap-2">
            <button onclick="zoomIn()" class="bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 transition-colors">
              <i class="fas fa-search-plus text-gray-700"></i>
            </button>
            <button onclick="zoomOut()" class="bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 transition-colors">
              <i class="fas fa-search-minus text-gray-700"></i>
            </button>
            <button onclick="resetZoom()" class="bg-white p-2 rounded-full shadow-lg hover:bg-gray-100 transition-colors">
              <i class="fas fa-expand-arrows-alt text-gray-700"></i>
            </button>
          </div>
        </div>

        <!-- Image Info -->
        <div class="mt-4 p-4 bg-blue-50 rounded-lg">
          <div class="flex items-center gap-3">
            <i class="fas fa-info-circle text-blue-600"></i>
            <div>
              <p class="text-sm text-gray-700">
                <span class="font-medium">Tips:</span> Klik tombol zoom untuk memperbesar gambar struktur organisasi. Gambar dapat di-scroll jika ukurannya melebihi layar.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Informasi Tambahan -->
    <div class="grid md:grid-cols-2 gap-8 mb-8">
      <!-- Bagian Organisasi -->
      <div class="bg-white rounded-2xl shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-3">
          <i class="fas fa-layer-group text-blue-600"></i>
          Bagian-Bagian Organisasi
        </h3>

        <div class="space-y-4">
          <div class="border-l-4 border-blue-500 pl-4 py-2">
            <h4 class="font-bold text-gray-800">Kepala BAPPERIDA</h4>
            <p class="text-sm text-gray-600 mt-1">Memimpin dan mengkoordinasikan seluruh kegiatan BAPPERIDA</p>
          </div>

          <div class="border-l-4 border-blue-400 pl-4 py-2">
            <h4 class="font-bold text-gray-800">Sekretariat</h4>
            <p class="text-sm text-gray-600 mt-1">Bertanggung jawab atas administrasi dan keuangan</p>
          </div>

          <div class="border-l-4 border-blue-300 pl-4 py-2">
            <h4 class="font-bold text-gray-800">Bidang Perencanaan Pembangunan</h4>
            <p class="text-sm text-gray-600 mt-1">Menyusun rencana pembangunan daerah</p>
          </div>

          <div class="border-l-4 border-blue-200 pl-4 py-2">
            <h4 class="font-bold text-gray-800">Bidang Riset dan Inovasi</h4>
            <p class="text-sm text-gray-600 mt-1">Mengembangkan penelitian dan inovasi daerah</p>
          </div>
        </div>
      </div>

      <!-- Tata Hubungan Kerja -->
      <div class="bg-white rounded-2xl shadow-lg p-6">
        <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-3">
          <i class="fas fa-project-diagram text-blue-600"></i>
          Tata Hubungan Kerja
        </h3>

        <div class="space-y-3">
          <div class="flex items-start gap-3">
            <div class="bg-blue-100 text-blue-600 p-2 rounded-lg mt-1">
              <i class="fas fa-arrow-up"></i>
            </div>
            <div>
              <h4 class="font-bold text-gray-800">Koordinasi Vertikal</h4>
              <p class="text-sm text-gray-600">Melaporkan kepada Wali Kota dan berkoordinasi dengan Kementerian terkait</p>
            </div>
          </div>

          <div class="flex items-start gap-3">
            <div class="bg-blue-100 text-blue-600 p-2 rounded-lg mt-1">
              <i class="fas fa-arrows-alt-h"></i>
            </div>
            <div>
              <h4 class="font-bold text-gray-800">Koordinasi Horizontal</h4>
              <p class="text-sm text-gray-600">Bekerja sama dengan OPD (Organisasi Perangkat Daerah) lainnya</p>
            </div>
          </div>

          <div class="flex items-start gap-3">
            <div class="bg-blue-100 text-blue-600 p-2 rounded-lg mt-1">
              <i class="fas fa-users"></i>
            </div>
            <div>
              <h4 class="font-bold text-gray-800">Pelayanan Publik</h4>
              <p class="text-sm text-gray-600">Melayani masyarakat dalam hal perencanaan dan informasi pembangunan</p>
            </div>
          </div>
        </div>
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

    // Zoom functionality for structure image
    const structureImage = document.querySelector('img[alt="Struktur Organisasi BAPPERIDA Kota Bogor"]');
    let currentScale = 1;
    const scaleStep = 0.1;
    const maxScale = 3;
    const minScale = 1;

    function zoomIn() {
      if (currentScale < maxScale) {
        currentScale += scaleStep;
        updateImageScale();
      }
    }

    function zoomOut() {
      if (currentScale > minScale) {
        currentScale -= scaleStep;
        updateImageScale();
      }
    }

    function resetZoom() {
      currentScale = 1;
      updateImageScale();
    }

    function updateImageScale() {
      structureImage.style.transform = `scale(${currentScale})`;
      structureImage.style.transformOrigin = 'center';
    }

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
