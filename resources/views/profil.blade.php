<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profil BAPPERIDA Kota Bogor</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
        <span class="text-blue-600 font-medium">
          <i class="fas fa-building mr-2"></i>Profil Bapperida
        </span>
      </nav>
    </div>
  </div>


  <!-- Main Content -->
  <div class="container mx-auto px-4 py-12">
    <div class="grid lg:grid-cols-3 gap-8">
      <!-- Left Column - Profil Singkat -->
      <div class="lg:col-span-2">
        <!-- Gedung Bapperida -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-lg mb-8">
          <div class="relative">
            <img src="{{ asset('image/bapperida.jpeg') }}"
                 class="w-full h-80 object-cover"
                 alt="Gedung Bapperida Kota Bogor">
            <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-6">
              <h1 class="text-3xl font-bold text-white mb-2">BAPPERIDA Kota Bogor</h1>
              <p class="text-gray-200">
                <i class="fas fa-map-marker-alt mr-2"></i>Jl. Kapten Muslihat No.21 - Bogor 16121
              </p>
            </div>
          </div>

          <div class="p-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
              <i class="fas fa-info-circle text-blue-600"></i>
              Profil Singkat BAPPERIDA
            </h2>

            <div class="space-y-6 text-gray-700 leading-relaxed">
              <p class="text-lg">
                Selamat datang di situs resmi website BAPPERIDA Kota Bogor.
              </p>

              <p>
                Website Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah (BAPPERIDA) Kota Bogor ini memuat Profil dan informasi penting berbagai program dan kegiatan BAPPERIDA Kota Bogor, Kami harap website ini dapat bermanfaat dalam memberikan data dan informasi yang dapat dimanfaatkan oleh masyarakat luas.
              </p>

              <p>
                Pengguna website dapat mengakses dan mengunduh langsung publikasi data dan informasi, peraturan perundangan terkait perencanaan dan pembangunan daerah Kota Bogor sesuai dengan kebutuhan. Kami berusaha untuk menyajikan informasi yang terkini sehingga dapat memenuhi keinginan dan kebutuhan para stakeholder dan masyarakat Kota Bogor, pada khususnya serta masyarakat Indonesia pada umumnya.
              </p>

              <div class="bg-blue-50 border-l-4 border-blue-600 p-6 rounded-r-lg mt-8">
                <p class="text-gray-800 font-medium">
                  <i class="fas fa-quote-left text-blue-600 mr-2"></i>
                  Selanjutnya kami mohon saran dan kritik untuk perbaikan website kearah yang lebih baik.
                  <i class="fas fa-quote-right text-blue-600 ml-2"></i>
                </p>
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

          <div class="grid md:grid-cols-2 gap-6">
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

      <!-- Right Column - Sidebar -->
      <div class="space-y-8">
        <!-- Struktur & Pejabat Buttons -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
          <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <i class="fas fa-sitemap text-blue-600"></i>
            Informasi Kelembagaan
          </h3>

          <div class="space-y-4">
            <a href="{{ route('struktur') }}" class="block group">
              <div class="bg-gradient-to-r from-blue-50 to-cyan-50 border border-blue-200 rounded-xl p-5 hover:border-blue-400 hover:shadow-md transition-all duration-300">
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-4">
                    <div class="bg-blue-100 text-blue-600 p-3 rounded-lg">
                      <i class="fas fa-sitemap text-xl"></i>
                    </div>
                    <div>
                      <h4 class="font-bold text-gray-800 mb-1">Struktur Bapperida</h4>
                      <p class="text-sm text-gray-600">Lihat struktur organisasi lengkap</p>
                    </div>
                  </div>
                  <i class="fas fa-chevron-right text-blue-600 group-hover:translate-x-1 transition-transform"></i>
                </div>
              </div>
            </a>

            <a href="{{ route('pejabat') }}" class="block group">
              <div class="bg-gradient-to-r from-indigo-50 to-purple-50 border border-indigo-200 rounded-xl p-5 hover:border-indigo-400 hover:shadow-md transition-all duration-300">
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-4">
                    <div class="bg-indigo-100 text-indigo-600 p-3 rounded-lg">
                      <i class="fas fa-user-tie text-xl"></i>
                    </div>
                    <div>
                      <h4 class="font-bold text-gray-800 mb-1">Pejabat Bapperida</h4>
                      <p class="text-sm text-gray-600">Profil pejabat struktural</p>
                    </div>
                  </div>
                  <i class="fas fa-chevron-right text-indigo-600 group-hover:translate-x-1 transition-transform"></i>
                </div>
              </div>
            </a>
          </div>
        </div>

        <!-- Visi & Misi -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
          <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <i class="fas fa-bullseye text-blue-600"></i>
            Visi & Misi
          </h3>

          <div class="space-y-6">
            <div class="bg-blue-50 rounded-xl p-5">
              <div class="flex items-center gap-3 mb-4">
                <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                  <i class="fas fa-eye"></i>
                </div>
                <h4 class="font-bold text-gray-800">Visi</h4>
              </div>
              <p class="text-gray-700 italic text-sm">
                "Mewujudkan Kota Bogor sebagai Kota Cerdas, Berkelanjutan, dan Berdaya Saing melalui Perencanaan Pembangunan yang Berbasis Riset dan Inovasi"
              </p>
            </div>

            <div class="bg-indigo-50 rounded-xl p-5">
              <div class="flex items-center gap-3 mb-4">
                <div class="bg-indigo-100 text-indigo-600 p-2 rounded-lg">
                  <i class="fas fa-bullseye"></i>
                </div>
                <h4 class="font-bold text-gray-800">Misi</h4>
              </div>
              <ul class="space-y-3 text-sm text-gray-700">
                <li class="flex items-start gap-2">
                  <i class="fas fa-check text-blue-500 mt-1"></i>
                  <span>Menyusun perencanaan pembangunan daerah</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check text-blue-500 mt-1"></i>
                  <span>Mengembangkan riset dan inovasi daerah</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check text-blue-500 mt-1"></i>
                  <span>Meningkatkan kualitas pelayanan publik</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check text-blue-500 mt-1"></i>
                  <span>Mengoptimalkan pengelolaan sumber daya daerah</span>
                </li>
                <li class="flex items-start gap-2">
                  <i class="fas fa-check text-blue-500 mt-1"></i>
                  <span>Memperkuat kerjasama dan sinergi lintas sektor</span>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Tugas & Fungsi -->
        <div class="bg-white rounded-2xl shadow-lg p-6">
          <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-3">
            <i class="fas fa-tasks text-blue-600"></i>
            Tugas & Fungsi
          </h3>

          <div class="space-y-4">
            <div class="border border-blue-100 rounded-lg p-4 hover:border-blue-300 transition-colors">
              <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2">
                <i class="fas fa-clipboard-list text-blue-500"></i>
                Tugas Pokok
              </h4>
              <p class="text-sm text-gray-600">
                Melaksanakan penyusunan perencanaan, koordinasi, pengendalian, dan evaluasi pembangunan daerah.
              </p>
            </div>

            <div class="border border-indigo-100 rounded-lg p-4 hover:border-indigo-300 transition-colors">
              <h4 class="font-bold text-gray-800 mb-2 flex items-center gap-2">
                <i class="fas fa-cogs text-indigo-500"></i>
                Fungsi Utama
              </h4>
              <ul class="text-sm text-gray-600 space-y-1">
                <li>• Perencanaan pembangunan daerah</li>
                <li>• Pengembangan riset dan inovasi</li>
                <li>• Evaluasi dan monitoring program</li>
                <li>• Koordinasi lintas OPD</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Kontak Cepat -->
        <div class="bg-gradient-to-br from-blue-800 to-blue-900 rounded-2xl shadow-lg p-6 text-white">
          <h3 class="text-xl font-bold mb-6 flex items-center gap-3">
            <i class="fas fa-phone-alt"></i>
            Kontak Cepat
          </h3>

          <div class="space-y-4">
            <div class="flex items-center gap-4">
              <div class="bg-white/20 p-3 rounded-lg">
                <i class="fas fa-map-marker-alt"></i>
              </div>
              <div>
                <p class="text-sm opacity-90">Alamat</p>
                <p class="font-medium">Jl. Kapten Muslihat No.21</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="bg-white/20 p-3 rounded-lg">
                <i class="fas fa-phone"></i>
              </div>
              <div>
                <p class="text-sm opacity-90">Telepon</p>
                <p class="font-medium">(0251) 8338052</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="bg-white/20 p-3 rounded-lg">
                <i class="fas fa-envelope"></i>
              </div>
              <div>
                <p class="text-sm opacity-90">Email</p>
                <p class="font-medium">bapperida@kotabogor.go.id</p>
              </div>
            </div>
          </div>

          <a href="#" class="block mt-6 bg-white text-blue-800 text-center font-medium py-3 rounded-lg hover:bg-gray-100 transition-colors">
            <i class="fas fa-paper-plane mr-2"></i>Hubungi Kami
          </a>
        </div>
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
