<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri Kegiatan - BAPPERIDA Kota Bogor</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .gallery-image {
            object-fit: cover;
            width: 100%;
            height: 300px;
            transition: transform 0.4s ease;
        }

        .card-hover:hover .gallery-image {
            transform: scale(1.05);
        }

        .image-container {
            position: relative;
            overflow: hidden;
            border-radius: 12px 12px 0 0;
        }

        .text-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.6) 50%, transparent 100%);
            padding: 1.5rem;
            color: white;
        }

        .category-badge-overlay {
            background: rgba(255, 255, 255, 0.95);
            padding: 0.35rem 0.85rem;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 0.75rem;
        }

        .title-overlay {
            font-size: 1.1rem;
            font-weight: 700;
            line-height: 1.4;
            margin-bottom: 0.5rem;
            color: #ffffff;
        }

        .date-overlay {
            display: flex;
            align-items: center;
            font-size: 0.875rem;
            color: #e0e0e0;
        }

        /* Lightbox Styles */
        .lightbox {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .lightbox.active {
            display: flex;
        }

        .lightbox-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        }

        .lightbox-image {
            width: 100%;
            height: auto;
            max-height: 70vh;
            object-fit: contain;
            display: block;
        }

        .lightbox-info {
            padding: 1.5rem;
            background: white;
        }

        .lightbox-category {
            display: inline-block;
            padding: 0.4rem 0.9rem;
            border-radius: 6px;
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }

        .lightbox-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .lightbox-date {
            display: flex;
            align-items: center;
            color: #6b7280;
            font-size: 0.95rem;
        }

        .lightbox-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            width: 40px;
            height: 40px;
            background: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #374151;
            transition: all 0.3s ease;
            z-index: 10000;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .lightbox-close:hover {
            background: #f3f4f6;
            transform: rotate(90deg);
        }

        .lightbox-nav {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50px;
            height: 50px;
            background: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #374151;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .lightbox-nav:hover {
            background: #f3f4f6;
            transform: translateY(-50%) scale(1.1);
        }

        .lightbox-prev {
            left: 1rem;
        }

        .lightbox-next {
            right: 1rem;
        }

        .lightbox-counter {
            position: absolute;
            bottom: 1.5rem;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 600;
        }

        .gallery-item {
            cursor: pointer;
        }

        .filter-btn {
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .filter-btn:hover {
            transform: translateY(-2px);
        }

        .filter-btn.active {
            background: #2563eb;
            color: white;
            border-color: #2563eb;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .gallery-item {
            animation: fadeInUp 0.5s ease forwards;
        }

        .no-results {
            display: none;
            text-align: center;
            padding: 4rem 1rem;
        }

        .no-results.active {
            display: block;
        }

        .search-highlight {
            background-color: #fbbf24;
            padding: 0 2px;
            border-radius: 2px;
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- HEADER / NAVBAR -->
    @include('layouts.nav')

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-r from-blue-900 to-blue-800">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE2YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00em0wIDI0YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00ek0xMiAxNmMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHptMCAyNGMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30"></div>
        <div class="relative z-10 container mx-auto px-4 py-24">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    Galeri Kegiatan
                </h1>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                    Dokumentasi kegiatan dan program BAPPERIDA Kota Bogor
                </p>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">

        <!-- SEARCH BAR -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-8 -mt-16 relative z-10">
            <div class="flex flex-col md:flex-row gap-4 items-center">
                <div class="flex-1 relative w-full">
                    <div class="relative">
                        <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        <input type="text"
                            id="searchInput"
                            placeholder="Cari kegiatan berdasarkan judul atau kategori..."
                            class="w-full pl-12 pr-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition-all">
                    </div>
                </div>
                <button onclick="performSearch()"
                        class="px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition-colors shadow-md hover:shadow-lg whitespace-nowrap">
                    <i class="fas fa-search mr-2"></i>Cari
                </button>
                <button onclick="clearSearch()"
                        class="px-4 py-3 bg-gray-100 text-gray-700 rounded-lg font-medium hover:bg-gray-200 transition-colors whitespace-nowrap">
                    <i class="fas fa-times mr-2"></i>Reset
                </button>
            </div>
        </div>

        <!-- FILTER TABS -->
        <div class="bg-white rounded-xl shadow-lg p-6 mb-12">
            <div class="flex flex-wrap gap-3 justify-center">
                <button class="filter-btn active px-5 py-2.5 rounded-lg font-medium border border-blue-600 bg-blue-600 text-white"
                        data-filter="all">
                    Semua
                </button>
                <button class="filter-btn px-5 py-2.5 rounded-lg font-medium border border-gray-300 text-gray-700 hover:border-blue-500 hover:text-blue-600"
                        data-filter="Musrenbang">
                    Musrenbang
                </button>
                <button class="filter-btn px-5 py-2.5 rounded-lg font-medium border border-gray-300 text-gray-700 hover:border-blue-500 hover:text-blue-600"
                        data-filter="Sharing Session">
                    Sharing Session
                </button>
                <button class="filter-btn px-5 py-2.5 rounded-lg font-medium border border-gray-300 text-gray-700 hover:border-blue-500 hover:text-blue-600"
                        data-filter="Webinar">
                    Webinar
                </button>
                <button class="filter-btn px-5 py-2.5 rounded-lg font-medium border border-gray-300 text-gray-700 hover:border-blue-500 hover:text-blue-600"
                        data-filter="Kunjungan">
                    Kunjungan
                </button>
                <button class="filter-btn px-5 py-2.5 rounded-lg font-medium border border-gray-300 text-gray-700 hover:border-blue-500 hover:text-blue-600"
                        data-filter="Rapat">
                    Rapat
                </button>
                <button class="filter-btn px-5 py-2.5 rounded-lg font-medium border border-gray-300 text-gray-700 hover:border-blue-500 hover:text-blue-600"
                        data-filter="Event">
                    Event
                </button>
                <button class="filter-btn px-5 py-2.5 rounded-lg font-medium border border-gray-300 text-gray-700 hover:border-blue-500 hover:text-blue-600"
                        data-filter="Thinklab">
                    Thinklab
                </button>
            </div>
        </div>

        <!-- GALLERY GRID -->
        <div id="galleryGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <!-- Gallery Item 1 -->
            <div class="gallery-item card-hover bg-white rounded-xl shadow-md overflow-hidden"
                data-category="Sharing Session"
                data-title="Sharing Session Bapperida 2026">
                <div class="image-container">
                    <img src="{{ asset('image/gambargaleri1.jpeg') }}"
                        alt="Sharing Session"
                        class="gallery-image">
                    <div class="text-overlay">
                        <span class="category-badge-overlay text-blue-700">
                            Sharing Session
                        </span>
                        <h3 class="title-overlay">
                            Sharing Session Bapperida 2026
                        </h3>
                        <div class="date-overlay">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="gallery-item card-hover bg-white rounded-xl shadow-md overflow-hidden"
                data-category="Webinar"
                data-title="Webinar Bapperida 2026">
                <div class="image-container">
                    <img src="{{ asset('image/gambargaleri2.jpeg') }}"
                        alt="Musrenbang"
                        class="gallery-image">
                    <div class="text-overlay">
                        <span class="category-badge-overlay text-blue-700">
                            Webinar
                        </span>
                        <h3 class="title-overlay">
                            Webinar Bapperida 2026
                        </h3>
                        <div class="date-overlay">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="gallery-item card-hover bg-white rounded-xl shadow-md overflow-hidden"
                data-category="Musrenbang"
                data-title="Musrenbang RKPD 2027 Tematik 2026">
                <div class="image-container">
                    <img src="{{ asset('image/gambargaleri3.jpeg') }}"
                        alt="Musrenbang"
                        class="gallery-image">
                    <div class="text-overlay">
                        <span class="category-badge-overlay text-blue-700">
                            Musrenbang
                        </span>
                        <h3 class="title-overlay">
                            Musrenbang RKPD 2027 Tematik 2026
                        </h3>
                        <div class="date-overlay">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 4 -->
            <div class="gallery-item card-hover bg-white rounded-xl shadow-md overflow-hidden"
                data-category="Thinklab"
                data-title="Thinklab Bapperida 2026">
                <div class="image-container">
                    <img src="{{ asset('image/gambargaleri4.jpeg') }}"
                        alt="Thinklab"
                        class="gallery-image">
                    <div class="text-overlay">
                        <span class="category-badge-overlay text-blue-700">
                            Thinklab
                        </span>
                        <h3 class="title-overlay">
                            Thinklab Bapperida 2026
                        </h3>
                        <div class="date-overlay">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 5 -->
            <div class="gallery-item card-hover bg-white rounded-xl shadow-md overflow-hidden"
                data-category="Kunjungan"
                data-title="Kunjungan Bapperida 2026">
                <div class="image-container">
                    <img src="{{ asset('image/gambargaleri5.jpeg') }}"
                        alt="Kunjungan"
                        class="gallery-image">
                    <div class="text-overlay">
                        <span class="category-badge-overlay text-blue-700">
                            Kunjungan
                        </span>
                        <h3 class="title-overlay">
                            Kunjungan Bapperida 2026
                        </h3>
                        <div class="date-overlay">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 6 -->
            <div class="gallery-item card-hover bg-white rounded-xl shadow-md overflow-hidden"
                data-category="Rapat"
                data-title="Rapat Koordinasi 2026">
                <div class="image-container">
                    <img src="{{ asset('image/gambargaleri6.jpeg') }}"
                        alt="Rapat"
                        class="gallery-image">
                    <div class="text-overlay">
                        <span class="category-badge-overlay text-blue-700">
                            Rapat
                        </span>
                        <h3 class="title-overlay">
                            Rapat Koordinasi 2026
                        </h3>
                        <div class="date-overlay">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 7 -->
            <div class="gallery-item card-hover bg-white rounded-xl shadow-md overflow-hidden"
                data-category="Event"
                data-title="Event Bapperida 2026">
                <div class="image-container">
                    <img src="{{ asset('image/gambargaleri7.jpeg') }}"
                        alt="Event"
                        class="gallery-image">
                    <div class="text-overlay">
                        <span class="category-badge-overlay text-blue-700">
                            Event
                        </span>
                        <h3 class="title-overlay">
                            Event Bapperida 2026
                        </h3>
                        <div class="date-overlay">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>2026</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 8 -->
            <div class="gallery-item card-hover bg-white rounded-xl shadow-md overflow-hidden"
                data-category="Musrenbang"
                data-title="Musrenbang RKPD 2027 Tingkat Kecamatan">
                <div class="image-container">
                    <img src="{{ asset('image/gambargaleri8.jpeg') }}"
                        alt="Musrenbang"
                        class="gallery-image">
                    <div class="text-overlay">
                        <span class="category-badge-overlay text-blue-700">
                            Musrenbang
                        </span>
                        <h3 class="title-overlay">
                            Musrenbang RKPD 2027 Tingkat Kecamatan
                        </h3>
                        <div class="date-overlay">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>2025</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 9 -->
            <div class="gallery-item card-hover bg-white rounded-xl shadow-md overflow-hidden"
                data-category="Musrenbang"
                data-title="Musrenbang RKPD 2027 Tingkat Kelurahan">
                <div class="image-container">
                    <img src="{{ asset('image/gambargaleri9.jpeg') }}"
                        alt="Musrenbang"
                        class="gallery-image">
                    <div class="text-overlay">
                        <span class="category-badge-overlay text-blue-700">
                            Musrenbang
                        </span>
                        <h3 class="title-overlay">
                            Musrenbang RKPD 2027 Tingkat Kelurahan
                        </h3>
                        <div class="date-overlay">
                            <i class="far fa-calendar-alt mr-2"></i>
                            <span>2025</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- No Results Message -->
        <div id="noResults" class="no-results">
            <div class="bg-white rounded-2xl shadow-lg p-12">
                <i class="fas fa-search text-5xl text-gray-400 mb-4"></i>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Tidak ada hasil ditemukan</h3>
                <p class="text-gray-600">Coba gunakan kata kunci pencarian yang berbeda</p>
            </div>
        </div>

        <!-- PAGINATION -->
        <div class="flex justify-center items-center space-x-2 mt-12">
            <button class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium flex items-center justify-center">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="w-10 h-10 rounded-lg bg-blue-600 text-white font-medium">1</button>
            <button class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium">2</button>
            <button class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium">3</button>
            <button class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium">4</button>
            <span class="px-3 text-gray-500">...</span>
            <button class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium">8</button>
            <button class="w-10 h-10 rounded-lg border border-gray-300 hover:border-blue-600 hover:text-blue-600 transition font-medium flex items-center justify-center">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <!-- LIGHTBOX MODAL -->
    <div id="lightbox" class="lightbox">
        <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
        <button class="lightbox-nav lightbox-prev" onclick="navigateLightbox(-1)">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button class="lightbox-nav lightbox-next" onclick="navigateLightbox(1)">
            <i class="fas fa-chevron-right"></i>
        </button>

        <div class="lightbox-content">
            <img id="lightboxImage" class="lightbox-image" src="" alt="">
            <div class="lightbox-info">
                <span id="lightboxCategory" class="lightbox-category bg-blue-100 text-blue-700"></span>
                <h2 id="lightboxTitle" class="lightbox-title"></h2>
                <div class="lightbox-date">
                    <i class="far fa-calendar-alt mr-2"></i>
                    <span id="lightboxDate"></span>
                </div>
            </div>
        </div>

        <div class="lightbox-counter">
            <span id="lightboxCounter">Image 1 of 9</span>
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
                        titleElement.innerHTML = originalTitle.replace(regex, '<span class="search-highlight">$1</span>');
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
            document.getElementById('lightboxCounter').textContent = `Gambar ${currentImageIndex + 1} dari ${galleryData.length}`;
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
