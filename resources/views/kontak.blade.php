<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontak - BAPPERIDA Kota Bogor</title>
  @vite(['resources/css/app.css','resources/js/app.js'])
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation Bar -->
    @include('layouts.nav')

  <!-- HEADER SECTION -->
<section class="relative overflow-hidden bg-gradient-to-r from-blue-900 to-blue-800">
    <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE2YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00em0wIDI0YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00ek0xMiAxNmMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHptMCAyNGMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLzc5LTQtNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative">
    <div class="max-w-4xl mx-auto">
        <!-- Main heading -->
        <div class="mb-12">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">
                Kontak
                <span class="relative">
                    <span class="text-blue-200">BAPPERIDA</span>
                    <div class="absolute -bottom-2 left-0 w-full h-1 bg-gradient-to-r from-blue-400 to-blue-200 rounded-full"></div>
                </span>
            </h1>
        </div>

        <!-- Content dengan grid -->
        <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-blue-400/30 transition-all duration-300">
                <div class="text-blue-300 mb-4">
                    <i class="fas fa-comments text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Aspirasi & Saran</h3>
                <p class="text-blue-100 text-sm">
                    Sampaikan ide dan masukan untuk kemajuan pembangunan Kota Bogor.
                </p>
            </div>

            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-blue-400/30 transition-all duration-300">
                <div class="text-blue-300 mb-4">
                    <i class="fas fa-exclamation-circle text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Pengaduan</h3>
                <p class="text-blue-100 text-sm">
                    Laporkan permasalahan yang perlu perhatian dan penanganan khusus.
                </p>
            </div>

            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-8 border border-white/10 hover:border-blue-400/30 transition-all duration-300">
                <div class="text-blue-300 mb-4">
                    <i class="fas fa-info-circle text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold text-white mb-3">Informasi</h3>
                <p class="text-blue-100 text-sm">
                    Dapatkan informasi terkini tentang program dan kegiatan BAPPERIDA.
                </p>
            </div>
        </div>
    </div>
</div>
</section>

<!-- CONTACT CONTENT -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
    <div class="grid lg:grid-cols-5 gap-12">

        <!-- LEFT COLUMN - MAP & INFO -->
        <div class="lg:col-span-2 space-y-8">

            <!-- Map -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                <div class="h-72 relative">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.409486193128!2d106.79020899999999!3d-6.5961648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7191348cb%3A0xa9a193fe3cb7234d!2sBogor%20City%20Government%20BAPPEDA!5e0!3m2!1sen!2sid!4v1734577200000!5m2!1sen!2sid"
                        width="100%"
                        height="100%"
                        frameborder="0"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- Contact Info Cards -->
            <div class="space-y-4">

                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center shrink-0 shadow-md">
                            <i class="fas fa-map-marker-alt text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 mb-1">Alamat Kantor</h3>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Jl. Kapten Muslihat No.21<br>
                                Bogor 16121, Jawa Barat<br>
                                Indonesia
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center shrink-0 shadow-md">
                            <i class="fas fa-envelope text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 mb-1">Email</h3>
                            <a href="mailto:bapperida@kotabogor.go.id" class="text-sm text-blue-600 hover:text-blue-700 font-medium transition-colors">
                                bapperida@kotabogor.go.id
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-lg p-6 border border-gray-200 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-500 rounded-xl flex items-center justify-center shrink-0 shadow-md">
                            <i class="fas fa-phone-alt text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 mb-1">Telepon</h3>
                            <a href="tel:02518338052" class="text-sm text-blue-600 hover:text-blue-700 font-medium transition-colors">
                                0251-8338052
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-blue-50 rounded-xl shadow-lg p-6 border border-blue-200 hover:shadow-xl transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center shrink-0 shadow-md">
                            <i class="fas fa-clock text-white text-lg"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-gray-800 mb-2">Waktu Pelayanan</h3>
                            <div class="space-y-1.5 text-sm text-gray-700">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Senin - Kamis</span>
                                    <span class="font-medium text-blue-700">07:30 - 16:00</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Jumat</span>
                                    <span class="font-medium text-blue-700">07:30 - 16:30</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Jam Istirahat</span>
                                    <span class="font-medium text-blue-700">12:00 - 13:00</span>
                                </div>
                            </div>
                            <p class="text-xs text-gray-600 mt-3 bg-white/70 rounded-lg p-2">
                                <i class="fas fa-info-circle text-blue-500 mr-1"></i>
                                Pada jam istirahat, layanan konsultasi tetap buka. Anda akan tetap dilayani oleh petugas piket.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- RIGHT COLUMN - FORM -->
        <div class="lg:col-span-3">
            <div class="bg-white rounded-2xl shadow-xl p-8 lg:p-10 border border-gray-200">

                <div class="mb-8">
                    <h2 class="text-2xl font-bold text-gray-800 mb-2">Kritik, Saran & Pengaduan</h2>
                    <p class="text-gray-600">Sampaikan masukan Anda untuk membantu kami meningkatkan pelayanan</p>
                </div>

                <form class="space-y-6">

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Lengkap <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                placeholder="Masukkan nama lengkap"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-gray-50 focus:bg-white"
                            >
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Email <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="email"
                                placeholder="nama@email.com"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-gray-50 focus:bg-white"
                            >
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Nomor Telepon
                        </label>
                        <input
                            type="tel"
                            placeholder="08xx xxxx xxxx"
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-gray-50 focus:bg-white"
                        >
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Kategori <span class="text-red-500">*</span>
                        </label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-gray-50 focus:bg-white">
                            <option value="">Pilih kategori</option>
                            <option value="kritik">Kritik</option>
                            <option value="saran">Saran</option>
                            <option value="pengaduan">Pengaduan</option>
                            <option value="informasi">Permintaan Informasi</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Pesan <span class="text-red-500">*</span>
                        </label>
                        <textarea
                            rows="6"
                            placeholder="Tuliskan pesan Anda dengan jelas dan detail..."
                            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all resize-none bg-gray-50 focus:bg-white"
                        ></textarea>
                        <p class="text-xs text-gray-500 mt-2">Minimum 20 karakter</p>
                    </div>

                    <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                        <div class="flex gap-3">
                            <i class="fas fa-info-circle text-blue-600 text-lg mt-0.5"></i>
                            <div class="text-sm text-blue-800">
                                <p class="font-semibold mb-1">Perhatian</p>
                                <p>Pastikan informasi yang Anda berikan benar dan lengkap. Pesan Anda akan diproses dalam 1-3 hari kerja.</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <input
                            type="checkbox"
                            id="agreement"
                            class="mt-1 w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                        >
                        <label for="agreement" class="text-sm text-gray-600">
                            Saya menyetujui bahwa data yang saya berikan akan digunakan untuk keperluan tindak lanjut pengaduan dan komunikasi resmi oleh BAPPERIDA Kota Bogor.
                        </label>
                    </div>

                    <button
                        type="submit"
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-2"
                    >
                        <i class="fas fa-paper-plane"></i>
                        Kirim Pesan
                    </button>

                </form>

            </div>
        </div>

    </div>
</section>

<!-- SOCIAL MEDIA SECTION -->
<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-20">
    <div class="bg-gradient-to-r from-blue-900 to-blue-800 rounded-2xl shadow-xl p-8 lg:p-12 text-center">
        <div class="max-w-3xl mx-auto">
            <h2 class="text-3xl font-bold text-white mb-4">Ikuti Kami di Media Sosial</h2>
            <p class="text-lg text-blue-100 mb-8">Tetap terhubung dengan perkembangan terkini dari BAPPERIDA Kota Bogor</p>

            <div class="flex justify-center gap-6">
                <a href="https://www.instagram.com/bapperida.kotabogor" target="_blank"
                   class="w-14 h-14 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white text-xl hover:scale-110 transition-all duration-300">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#"
                   class="w-14 h-14 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white text-xl hover:scale-110 transition-all duration-300">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#"
                   class="w-14 h-14 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white text-xl hover:scale-110 transition-all duration-300">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#"
                   class="w-14 h-14 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center text-white text-xl hover:scale-110 transition-all duration-300">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
        </div>
    </div>
</section>

  <!-- Footer -->
    @include('layouts.footer')

  <script>
    // Mobile Menu Toggle
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
      const menu = document.getElementById('mobile-menu');
      menu.classList.toggle('hidden');
    });
  </script>
</body>
</html>
