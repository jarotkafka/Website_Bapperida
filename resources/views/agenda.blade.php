<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan - BAPPERIDA Kota Bogor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .dokumen-container {
            max-width: 1100px;
            margin: 80px auto 0;
            padding: 0 20px 80px;
        }

        .dokumen-section-head {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 16px;
            margin-bottom: 18px;
        }

        .dokumen-section-head-left {
            min-width: 0;
        }

        .dokumen-subtitle {
            margin-top: 8px;
            font-size: 14px;
            color: #64748b;
            font-weight: 500;
        }

        .dokumen-list-title {
            font-size: 24px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .dokumen-list-title::before {
            content: '';
            width: 5px;
            height: 32px;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            border-radius: 3px;
        }

        .agenda-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 1rem;
        }

        .agenda-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 2rem;
        }

        .agenda-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .agenda-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 1.5rem;
            border: 1px solid #e5e7eb;
            transition: all 0.25s ease;
        }

        .agenda-card:hover {
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
            transform: translateY(-4px);
        }

        .agenda-date {
            font-size: 0.85rem;
            font-weight: 600;
            color: #2563eb;
            margin-bottom: 0.5rem;
        }

        .agenda-name {
            font-size: 1.05rem;
            font-weight: 600;
            color: #111827;
            margin-bottom: 0.4rem;
        }

        .agenda-desc {
            font-size: 0.9rem;
            color: #6b7280;
            line-height: 1.5;
        }

        /* Pagination */
        .agenda-pagination {
            margin-top: 2.5rem;
            display: flex;
            justify-content: flex-start;
            gap: 0.4rem;
        }

        .page-btn {
            width: 32px;
            height: 32px;
            font-size: 0.8rem;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            background: #fff;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .page-btn:hover {
            background: #2563eb;
            color: #fff;
            border-color: #2563eb;
        }

        .page-btn.active {
            background: #2563eb;
            color: #fff;
            border-color: #2563eb;
        }

        @media (max-width: 768px) {
            .agenda-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- HEADER / NAVBAR -->
    @include('layouts.nav')

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-r from-blue-900 to-blue-800">
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE2YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00em0wIDI0YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00ek0xMiAxNmMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHptMCAyNGMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30">
        </div>
        <div class="relative z-10 container mx-auto px-4 py-24">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Agenda Kegiatan
                </h1>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                    Agenda Kegiatan dan program BAPPERIDA Kota Bogor
                </p>
            </div>
        </div>
    </section>

    <!-- Daftar Dokumen -->
    <div class="dokumen-container">
        <div class="dokumen-section-head">
            <div class="dokumen-section-head-left">
                <div class="dokumen-list-title">Daftar Agenda Terbaru</div>
                <div class="dokumen-subtitle"></div>
            </div>
        </div>

        <!-- AGENDA SECTION -->
        <div class="agenda-container">
            <div class="agenda-grid">
                <!-- Agenda -->
                <div class="agenda-card">
                    <div class="agenda-date flex items-center gap-2">
                        <i class="fa-regular fa-calendar"></i>
                        <span>29 Januari 2025</span>
                    </div>
                    <div class="agenda-name">Rapat Evaluasi Program</div>
                    <div class="agenda-desc">
                        Pembahasan capaian kinerja dan evaluasi program strategis.
                    </div>
                </div>

                <div class="agenda-card">
                    <div class="agenda-date flex items-center gap-2">
                        <i class="fa-regular fa-calendar"></i>
                        <span>28 Januari 2025</span>
                    </div>
                    <div class="agenda-name">Koordinasi Antar OPD</div>
                    <div class="agenda-desc">
                        Sinkronisasi program pembangunan daerah.
                    </div>
                </div>

                <div class="agenda-card">
                    <div class="agenda-date flex items-center gap-2">
                        <i class="fa-regular fa-calendar"></i>
                        <span>27 Januari 2025</span>
                    </div>
                    <div class="agenda-name">Monitoring Lapangan</div>
                    <div class="agenda-desc">
                        Peninjauan langsung proyek pembangunan berjalan.
                    </div>
                </div>

                <div class="agenda-card">
                    <div class="agenda-date flex items-center gap-2">
                        <i class="fa-regular fa-calendar"></i>
                        <span>25 Januari 2025</span>
                    </div>
                    <div class="agenda-name">Forum Konsultasi Publik</div>
                    <div class="agenda-desc">
                        Menyerap aspirasi masyarakat terkait perencanaan.
                    </div>
                </div>

                <div class="agenda-card">
                    <div class="agenda-date flex items-center gap-2">
                        <i class="fa-regular fa-calendar"></i>
                        <span>22 Januari 2025</span>
                    </div>
                    <div class="agenda-name">Penyusunan RKPD</div>
                    <div class="agenda-desc">
                        Pembahasan rancangan kerja pemerintah daerah.
                    </div>
                </div>

                <div class="agenda-card">
                    <div class="agenda-date flex items-center gap-2">
                        <i class="fa-regular fa-calendar"></i>
                        <span>21 Januari 2025</span>
                    </div>
                    <div class="agenda-name">Rapat Teknis Internal</div>
                    <div class="agenda-desc">
                        Koordinasi teknis antar bidang internal.
                    </div>
                </div>

                <div class="agenda-card">
                    <div class="agenda-date flex items-center gap-2">
                        <i class="fa-regular fa-calendar"></i>
                        <span>20 Januari 2025</span>
                    </div>
                    <div class="agenda-name">Pengolahan Data Statistik</div>
                    <div class="agenda-desc">
                        Penyusunan data pendukung perencanaan.
                    </div>
                </div>

                <div class="agenda-card">
                    <div class="agenda-date flex items-center gap-2">
                        <i class="fa-regular fa-calendar"></i>
                        <span>19 Januari 2025</span>
                    </div>
                    <div class="agenda-name">Rapat Perencanaan Awal</div>
                    <div class="agenda-desc">
                        Penyusunan konsep awal agenda pembangunan.
                    </div>
                </div>
            </div>
            <!-- PAGINATION -->
            <div class="flex justify-center items-center space-x-2 mt-12">
                <button
                    class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium flex items-center justify-center">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="w-10 h-10 rounded-lg bg-blue-600 text-white font-medium">1</button>
                <button
                    class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium">2</button>
                <button
                    class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium">3</button>
                <button
                    class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium">4</button>
                <span class="px-3 text-gray-500">...</span>
                <button
                    class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium">8</button>
                <button
                    class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium flex items-center justify-center">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>


    <!-- FOOTER -->
    @include('layouts.footer')

    <!-- JAVASCRIPT -->
    <script>
        // ========== SEARCH FUNCTIONALITY ==========
        const searchInput = document.getElementById('searchInput');
        const galleryItems = document.querySelectorAll('.gallery-item');
        const noResults = document.getElementById('noResults');
        let currentSearchTerm = '';
        let currentFilter = 'all';

        function performSearch() {
            currentSearchTerm = searchInput.value.toLowerCase().trim();
            filterAndSearch();
        }

        function clearSearch() {
            searchInput.value = '';
            currentSearchTerm = '';
            filterAndSearch();
            searchInput.focus();
        }

        // Search on Enter key
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                performSearch();
            }
        });

        // Real-time search as user types
        searchInput.addEventListener('input', () => {
            const searchTerm = searchInput.value.toLowerCase().trim();
            if (searchTerm.length > 2) {
                currentSearchTerm = searchTerm;
                filterAndSearch();
            } else if (searchTerm.length === 0) {
                currentSearchTerm = '';
                filterAndSearch();
            }
        });

        // ========== FILTER FUNCTIONALITY ==========
        const filterBtns = document.querySelectorAll('.filter-btn');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-blue-600', 'text-white');
                    b.classList.add('border-gray-300', 'text-gray-700');
                });

                // Add active class to clicked button
                btn.classList.add('active', 'bg-blue-600', 'text-white');
                btn.classList.remove('border-gray-300', 'text-gray-700');

                currentFilter = btn.getAttribute('data-filter');
                filterAndSearch();
            });
        });

        // ========== COMBINED FILTER & SEARCH ==========
        function filterAndSearch() {
            let visibleItems = 0;

            galleryItems.forEach((item, index) => {
                const category = item.getAttribute('data-category');
                const title = item.getAttribute('data-title').toLowerCase();
                const titleElement = item.querySelector('.title-overlay');

                // Reset highlight
                const originalTitle = item.getAttribute('data-title');
                titleElement.innerHTML = originalTitle;

                // Check filter
                const filterMatch = currentFilter === 'all' || category === currentFilter;

                // Check search
                const searchMatch = !currentSearchTerm ||
                    title.includes(currentSearchTerm) ||
                    category.toLowerCase().includes(currentSearchTerm);

                if (filterMatch && searchMatch) {
                    item.style.display = 'block';
                    visibleItems++;

                    // Highlight search term in title
                    if (currentSearchTerm && title.includes(currentSearchTerm)) {
                        const regex = new RegExp(`(${currentSearchTerm})`, 'gi');
                        titleElement.innerHTML = originalTitle.replace(regex,
                            '<span class="search-highlight">$1</span>');
                    }
                } else {
                    item.style.display = 'none';
                }
            });

            // Show/hide no results message
            if (visibleItems === 0) {
                noResults.classList.add('active');
                galleryGrid.style.display = 'none';
            } else {
                noResults.classList.remove('active');
                galleryGrid.style.display = 'grid';
            }
        }

        // ========== LIGHTBOX FUNCTIONALITY ==========
        let currentImageIndex = 0;
        const galleryData = [];

        // Collect all gallery items data
        document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('.gallery-item');

            items.forEach((item, index) => {
                const img = item.querySelector('.gallery-image');
                const category = item.querySelector('.category-badge-overlay');
                const title = item.querySelector('.title-overlay');
                const date = item.querySelector('.date-overlay span');

                galleryData.push({
                    src: img.src,
                    category: category.textContent.trim(),
                    title: title.textContent.trim(),
                    date: date.textContent.trim()
                });

                // Add click event to open lightbox
                item.addEventListener('click', () => {
                    openLightbox(index);
                });
            });
        });

        function openLightbox(index) {
            currentImageIndex = index;
            updateLightbox();
            document.getElementById('lightbox').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            document.getElementById('lightbox').classList.remove('active');
            document.body.style.overflow = '';
        }

        function navigateLightbox(direction) {
            currentImageIndex += direction;

            if (currentImageIndex < 0) {
                currentImageIndex = galleryData.length - 1;
            } else if (currentImageIndex >= galleryData.length) {
                currentImageIndex = 0;
            }

            updateLightbox();
        }

        function updateLightbox() {
            const data = galleryData[currentImageIndex];

            document.getElementById('lightboxImage').src = data.src;
            document.getElementById('lightboxTitle').textContent = data.title;
            document.getElementById('lightboxDate').textContent = data.date;
            document.getElementById('lightboxCategory').textContent = data.category;
            document.getElementById('lightboxCounter').textContent =
                `Gambar ${currentImageIndex + 1} dari ${galleryData.length}`;
        }

        // Keyboard navigation for lightbox
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeLightbox();
            } else if (e.key === 'ArrowLeft') {
                navigateLightbox(-1);
            } else if (e.key === 'ArrowRight') {
                navigateLightbox(1);
            }
        });

        // Close lightbox when clicking outside the content
        document.getElementById('lightbox').addEventListener('click', (e) => {
            if (e.target.id === 'lightbox') {
                closeLightbox();
            }
        });

        // ========== INITIALIZATION ==========
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize filter and search
            filterAndSearch();

            // Add animation delay to gallery items
            galleryItems.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>
</body>

</html>
