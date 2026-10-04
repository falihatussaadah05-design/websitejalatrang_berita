<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data berita lama agar tersisa 9 berita ini saja
        DB::table('beritas')->delete();

        DB::table('beritas')->insert([

            // 1
            [
                'judul' => 'Malam Penuh Gengsi Dimulai! 16 Tim Berebut Mahkota Juara di Ajang CVC Cup 2026 Desa Jalatrang',
                'kategori' => 'Olahraga',
                'isi' => 'Himpunan Pemuda-Pemudi Dusun Cikandung yang tergabung dalam Cikandung Voli Ball Club (CVC) menyelenggarakan CVC Cup 2026. Turnamen ini mempertemukan 16 tim yang siap bersaing memperebutkan gelar juara dalam pertandingan bola voli yang berlangsung meriah dan penuh semangat sportivitas.',
                'penulis' => 'Admin',
                'dilihat' => 317,
                'gambar' => null,
                'created_at' => '2026-09-26 10:00:00',
                'updated_at' => '2026-09-26 10:00:00',
            ],

            // 2
            [
                'judul' => 'Pemerintah Desa Jalatrang Kukuhkan Desa Siaga TB, Perkuat Kolaborasi Lintas Sektor Basmi Tuberkulosis',
                'kategori' => 'Pendidikan',
                'isi' => 'Pemerintah Desa Jalatrang memperkuat upaya pencegahan dan penanganan tuberkulosis melalui pengukuhan Desa Siaga TB. Kegiatan ini menjadi langkah untuk meningkatkan kepedulian masyarakat serta memperkuat kerja sama antara pemerintah, tenaga kesehatan, dan berbagai pihak terkait.',
                'penulis' => 'Admin',
                'dilihat' => 125,
                'gambar' => null,
                'created_at' => '2026-09-28 10:00:00',
                'updated_at' => '2026-09-28 10:00:00',
            ],

            // 3
            [
                'judul' => 'WAHANA JALATRANG MUDA Sabet Juara 1 Domba Cup 2026 Usai Taklukkan Perpu SDR Ciamis',
                'kategori' => 'Olahraga',
                'isi' => 'WAHANA JALATRANG MUDA berhasil meraih posisi juara dalam ajang Domba Cup 2026. Prestasi tersebut menjadi kebanggaan bagi masyarakat Desa Jalatrang sekaligus menunjukkan semangat dan kemampuan para pemain dalam menghadapi persaingan olahraga.',
                'penulis' => 'Admin',
                'dilihat' => 232,
                'gambar' => null,
                'created_at' => '2026-09-26 09:00:00',
                'updated_at' => '2026-09-26 09:00:00',
            ],

            // 4
            [
                'judul' => 'Jejak Inspiratif Elsa Nuari Hardiana: Srikandi Multitalenta di Balik Pemberdayaan dan Kemajuan Desa Jalatrang',
                'kategori' => 'Pendidikan',
                'isi' => 'Kisah Elsa Nuari Hardiana menjadi salah satu gambaran kontribusi perempuan dalam mendukung pemberdayaan masyarakat. Melalui berbagai kegiatan dan peran yang dijalankan, kiprahnya turut memberikan inspirasi dalam upaya mendorong kemajuan Desa Jalatrang.',
                'penulis' => 'Admin',
                'dilihat' => 198,
                'gambar' => null,
                'created_at' => '2026-09-24 10:00:00',
                'updated_at' => '2026-09-24 10:00:00',
            ],

            // 5
            [
                'judul' => 'Desa Jalatrang Gelar Sosialisasi Penyadaran Lingkungan Hidup dan Kehutanan: Hutan Lestari, Sampah Terkendali, Desa Jalatrang Menjadi Asri',
                'kategori' => 'Potensi',
                'isi' => 'Desa Jalatrang mengadakan kegiatan sosialisasi mengenai kepedulian terhadap lingkungan hidup dan kehutanan. Kegiatan ini mendorong masyarakat untuk menjaga kebersihan, mengelola sampah dengan baik, serta ikut mempertahankan kelestarian lingkungan desa.',
                'penulis' => 'Admin',
                'dilihat' => 176,
                'gambar' => null,
                'created_at' => '2026-09-09 10:00:00',
                'updated_at' => '2026-09-09 10:00:00',
            ],

            // 6
            [
                'judul' => 'Dorong Ketahanan Pangan, Tim PKM Universitas Galuh Terapkan Smart Eco-Agribusiness di Desa Jalatrang',
                'kategori' => 'Potensi',
                'isi' => 'Tim Pengabdian kepada Masyarakat Universitas Galuh melaksanakan kegiatan yang mendukung pengembangan ketahanan pangan di Desa Jalatrang. Penerapan konsep Smart Eco-Agribusiness diharapkan dapat membantu masyarakat mengembangkan sektor pertanian secara lebih inovatif dan berkelanjutan.',
                'penulis' => 'Admin',
                'dilihat' => 125,
                'gambar' => null,
                'created_at' => '2026-08-10 10:00:00',
                'updated_at' => '2026-08-10 10:00:00',
            ],

            // 7
            [
                'judul' => 'Pertahankan Gelar Juara, Jalatrang Muda FC Sabet Gelar Juara 1 Buniseuri Championship 2026',
                'kategori' => 'Olahraga',
                'isi' => 'Jalatrang Muda FC kembali menunjukkan prestasinya dalam ajang Buniseuri Championship 2026. Keberhasilan meraih juara menjadi bukti konsistensi tim dalam mempertahankan prestasi sekaligus membawa nama Desa Jalatrang di bidang olahraga.',
                'penulis' => 'Admin',
                'dilihat' => 301,
                'gambar' => null,
                'created_at' => '2026-08-04 10:00:00',
                'updated_at' => '2026-08-04 10:00:00',
            ],

            // 8
            [
                'judul' => 'Tingkatkan Kualitas Layanan Publik, FISIP Unpas dan Universitas Galuh Gelar Seminar Lokakarya Tata Kelola Pemerintahan Berbasis Digital di Ciamis',
                'kategori' => 'Pendidikan',
                'isi' => 'Seminar dan lokakarya mengenai tata kelola pemerintahan berbasis digital menjadi wadah untuk berbagi pengetahuan tentang peningkatan kualitas pelayanan publik. Kegiatan ini turut mendorong pemanfaatan teknologi dalam mendukung pemerintahan yang lebih efektif dan responsif.',
                'penulis' => 'Admin',
                'dilihat' => 181,
                'gambar' => null,
                'created_at' => '2026-08-04 09:00:00',
                'updated_at' => '2026-08-04 09:00:00',
            ],

            // 9
            [
                'judul' => 'Perluas Jangkauan Bank Sampah Jalatrang Berseka, Mahasiswa KKN UPI Gelar Sosialisasi di SDN 02 Jalatrang',
                'kategori' => 'Pendidikan',
                'isi' => 'Mahasiswa KKN UPI melaksanakan sosialisasi mengenai pengelolaan sampah melalui program Bank Sampah Jalatrang Berseka. Kegiatan yang dilakukan di SDN 02 Jalatrang ini menjadi bagian dari upaya mengenalkan kebiasaan menjaga lingkungan sejak dini kepada masyarakat sekolah.',
                'penulis' => 'Admin',
                'dilihat' => 150,
                'gambar' => null,
                'created_at' => '2026-07-23 10:00:00',
                'updated_at' => '2026-07-23 10:00:00',
            ],

        ]);
    }
}