<?php

namespace Database\Seeders;

use App\Models\Berita;
use Illuminate\Database\Seeder;

class DummyBeritaSeeder extends Seeder
{
    public function run(): void
    {
        Berita::create([
            'judul' => 'Pelatihan Digital Desa Jalatrang Tingkatkan Keterampilan Masyarakat',
            'kategori' => 'Pendidikan',
            'gambar' => null,
            'isi' => 'Kegiatan pelatihan digital desa dilaksanakan untuk meningkatkan keterampilan masyarakat dalam memanfaatkan teknologi. Kegiatan ini diikuti oleh warga dan perangkat desa dengan antusias.',
            'penulis' => 'Admin Jalatrang',
            'tags' => 'Pendidikan, Desa, Teknologi, Jalatrang',
            'dilihat' => 0,
        ]);

        Berita::create([
            'judul' => 'Potensi UMKM Desa Jalatrang Terus Dikembangkan',
            'kategori' => 'Potensi',
            'gambar' => null,
            'isi' => 'Pengembangan potensi UMKM menjadi salah satu upaya untuk meningkatkan perekonomian masyarakat desa. Berbagai produk lokal terus didorong agar dapat berkembang dan dikenal lebih luas.',
            'penulis' => 'Admin Jalatrang',
            'tags' => 'UMKM, Potensi, Desa, Jalatrang',
            'dilihat' => 0,
            'created_at' => Carbon::now()->subYears(1),
            'updated_at' => Carbon::now()->subYears(1),
        ]);
    }
}