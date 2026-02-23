<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permohonan Keberatan - BAPPERIDA Kota Bogor</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />

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

        /* ===== FORM UMUM ===== */
        .form-wrapper {
            max-width: 900px;
            margin: 0 auto;
        }

        .form-section {
            background: #ffffff;
            border-radius: 14px;
            padding: 28px;
            margin-bottom: 28px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
            border: 1px solid #e5e7eb;
        }

        .form-section h2 {
            font-size: 18px;
            font-weight: 700;
            color: #1f2937;
            margin-bottom: 18px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group.full {
            grid-column: span 2;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 600;
            color: #374151;
            margin-bottom: 6px;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            border: 1px solid #d1d5db;
            border-radius: 10px;
            padding: 10px 12px;
            font-size: 14px;
            outline: none;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.15);
        }

        textarea {
            resize: vertical;
            min-height: 110px;
        }

        /* ===== CHECKBOX ===== */
        .checkbox-list {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .checkbox-item {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            font-size: 14px;
            color: #374151;
        }

        /* ===== TANDA TANGAN ===== */
        .signature-box {
            border: 2px dashed #cbd5f5;
            border-radius: 14px;
            padding: 20px;
            text-align: center;
            color: #6b7280;
            font-size: 14px;
        }

        /* ===== SUBMIT ===== */
.submit-btn {
    background: #16a34a; /* HIJAU */
    color: #ffffff;
    padding: 12px 22px;
    border-radius: 12px;
    font-weight: 600;
    transition: 0.2s;
}

.submit-btn:hover {
    background: #15803d; /* HIJAU LEBIH GELAP */
}


        /* ===== SIGNATURE ===== */
        .signature-wrapper {
            display: inline-block;
        }

        #signatureCanvas {
            width: 320px;
            height: 200px;
            border: 1.5px solid #d1d5db;
            border-radius: 6px;
            background: #fff;
            cursor: crosshair;
        }

        .signature-reset {
            margin-top: 10px;
            background: #ef4444;
            color: white;
            border: none;
            padding: 6px 14px;
            border-radius: 6px;
            font-size: 13px;
            cursor: pointer;
        }

        .signature-reset:hover {
            background: #dc2626;
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
                    Permohonan Keberatan
                </h1>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                    Form Permohonan Keberatan Informasi Publik BAPPERIDA Kota Bogor
                </p>
            </div>
        </div>
    </section>

    <!-- Daftar Dokumen -->
    <div class="dokumen-container">
        <div class="dokumen-section-head">
            <div class="dokumen-section-head-left">
                <div class="dokumen-list-title">Form Permohonan Keberatan</div>
                <div class="dokumen-subtitle"></div>
            </div>
        </div>

        <!-- MAIN CONTENT -->
        <div class="container mx-auto px-4 py-10">
            <div class="form-wrapper">

                <form action="#" method="POST">
                    @csrf

                    <!-- A. INFORMASI PENGAJUAN KEBERATAN -->
                    <div class="form-section">
                        <h2>A. INFORMASI PENGAJUAN KEBERATAN</h2>

                        <div class="form-grid">
                            <div class="form-group full">
                                <label>Nomor Pendaftaran Permohonan Informasi</label>
                                <input type="text" placeholder="Contoh: 012/PPID/2025">
                            </div>

                            <div class="form-group full">
                                <label>Tujuan Penggunaan Informasi</label>
                                <textarea placeholder="Tuliskan tujuan penggunaan informasi"></textarea>
                            </div>
                        </div>

                        <div class="py-2"></div>

                        <h2>Identitas Pemohon</h2>
                        <div class="form-grid">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" placeholder="Nama Sesuai KTP">
                            </div>


                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input type="text" placeholder="Pekerjaan Saat Ini">
                            </div>

                            <div class="form-group full">
                                <label>Alamat</label>
                                <textarea></textarea>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" placeholder="email@example.com">
                            </div>

                            <div class="form-group">
                                <label>No. Telepon / HP</label>
                                <input type="text" placeholder="08xxxxxxxxxx">
                            </div>
                        </div>

                        <div class="py-2"></div>

                        <h2>Identitas Kuasa Pemohon (Jika Ada)</h2>
                        <p class="text-sm text-gray-500 mb-4">
                            Diisi apabila dikuasakan dan melampirkan surat kuasa.
                        </p>

                        <div class="form-grid">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" placeholder="Nama Sesuai KTP">
                            </div>

                            <div class="form-group">
                                <label>No. Telepon / HP</label>
                                <input type="text" placeholder="08xxxxxxxxxx">
                            </div>

                            <div class="form-group full">
                                <label>Alamat</label>
                                <textarea></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- B. ALASAN PENGAJUAN KEBERATAN -->
                    <div class="form-section">
                        <h2>B. ALASAN PENGAJUAN KEBERATAN</h2>

                        <div class="checkbox-list">
                            <label class="checkbox-item">
                                <input type="checkbox"> Permohonan Informasi ditolak
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox"> Informasi berkala tidak disediakan
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox"> Permintaan informasi tidak ditanggapi
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox"> Permintaan informasi ditanggapi tidak sebagaimana diminta
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox"> Permintaan informasi tidak dipenuhi
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox"> Biaya yang dikenakan tidak wajar
                            </label>
                            <label class="checkbox-item">
                                <input type="checkbox"> Informasi disampaikan melebihi jangka waktu
                            </label>
                        </div>

                        <p class="text-sm text-gray-500 mt-4">
                            (Sesuai Pasal 35 UU KIP)
                        </p>
                    </div>

                    <!-- C. KASUS POSISI -->
                    <div class="form-section">
                        <h2>C. KASUS POSISI</h2>

                        <div class="form-group full">
                            <textarea placeholder="Jelaskan kronologi atau posisi kasus secara jelas"></textarea>
                        </div>
                    </div>

                    <!-- D. TANGGAPAN -->
                    <div class="form-section">
                        <h2>D. HARI / TANGGAL TANGGAPAN</h2>
                        <p class="text-sm text-gray-600 leading-relaxed">
                            Tanggapan atas keberatan akan disampaikan paling lambat
                            <strong>30 (tiga puluh) hari kerja</strong>
                            sejak diterimanya pengajuan keberatan.
                        </p>
                    </div>

                    <!-- E. TANDA TANGAN -->
                    <div class="form-section">
                        <h2>E. TANDA TANGAN PEMOHON</h2>

                        <div class="signature-wrapper">
                            <canvas id="signatureCanvas"></canvas>

                            <button type="button" id="clearSignature" class="signature-reset">
                                ⟲ Ulangi
                            </button>

                            <!-- hasil tanda tangan (base64) -->
                            <input type="hidden" name="tanda_tangan" id="signatureInput">
                        </div>
                    </div>


                    <div class="text-right">
                        <button type="submit" class="submit-btn"><i class="far fa-paper-plane"></i>
                            Kirim Pengajuan Keberatan
                        </button>
                    </div>
                </form>
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
                    b.classList.remove('active', 'bg-green-600', 'text-white');
                    b.classList.add('border-gray-300', 'text-gray-700');
                });

                // Add active class to clicked button
                btn.classList.add('active', 'bg-green-600', 'text-white');
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

    <script>
        const canvas = document.getElementById('signatureCanvas');
        const ctx = canvas.getContext('2d');
        const clearBtn = document.getElementById('clearSignature');
        const input = document.getElementById('signatureInput');

        // Set ukuran real canvas
        canvas.width = 320;
        canvas.height = 200;

        let drawing = false;

        function startDraw(e) {
            drawing = true;
            ctx.beginPath();
            ctx.moveTo(e.offsetX, e.offsetY);
        }

        function draw(e) {
            if (!drawing) return;
            ctx.lineTo(e.offsetX, e.offsetY);
            ctx.strokeStyle = '#000';
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';
            ctx.stroke();
        }

        function stopDraw() {
            drawing = false;
            input.value = canvas.toDataURL(); // simpan tanda tangan
        }

        canvas.addEventListener('mousedown', startDraw);
        canvas.addEventListener('mousemove', draw);
        canvas.addEventListener('mouseup', stopDraw);
        canvas.addEventListener('mouseleave', stopDraw);

        clearBtn.addEventListener('click', () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            input.value = '';
        });
    </script>

</body>

</html>
