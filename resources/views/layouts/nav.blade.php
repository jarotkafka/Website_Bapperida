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
            <a href="{{ route('dokumen-perencanaan') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 border-b border-gray-100">
              Dokumen Perencanaan
            </a>
            <a href="{{ route('dokumen-litbang') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
              Dokumen Litbang
            </a>
          </div>
        </div>

        <a href="{{ route('ppid') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
         PPID
        </a>
        <a href="{{ route('agenda') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
          Agenda
        </a>
        <a href="{{ route('galeri-kegiatan') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
          Galeri Kegiatan
        </a>
        <a href="{{ route('kontak') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-colors duration-200">
          Kontak
        </a>

        <!-- Permohonan Dropdown -->
        <div class="relative group">
          <button class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-blue-600 flex items-center gap-1">
           Permohonan <i class="fas fa-chevron-down text-xs"></i>
          </button>
          <div class="absolute left-0 mt-2 w-48 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 border border-gray-100">
            <a href="{{ route('permohonan-informasi') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600 border-b border-gray-100">
              Permohonan Informasi
            </a>
            <a href="{{ route('permohonan-keberatan') }}" class="block px-4 py-3 text-sm text-gray-700 hover:bg-blue-50 hover:text-blue-600">
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
      <a href="{{ route('dokumen-perencanaan') }}" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
        Dokumen Perencanaan
      </a>
      <a href="{{ route('dokumen-litbang') }}" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
        Dokumen Litbang
      </a>
      <a href="{{ route('ppid') }}" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
        PPID
      </a>
      <a href="{{ route('agenda') }}" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
        Agenda
      </a>
      <a href="{{ route('galeri-kegiatan') }}" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
        Galeri Kegiatan
      </a>
      <a href="{{ route('kontak') }}" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
        Kontak
      </a>
      <a href="{{ route('permohonan-informasi') }}" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
        Permohonan Informasi
      </a>
      <a href="{{ route('permohonan-keberatan') }}" class="block py-3 px-4 text-gray-700 hover:bg-blue-50 rounded-lg">
        Permohonan Keberatan
      </a>
    </div>
  </div>
</nav>

<script>
  // Mobile Menu Toggle
  document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
  });
</script>
