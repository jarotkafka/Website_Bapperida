<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PejabatController extends Controller
{
    public function getAllForSearch()
    {
        $pejabatData = [
            // Halaman 1
            ['nama' => 'Rudy Mashudi, S.T., M.P.', 'nip' => '197707062006041018', 'jabatan' => 'Kepala BAPPERIDA', 'foto' => '/image/rudy.jpg', 'pageUrl' => '/pejabat'],
            ['nama' => 'Agnes Andriani Kartika Sari, S.Hut., M.T., M.Sc.', 'nip' => '197408141999032008', 'jabatan' => 'Sekretaris BAPPERIDA', 'foto' => '/image/agnes.jpg', 'pageUrl' => '/pejabat'],
            ['nama' => 'Naufal Isnaeni, S.Si., M.T.', 'nip' => '197410212006041009', 'jabatan' => 'Kepala Bidang Perencanaan, Pengendalian dan Evaluasi Pembangunan Daerah', 'foto' => '/image/naufal.jpg', 'pageUrl' => '/pejabat'],
            ['nama' => 'Sofie Linawati, S.T., M.M.', 'nip' => '197411232006042012', 'jabatan' => 'Kepala Bidang Perekonomian, Sumber Daya Alam, Infrastruktur dan Kewilayahan', 'foto' => '/image/sofie.jpg', 'pageUrl' => '/pejabat'],
            ['nama' => 'Ara Wiraswara, S.E.', 'nip' => '198110022009021002', 'jabatan' => 'Kepala Bidang Pemerintahan dan Pembangunan Manusia', 'foto' => '/image/ara.jpg', 'pageUrl' => '/pejabat'],
            ['nama' => 'Irma Arlini Dewi, S.T.P., M.Sc.', 'nip' => '197405021999012001', 'jabatan' => 'Kepala Bidang Penelitian dan Pengembangan', 'foto' => '/image/irma.jpg', 'pageUrl' => '/pejabat'],
            ['nama' => 'Sissy Lusiyanti Saptalia, S.E., M.SE.', 'nip' => '197209091999012001', 'jabatan' => 'Kasubag Umum dan Kepegawaian', 'foto' => '/image/sissy.jpg', 'pageUrl' => '/pejabat'],
            ['nama' => 'Sakti Aditya, S.H., M.M.', 'nip' => '198209302011011001', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/sakti.jpg', 'pageUrl' => '/pejabat'],
            ['nama' => 'Yanti Heryanti, S.E., M.M.', 'nip' => '196910051996032000', 'jabatan' => 'Analis Keuangan Pusat dan Daerah Ahli Muda', 'foto' => '/image/yanti.jpg', 'pageUrl' => '/pejabat'],

            // Halaman 2
            ['nama' => 'Febby Lestari, S.P.', 'nip' => '198402182011012008', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/febby.jpg', 'pageUrl' => '/pejabat/page2'],
            ['nama' => 'Drie Sarwiedi S., S.P., M.Si', 'nip' => '197303142003121005', 'jabatan' => 'Perencana Ahli Madya', 'foto' => '/image/drie.jpg', 'pageUrl' => '/pejabat/page2'],
            ['nama' => 'Ratu Vivi Silviani, S.T., M.Si.', 'nip' => '197807302007012005', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/ratu.jpg', 'pageUrl' => '/pejabat/page2'],
            ['nama' => 'Lusi Nurbaiti Badri, S.T., M.Si.', 'nip' => '197609152002122003', 'jabatan' => 'Analis Kebijakan Ahli Muda', 'foto' => '/image/lusi.jpg', 'pageUrl' => '/pejabat/page2'],
            ['nama' => 'Oni Hidayati, S.Pi., M.Si', 'nip' => '197404282006042018', 'jabatan' => 'Analis Kebijakan Ahli Muda', 'foto' => '/image/oni.jpg', 'pageUrl' => '/pejabat/page2'],
            ['nama' => 'Inolasari, S.T., M.T', 'nip' => '197207061999032007', 'jabatan' => 'Perencana Ahli Madya', 'foto' => '/image/inolasari.jpg', 'pageUrl' => '/pejabat/page2'],
            ['nama' => 'Fitri Hidayati, S.E.', 'nip' => '197512182006042025', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/fitri.jpg', 'pageUrl' => '/pejabat/page2'],
            ['nama' => 'Ratih Gustiani, S.Si., MM.', 'nip' => '198207172010012021', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/ratih.jpg', 'pageUrl' => '/pejabat/page2'],
            ['nama' => 'Uvi Mitra Vienny, S.E., Ak., M.E.', 'nip' => '197506292006042000', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/uvi.jpg', 'pageUrl' => '/pejabat/page2'],

            // Halaman 3
            ['nama' => 'Sumaryanto, S.Pd., M.Si.', 'nip' => '197509242005011007', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/sumaryanto.jpg', 'pageUrl' => '/pejabat/page3'],
            ['nama' => 'Odih Sumirat, S.E., M.M.', 'nip' => '196906132007011012', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/odih.jpg', 'pageUrl' => '/pejabat/page3'],
            ['nama' => 'Azhar Ginandjar, A.S., S.T., S.Sos., M.M', 'nip' => '197007092005011018', 'jabatan' => 'Perencana Ahli Madya', 'foto' => '/image/azhar.jpg', 'pageUrl' => '/pejabat/page3'],
            ['nama' => 'Ratu Desy Savitri, S.T., M.T', 'nip' => '196912142002122001', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/ratudesy.jpg', 'pageUrl' => '/pejabat/page3'],
            ['nama' => 'Yeyen Esva Respati, S.E., M.Ec.Dev.', 'nip' => '198202252006042015', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/yeyen.jpg', 'pageUrl' => '/pejabat/page3'],
            ['nama' => 'Erni Solikhati, S.E', 'nip' => '197212161994032005', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/erni.jpg', 'pageUrl' => '/pejabat/page3'],
            ['nama' => 'Abdul Haris, S.T.', 'nip' => '197810022009021001', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/abdul.jpg', 'pageUrl' => '/pejabat/page3'],
            ['nama' => 'Dadang Komarudin, S.E., M.M.', 'nip' => '197404161999011001', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/dadang.jpg', 'pageUrl' => '/pejabat/page3'],
            ['nama' => 'Ati Fatimah, S.IP.', 'nip' => '198308302002122001', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/ati.jpg', 'pageUrl' => '/pejabat/page3'],

            // Halaman 4
            ['nama' => 'Dwi Udayani, S.T.', 'nip' => '197512182006042025', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/dwi_udayani.jpg', 'pageUrl' => '/pejabat/page4'],
            ['nama' => 'Eko Setiyo, S.P.', 'nip' => '197303142003121005', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/eko.jpg', 'pageUrl' => '/pejabat/page4'],
            ['nama' => 'Bayu Wijoseno, S.T.', 'nip' => '197807302007012005', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/bayu.jpg', 'pageUrl' => '/pejabat/page4'],
            ['nama' => 'Agus Munawar, S.E.', 'nip' => '197609152002122003', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/agus.jpg', 'pageUrl' => '/pejabat/page4'],
            ['nama' => 'Ridwan Adithiansyah, S.T.', 'nip' => '197404282006042018', 'jabatan' => 'Perencana Ahli Muda', 'foto' => '/image/ridwan.jpg', 'pageUrl' => '/pejabat/page4']
        ];

        return response()->json($pejabatData);
    }
}
