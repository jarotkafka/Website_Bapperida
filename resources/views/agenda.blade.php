<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Kegiatan - BAPPERIDA Kota Bogor</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .dokumen-container {
            max-width: 1100px;
            margin: 80px auto 0;
            padding: 0 20px 60px;
        }

        .dokumen-list-title {
            font-size: 24px;
            font-weight: 700;
            color: #0f172a;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .dokumen-list-title::before {
            content: '';
            width: 5px;
            height: 30px;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            border-radius: 3px;
        }

        .agenda-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.8rem;
            margin-top: 2rem;
        }

        .agenda-card {
            background: #ffffff;
            border-radius: 16px;
            padding: 1.8rem;
            border: 2px solid #e5e7eb;
            transition: 0.25s ease;
            min-height: 170px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-decoration: none;
        }

        .agenda-card:hover {
            border-color: #2563eb;
            box-shadow: 0 15px 35px rgba(37, 99, 235, 0.25);
            transform: translateY(-5px);
        }

        .today-card {
            border-color: #2563eb;
            background: #f0f7ff;
        }

        .agenda-date {
            font-size: 0.9rem;
            font-weight: 600;
            color: #000000;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 0.8rem;
        }

        .agenda-name {
            font-size: 1.8rem;
            font-weight: 700;
            color: #2563eb;
        }

        .agenda-badge {
            background: #2563eb;
            color: white;
            font-size: 0.65rem;
            padding: 3px 10px;
            border-radius: 20px;
            margin-left: auto;
        }

        .agenda-desc {
            margin-top: 0.6rem;
            font-size: 0.85rem;
            color: #000000;
        }

        @media (max-width: 768px) {
            .agenda-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body class="bg-gray-50">

@include('layouts.nav')

<section class="bg-gradient-to-r from-blue-900 to-blue-800 py-24">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-6">
            Agenda Kegiatan
        </h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">
            Agenda kegiatan dan program BAPPERIDA Kota Bogor
        </p>
    </div>
</section>

<div class="dokumen-container">

    <div class="dokumen-list-title">
        Daftar Agenda Live
    </div>

    @php
        date_default_timezone_set('Asia/Jakarta');

        $days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        $months = [
            1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
            5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
            9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember',
        ];

        $agenda_dates = [];
        $today = strtotime(date('Y-m-d'));

        for ($i = 0; count($agenda_dates) < 6; $i--) {
            $date = strtotime("$i days", $today);
            $day_num = date('w', $date);

            if ($day_num == 0) continue; // skip Minggu

            $agenda_dates[] = [
                'full_date' => date('Y-m-d', $date), // FIX UTAMA
                'day_name' => $days[$day_num],
                'date_number' => date('j', $date),
                'month_name' => $months[date('n', $date)],
                'year' => date('Y', $date),
                'is_today' => $date == $today,
            ];
        }
    @endphp

    <div class="agenda-grid">
        @foreach ($agenda_dates as $item)
            <a href="{{ route('agenda.show', $item['full_date']) }}"
               class="agenda-card {{ $item['is_today'] ? 'today-card' : '' }}">

                <div class="agenda-date">
                    <i class="fa-regular fa-calendar"></i>
                    {{ $item['date_number'] }}
                    {{ $item['month_name'] }}
                    {{ $item['year'] }}

                    @if ($item['is_today'])
                        <span class="agenda-badge">Hari Ini</span>
                    @endif
                </div>

                <div class="agenda-name">
                    {{ $item['day_name'] }}
                </div>

                <div class="agenda-desc">
                    Klik untuk melihat detail agenda
                </div>

            </a>
        @endforeach
    </div>

</div>

@include('layouts.footer')

</body>
</html>
