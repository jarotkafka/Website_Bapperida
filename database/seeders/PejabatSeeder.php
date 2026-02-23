<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pejabat;

class PejabatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pejabat = [
            [
                'nama' => 'Rudy Mashudi, S.T., M.P.',
                'jabatan' => 'Kepala BAPPERIDA',
                'foto' => 'rudy.jpg',
                'nip' => '197707062006041018',
                'urutan' => 1,
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'nama' => 'Agnes Andriani Kartika Sari, S.Hut., M.T., M.Sc.',
                'jabatan' => 'Sekretaris BAPPERIDA',
                'foto' => 'agnes.jpg',
                'nip' => '197408141999032008',
                'urutan' => 2,
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'nama' => 'Naufal Isnaeni, S.Si., M.T.',
                'jabatan' => 'Kepala Bidang Perencanaan',
                'foto' => 'naufal.jpg',
                'nip' => '197410212006041009',
                'urutan' => 3,
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'nama' => 'Sofie Linawati, S.T., M.M.',
                'jabatan' => 'Kepala Bidang Perekonomian',
                'foto' => 'sofie.jpg',
                'nip' => '197411232006042012',
                'urutan' => 4,
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
            [
                'nama' => 'Ara Wiraswara, S.E.',
                'jabatan' => 'Kepala Bidang Pemerintahan',
                'foto' => 'ara.jpg',
                'nip' => '198110022009021002',
                'urutan' => 5,
                'created_by' => 'admin',
                'updated_by' => 'admin',
            ],
        ];

        foreach ($pejabat as $item) {
            Pejabat::create($item);
        }
    }
}
