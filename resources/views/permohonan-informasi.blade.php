<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Data/Informasi - BAPPERIDA Kota Bogor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .dokumen-container {
            max-width: 1100px;
            margin: 30px auto 0;
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

        .ppid-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 3rem 1rem;
        }

        .ppid-title {
            font-size: 1.9rem;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 0.3rem;
        }

        .ppid-subtitle {
            font-size: 0.95rem;
            color: #6b7280;
            margin-bottom: 2.2rem;
        }

        .ppid-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 2.2rem;
            border: 1px solid #e5e7eb;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
        }

        .ppid-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.2rem 1.5rem;
        }

        .ppid-form.full {
            grid-template-columns: 1fr;
            margin-top: 1.5rem;
        }

        .ppid-field label {
            display: block;
            font-size: 0.85rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.35rem;
        }

        .ppid-field input,
        .ppid-field textarea,
        .ppid-field select {
            width: 100%;
            padding: 0.7rem 0.75rem;
            font-size: 0.9rem;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            outline: none;
            transition: 0.2s;
        }

        .ppid-field input:focus,
        .ppid-field textarea:focus,
        .ppid-field select:focus {
            border-color: #11a553;
        }

        .ppid-field textarea {
            resize: vertical;
            min-height: 120px;
        }

        .ppid-note {
            font-size: 0.75rem;
            color: #6b7280;
            margin-top: 0.3rem;
        }

        .ppid-checkbox {
            display: flex;
            align-items: flex-start;
            gap: 0.6rem;
            font-size: 0.85rem;
            color: #374151;
            margin-top: 1.5rem;
        }

        .ppid-actions {
            margin-top: 2.2rem;
            display: flex;
            justify-content: flex-end;
        }

        .ppid-btn {
            padding: 0.75rem 1.8rem;
            background-color: #16a34a !important;
            /* hijau */
            color: #ffffff !important;
            font-size: 0.9rem;
            font-weight: 600;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            box-shadow: 0 8px 20px rgba(22, 163, 74, 0.35);
            transition: all 0.3s ease;
        }

        .ppid-btn:hover {
            background-color: #15803d !important;
            box-shadow: 0 12px 28px rgba(22, 163, 74, 0.45);
            transform: translateY(-1px);
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
                    Permohonan Data/Informasi
                </h1>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                    Form Permohonan Data/Informasi BAPPERIDA Kota Bogor
                </p>
            </div>
        </div>
    </section>

    <!-- Daftar Dokumen -->
    <div class="dokumen-container">
        <div class="dokumen-section-head">
            <div class="dokumen-section-head-left">
                <div class="dokumen-list-title">Form Permohonan Data/Informasi</div>
                <div class="dokumen-subtitle"></div>
            </div>
        </div>

        <!-- PPID FORM SECTION -->
        <div class="ppid-card">
            <form enctype="multipart/form-data">

                <!-- DATA PEMOHON -->
                <div class="ppid-form">
                    <div class="ppid-field">
                        <label>Nama Lengkap</label>
                        <input type="text" placeholder="Nama lengkap pemohon">
                    </div>

                    <div class="ppid-field">
                        <label>Nomor Identitas (KTP / SIM)</label>
                        <input type="text" placeholder="Nomor identitas">
                    </div>

                    <div class="ppid-field">
                        <label>Email</label>
                        <input type="email" placeholder="email@example.com">
                    </div>

                    <div class="ppid-field">
                        <label>Nomor Handphone (WhatsApp Aktif)</label>
                        <input type="text" placeholder="08xxxxxxxxxx">
                    </div>
                </div>

                <div class="ppid-form full">
                    <div class="ppid-field">
                        <label>Alamat</label>
                        <textarea placeholder="Alamat lengkap pemohon"></textarea>
                    </div>
                </div>

                <div class="ppid-form">
                    <div class="ppid-field">
                        <label>Upload Foto Identitas</label>
                        <input type="file" accept=".jpg,.jpeg,.png">
                        <div class="ppid-note">
                            Maksimal 1 MB | Format: JPG, JPEG, PNG
                        </div>
                    </div>
                </div>

                <!-- INFORMASI DIMOHON -->
                <div class="ppid-form full">
                    <div class="ppid-field">
                        <label>Rincian Informasi yang Dibutuhkan</label>
                        <textarea placeholder="Jelaskan rincian informasi yang dibutuhkan"></textarea>
                    </div>

                    <div class="ppid-field">
                        <label>Tujuan Penggunaan Informasi</label>
                        <textarea placeholder="Tujuan penggunaan informasi"></textarea>
                    </div>
                </div>

                <!-- CARA MEMPEROLEH -->
                <div class="ppid-form">
                    <div class="ppid-field">
                        <label>Cara Memperoleh Informasi</label>
                        <select>
                            <option>Melihat</option>
                            <option>Membaca</option>
                            <option>Mendengarkan</option>
                            <option>Mencatat</option>
                            <option>Mendapatkan Salinan (Hardcopy / Softcopy)</option>
                        </select>
                    </div>

                    <div class="ppid-field">
                        <label>Cara Mendapatkan Salinan Informasi</label>
                        <select>
                            <option>Mengambil Langsung</option>
                            <option>Kurir</option>
                            <option>Email</option>
                        </select>
                    </div>
                </div>

                <!-- PERNYATAAN -->
                <div class="ppid-checkbox">
                    <input type="checkbox">
                    <span>
                        Dengan ini, saya menyatakan data yang saya isi adalah benar dan dapat dipertanggungjawabkan.
                    </span>
                </div>

                <div class="ppid-actions">
                    <button type="submit"
                        class="ppid-btn bg-green-600 hover:bg-green-700 text-white font-semibold px-7 py-3 rounded-xl shadow-lg transition-all duration-300"><i class="far fa-paper-plane"></i>
                        Kirim Permohonan
                    </button>

                </div>

            </form>
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
