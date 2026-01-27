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
