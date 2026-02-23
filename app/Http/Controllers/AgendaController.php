<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function show($date)
    {
        // Simulasi data (nanti bisa ambil dari database)
        $agenda = [
            [
                'nama' => 'Rapat Koordinasi Pembangunan',
                'tanggal' => $date,
                'jam_mulai' => '09:00',
                'jam_selesai' => '00:00',
                'deskripsi' => 'Pembahasan rencana pembangunan daerah.',
                'lokasi' => 'Ruang Rapat Utama'
            ],
            [
                'nama' => 'Evaluasi Program Tahun Berjalan',
                'tanggal' => $date,
                'jam_mulai' => '13:00',
                'jam_selesai' => '00:00',
                'deskripsi' => 'Evaluasi pelaksanaan program kerja.',
                'lokasi' => 'Aula BAPPERIDA'
            ],
        ];

        return view('layouts.show', compact('agenda', 'date'));
    }
}
