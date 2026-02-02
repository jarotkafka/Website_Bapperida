<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPID</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
        }

        .header-dokumen {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #1e40af 100%);
            color: #fff;
            padding: 50px 20px 80px;
            /* TOP DIKECILIN */
            text-align: center;
            position: relative;
            overflow: hidden;
        }


        .header-dokumen::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.1) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 1;
        }

        .header-dokumen::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.08) 0%, transparent 70%);
            border-radius: 50%;
            z-index: 1;
        }

        .header-dokumen>* {
            position: relative;
            z-index: 2;
        }

        .header-dokumen h1 {
            font-size: 48px;
            font-weight: 800;
            margin-bottom: 12px;
            letter-spacing: -1px;
        }

        .header-dokumen p {
            font-size: 18px;
            opacity: 0.85;
            font-weight: 300;
            letter-spacing: 0.5px;
        }

        .search-wrapper {
            max-width: 1100px;
            margin: -50px auto 0;
            padding: 0 20px;
            position: relative;
            z-index: 10;
        }

        .search-box {
            background: #fff;
            padding: 24px;
            border-radius: 12px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.12);
            display: flex;
            gap: 12px;
            align-items: center;
            backdrop-filter: blur(10px);
        }

        .search-box input {
            flex: 1;
            padding: 14px 18px;
            border-radius: 8px;
            border: 2px solid #e2e8f0;
            font-size: 15px;
            font-family: inherit;
            transition: all 0.3s ease;
            background: #f8fafc;
        }

        .search-box input:focus {
            outline: none;
            border-color: #3b82f6;
            background: #fff;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }

        /* Select (kategori) styled to match the input box (match dokumen-litbang) */
        .search-select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #f8fafc;
            border: 2px solid #e2e8f0;
            padding: 12px 40px 12px 16px;
            border-radius: 8px;
            font-size: 15px;
            color: #374151;
            cursor: pointer;
            transition: all 0.2s ease;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='none' stroke='%23909CA4'%3E%3Cpath d='M6 8l4 4 4-4' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 12px center;
            background-size: 18px;
        }

        .search-select:focus {
            outline: none;
            border-color: #3b82f6;
            background: #fff;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.08);
        }

        .btn-cari {
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: #fff;
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
            box-shadow: 0 4px 15px rgba(59, 130, 246, 0.3);
        }

        .btn-cari:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.4);
        }

        .btn-reset {
            background: #e2e8f0;
            color: #475569;
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .btn-reset:hover {
            background: #cbd5e1;
            transform: translateY(-2px);
        }

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

        .dokumen-viewall {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #1e40af;
            background: rgba(59, 130, 246, 0.10);
            border: 1px solid rgba(59, 130, 246, 0.18);
            padding: 10px 14px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 13px;
            transition: all 0.2s ease;
            white-space: nowrap;
        }

        .dokumen-viewall:hover {
            transform: translateY(-1px);
            background: rgba(59, 130, 246, 0.14);
        }

        .dokumen-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
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

        .dokumen-card {
            background: #fff;
            border-radius: 12px;
            padding: 22px;
            display: flex;
            flex-direction: column;
            gap: 14px;
            transition: all 0.25s ease;
            border: 1px solid #e2e8f0;
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.06);
            position: relative;
            overflow: hidden;
        }

        .dokumen-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, rgba(37, 99, 235, 0.60), rgba(37, 99, 235, 0.10));
        }

        .dokumen-card:hover {
            box-shadow: 0 10px 26px rgba(15, 23, 42, 0.10);
            transform: translateY(-1px);
            border-color: rgba(37, 99, 235, 0.18);
        }

        .dokumen-card-header {
            display: flex;
            gap: 14px;
            align-items: flex-start;
        }

        .dokumen-icon {
            flex-shrink: 0;
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, rgba(219, 234, 254, 0.95), rgba(239, 246, 255, 0.95));
            border: 1px solid rgba(37, 99, 235, 0.14);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .dokumen-icon::before {
            content: none;
        }

        .dokumen-icon svg {
            width: 40px;
            height: 40px;
            stroke: #2563eb;
            stroke-width: 1.5;
            position: relative;
            z-index: 1;
        }

        .dokumen-header-text {
            flex: 1;
            min-width: 0;
        }

        .dokumen-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .dokumen-meta {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .dokumen-tanggal {
            font-size: 12.5px;
            color: #64748b;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .dokumen-tanggal i {
            font-size: 12px;
            color: #475569;
        }

        .dokumen-tanggal::before {
            content: none;
        }

        .dokumen-kategori {
            display: inline-block;
            background: #dbeafe;
            color: #1e40af;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .dokumen-judul {
            font-size: 18px;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0;
            line-height: 1.5;
            word-break: break-word;
            transition: all 0.3s ease;
        }

        .dokumen-card:hover .dokumen-judul {
            color: #1e40af;
        }

        .dokumen-footer {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-top: 14px;
            border-top: 1px solid #e2e8f0;
        }

        .dokumen-actions {
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .dokumen-info {
            font-size: 13px;
            color: #94a3b8;
        }

        .dokumen-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #16a34a, #15803d);
            color: #fff;
            text-decoration: none;
            padding: 11px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: none;
        }

        .dokumen-button-secondary {
            background: #fff;
            color: #0f172a;
            border: 1px solid #e2e8f0;
            box-shadow: none;
        }

        .dokumen-button-secondary:hover {
            background: #f8fafc;
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(15, 23, 42, 0.10);
        }

        .no-results {
            display: none;
            margin: 14px 0 0;
            background: rgba(255, 255, 255, 0.75);
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 18px;
            color: #475569;
            font-weight: 600;
            box-shadow: 0 6px 18px rgba(15, 23, 42, 0.05);
        }

        .no-results.active {
            display: block;
        }

        .dokumen-button:hover {
            transform: none;
            box-shadow: none;
            background: linear-gradient(135deg, #15803d, #166534);
        }

        .dokumen-button i {
            font-size: 13px;
        }


        @media (max-width: 768px) {
            .header-dokumen {
                padding: 60px 20px 50px;
            }

            .header-dokumen h1 {
                font-size: 32px;
            }

            .header-dokumen p {
                font-size: 16px;
            }

            .search-wrapper {
                margin: -35px auto 0;
            }

            .search-box {
                flex-direction: column;
                gap: 12px;
                padding: 16px;
            }

            .search-box input,
            .search-select,
            .btn-cari,
            .btn-reset {
                width: 100%;
            }

            .dokumen-container {
                margin: 60px auto 0;
                padding: 0 16px 60px;
            }

            .dokumen-section-head {
                flex-direction: column;
                align-items: flex-start;
            }

            .dokumen-grid {
                grid-template-columns: 1fr;
            }

            .dokumen-card {
                gap: 14px;
                padding: 18px;
            }

            .dokumen-icon {
                width: 56px;
                height: 56px;
            }

            .dokumen-judul {
                font-size: 18px;
            }

            .dokumen-footer {
                flex-direction: column;
                gap: 12px;
                align-items: flex-start;
            }

            .dokumen-actions {
                width: 100%;
                flex-direction: column;
            }

            .dokumen-button {
                width: 100%;
                justify-content: center;
            }

        }
    </style>
</head>

<body class="font-sans antialiased bg-gray-50">
    <!-- Navigation Bar -->
    @include('layouts.nav')

    <!-- Hero Section -->
    <section class="relative overflow-hidden bg-gradient-to-r from-blue-900 to-blue-800">
        <div
            class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtb3BhY2l0eT0iMC4wNSI+PHBhdGggZD0iTTM2IDE2YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00em0wIDI0YzAtMi4yMSAxLjc5LTQgNC00czQgMS43OSA0IDQtMS43OSA0LTQgNC00LTEuNzktNC00ek0xMiAxNmMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHptMCAyNGMwLTIuMjEgMS43OS00IDQtNHM0IDEuNzkgNCA0LTEuNzkgNC00IDQtNC0xLjc5LTQtNHoiLz48L2c+PC9nPjwvc3ZnPg==')] opacity-30">
        </div>
        <div class="relative z-10 container mx-auto px-4 py-24">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
                    PPID
                </h1>
                <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
                    Dokumentasi dan arsip informasi publik
                </p>
            </div>
        </div>
    </section>

    <!-- Search Box -->
    <div class="search-wrapper">
        <div class="search-box">

            <!-- INPUT SEARCH -->
            <input id="searchInput" type="text" placeholder="Cari kegiatan berdasarkan judul atau kategori...">

            <!-- DROPDOWN KATEGORI -->
            <select id="categorySelect" class="search-select">
                <option value="">-- Pilih Sub Kategori --</option>
                <option value="Daftar Informasi">Daftar Informasi</option>
                <option value="Dasar Hukum Pelaksanaan Pelayanan pada PPID">
                    Dasar Hukum Pelaksanaan Pelayanan pada PPID
                </option>
                <option value="Maklumat, Hak, dan Kewajiban Informasi Publik">
                    Maklumat, Hak, dan Kewajiban Informasi Publik
                </option>
                <option value="Profil PPID">Profil PPID</option>
                <option value="Regulasi Keterbukaan Informasi">
                    Regulasi Keterbukaan Informasi
                </option>
                <option value="Standar Layanan (Operasional) PPID">
                    Standar Layanan (Operasional) PPID
                </option>
            </select>


            <!-- BUTTON -->
            <button id="searchBtn" class="btn-cari">Cari</button>
            <button id="resetBtn" class="btn-reset">Reset</button>

        </div>
    </div>

    <!-- Daftar Dokumen -->
    <div class="dokumen-container">
        <div class="dokumen-section-head">
            <div class="dokumen-section-head-left">
                <div class="dokumen-list-title">Daftar Dokumen Terbaru</div>
                <div class="dokumen-subtitle"></div>
            </div>
        </div>

        <div id="noResults" class="no-results">Dokumen tidak ditemukan. Coba kata kunci lain.</div>

        <!-- Dokumen Item 1 -->
        <div class="dokumen-grid">
            <div class="dokumen-card" data-title="Maklumat Pelayanan" data-category="Litbang">
                <div class="dokumen-card-header">
                    <div class="dokumen-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="8" y1="13" x2="16" y2="13" />
                            <line x1="8" y1="17" x2="16" y2="17" />
                        </svg>
                    </div>
                    <div class="dokumen-header-text">
                        <div class="dokumen-meta">
                            <div class="dokumen-tanggal"><i class="fa-regular fa-calendar"></i> Senin, 25 Agustus 2025
                            </div>
                        </div>
                        <div class="dokumen-judul">Maklumat Pelayanan</div>
                     </div>
                </div>
                <div class="dokumen-footer">
                    <a href="#" class="dokumen-button">
                        Detail Dokumen
                    </a>
                </div>
            </div>

            <!-- Dokumen Item 2 -->
            <div class="dokumen-card" data-title="Pedoman Teknis Penanganan Kampung Nol Kemiskinan Extreme"
                data-category="Litbang">
                <div class="dokumen-card-header">
                    <div class="dokumen-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="8" y1="13" x2="16" y2="13" />
                            <line x1="8" y1="17" x2="16" y2="17" />
                        </svg>
                    </div>
                    <div class="dokumen-header-text">
                        <div class="dokumen-meta">
                            <div class="dokumen-tanggal"><i class="fa-regular fa-calendar"></i> Jumat, 22 Agustus 2025
                            </div>
                        </div>
                        <div class="dokumen-judul">Pedoman Teknis Penanganan Kampung Nol Kemiskinan Extreme</div>
                    </div>
                </div>
                <div class="dokumen-footer">
                    <a href="#" class="dokumen-button">
                        Detail Dokumen
                    </a>
                </div>
            </div>

            <!-- Dokumen Item 3 -->
            <div class="dokumen-card" data-title="Daftar Informasi Publik Bapperida Kota Bogor 2025"
                data-category="Litbang">
                <div class="dokumen-card-header">
                    <div class="dokumen-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="8" y1="13" x2="16" y2="13" />
                            <line x1="8" y1="17" x2="16" y2="17" />
                        </svg>
                    </div>
                    <div class="dokumen-header-text">
                        <div class="dokumen-meta">
                            <div class="dokumen-tanggal"><i class="fa-regular fa-calendar"></i>Rabu, 15 Januari 2025
                            </div>
                        </div>
                        <div class="dokumen-judul">Daftar Informasi Publik Bapperida Kota Bogor 2025</div>
                    </div>
                </div>
                <div class="dokumen-footer">
                    <a href="#" class="dokumen-button">
                        Detail Dokumen
                    </a>
                </div>
            </div>

            <!-- Dokumen Item 4 -->
            <div class="dokumen-card"
                data-title="Peraturan Wali Kota Bogor No. 70 Tahun 2022 Tentang Tata Cara Layanan Informasi Publik di Lingkungan Pemerintah Kota Bogor"
                data-category="Litbang">
                <div class="dokumen-card-header">
                    <div class="dokumen-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="8" y1="13" x2="16" y2="13" />
                            <line x1="8" y1="17" x2="16" y2="17" />
                        </svg>
                    </div>
                    <div class="dokumen-header-text">
                        <div class="dokumen-meta">
                            <div class="dokumen-tanggal"><i class="fa-regular fa-calendar"></i> Jumat, 21 Juni 2024
                            </div>
                        </div>
                        <div class="dokumen-judul">Peraturan Wali Kota Bogor No. 70 Tahun 2022 Tentang Tata Cara
                            Layanan Informasi Publik di Lingkungan Pemerintah Kota Bogor</div>
                    </div>
                </div>
                <div class="dokumen-footer">
                    <a href="#" class="dokumen-button">
                        Detail Dokumen
                    </a>
                </div>
            </div>

            <!-- Dokumen Item 5 -->
            <div class="dokumen-card"
                data-title="Peraturan Komisi Informasi Republik Indonesia No. 1 Tahun 2021 Tentang Standar Layanan Informasi Publik"
                data-category="Litbang">
                <div class="dokumen-card-header">
                    <div class="dokumen-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="8" y1="13" x2="16" y2="13" />
                            <line x1="8" y1="17" x2="16" y2="17" />
                        </svg>
                    </div>
                    <div class="dokumen-header-text">
                        <div class="dokumen-meta">
                            <div class="dokumen-tanggal"><i class="fa-regular fa-calendar"></i> Kamis, 20 Juni 2024
                            </div>
                        </div>
                        <div class="dokumen-judul">Peraturan Komisi Informasi Republik Indonesia No. 1 Tahun 2021
                            Tentang Standar Layanan Informasi Publik</div>
                    </div>
                </div>
                <div class="dokumen-footer">
                    <a href="#" class="dokumen-button">
                        Detail Dokumen
                    </a>
                </div>
            </div>

            <!-- Dokumen Item 6 -->
            <div class="dokumen-card"
                data-title="Undang-Undang Republik Indonesia No. 14 Tahun 2008 Tentang Keterbukaan Informasi Publik"
                data-category="Litbang">
                <div class="dokumen-card-header">
                    <div class="dokumen-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="8" y1="13" x2="16" y2="13" />
                            <line x1="8" y1="17" x2="16" y2="17" />
                        </svg>
                    </div>
                    <div class="dokumen-header-text">
                        <div class="dokumen-meta">
                            <div class="dokumen-tanggal"><i class="fa-regular fa-calendar"></i> Jumat, 26 April 2024
                            </div>
                        </div>
                        <div class="dokumen-judul">Undang-Undang Republik Indonesia No. 14 Tahun 2008 Tentang
                            Keterbukaan Informasi Publik</div>
                    </div>
                </div>
                <div class="dokumen-footer">
                    <a href="#" class="dokumen-button">
                        Detail Dokumen
                    </a>
                </div>
            </div>

            <!-- Dokumen Item 7 -->
            <div class="dokumen-card"
                data-title="Peraturan Mahkamah Agung No. 2 Tahun 2011 Tentang Tata Cara Penyelesaian Sengketa Informasi Publik"
                data-category="Litbang">
                <div class="dokumen-card-header">
                    <div class="dokumen-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="8" y1="13" x2="16" y2="13" />
                            <line x1="8" y1="17" x2="16" y2="17" />
                        </svg>
                    </div>
                    <div class="dokumen-header-text">
                        <div class="dokumen-meta">
                            <div class="dokumen-tanggal"><i class="fa-regular fa-calendar"></i> Senin, 22 April 2024
                            </div>
                        </div>
                        <div class="dokumen-judul">Peraturan Mahkamah Agung No. 2 Tahun 2011 Tentang Tata Cara
                            Penyelesaian Sengketa Informasi Publik</div>
                    </div>
                </div>
                <div class="dokumen-footer">
                    <a href="#" class="dokumen-button">
                        Detail Dokumen
                    </a>
                </div>
            </div>

            <!-- Dokumen Item 8 -->
            <div class="dokumen-card"
                data-title="Peraturan Pemerintah No. 61 Tahun 2010 Tentang Keterbukaan Informasi Publik"
                data-category="Litbang">
                <div class="dokumen-card-header">
                    <div class="dokumen-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="8" y1="13" x2="16" y2="13" />
                            <line x1="8" y1="17" x2="16" y2="17" />
                        </svg>
                    </div>
                    <div class="dokumen-header-text">
                        <div class="dokumen-meta">
                            <div class="dokumen-tanggal"><i class="fa-regular fa-calendar"></i> Rabu, 20 Maret 2024
                            </div>
                        </div>
                        <div class="dokumen-judul">Peraturan Pemerintah No. 61 Tahun 2010 Tentang Keterbukaan Informasi
                            Publik</div>
                    </div>
                </div>
                <div class="dokumen-footer">
                    <a href="#" class="dokumen-button">
                        Detail Dokumen
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- PAGINATION -->
        <div class="flex justify-center items-center space-x-2 -mt-6">

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

<div class="py-8"></div>

    <!-- FOOTER -->
    @include('layouts.footer')

    <!-- JAVASCRIPT -->
    <script>
        // ========== SEARCH FUNCTIONALITY ==========
        const searchInput = document.getElementById('searchInput');
        const galleryItems = document.querySelectorAll('.dokumen-card');
        const noResults = document.getElementById('noResults');
        const galleryGrid = document.querySelector('.dokumen-grid');
        const searchBtn = document.getElementById('searchBtn');
        const resetBtn = document.getElementById('resetBtn');
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

        if (searchBtn) {
            searchBtn.addEventListener('click', () => {
                performSearch();
            });
        }

        if (resetBtn) {
            resetBtn.addEventListener('click', () => {
                clearSearch();
            });
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
                const category = item.getAttribute('data-category') || '';
                const title = item.getAttribute('data-title').toLowerCase();
                const titleElement = item.querySelector('.dokumen-judul');

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
                    item.style.display = '';
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
            if (noResults) {
                if (visibleItems === 0) {
                    noResults.classList.add('active');
                } else {
                    noResults.classList.remove('active');
                }
            }
            if (galleryGrid) {
                galleryGrid.style.display = visibleItems === 0 ? 'none' : 'grid';
            }
        }

        // ========== LIGHTBOX FUNCTIONALITY ==========
        let currentImageIndex = 0;
        const galleryData = [];

        const lightbox = document.getElementById('lightbox');

        // Collect all gallery items data
        if (lightbox) document.addEventListener('DOMContentLoaded', () => {
            const items = document.querySelectorAll('.gallery-item');

            items.forEach((item, index) => {
                const img = item.querySelector('.gallery-image');
                const category = item.querySelector('.category-badge-overlay');
                const title = item.querySelector('.title-overlay');
                const date = item.querySelector('.date-overlay span');

                if (!img || !category || !title || !date) {
                    return;
                }

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
        if (lightbox) lightbox.addEventListener('click', (e) => {
            if (e.target.id === 'lightbox') {
                closeLightbox();
            }
        });

        // ========== INITIALIZATION ==========
        document.addEventListener('DOMContentLoaded', () => {
            // Initialize filter and search
            if (searchInput && galleryItems) {
                filterAndSearch();
            }

            // Add animation delay to gallery items
            galleryItems.forEach((item, index) => {
                item.style.animationDelay = `${index * 0.1}s`;
            });
        });
    </script>

</body>

</html>
