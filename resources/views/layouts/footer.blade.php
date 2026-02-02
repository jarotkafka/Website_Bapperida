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
              <p class="text-xs text-gray-500"><i class="fas fa-mail-bulk mr-2 text-blue-400"></i>Layanan surat menyurat: 24 jam</p>
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
