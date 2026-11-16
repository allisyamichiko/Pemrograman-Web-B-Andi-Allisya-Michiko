<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    public function run(): void
    {
        $daftarBuku = [
            [
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'tahun_terbit' => 2005,
                'sinopsis' => 'Kisah perjuangan anak-anak Belitung dalam mendapatkan pendidikan.',
            ],
            [
                'judul' => 'Bumi',
                'penulis' => 'Tere Liye',
                'tahun_terbit' => 2014,
                'sinopsis' => 'Petualangan tiga sahabat dalam dunia paralel.',
            ],
            [
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'tahun_terbit' => 2009,
                'sinopsis' => 'Kisah enam santri yang mengejar cita-cita mereka.',
            ],
            [
                'judul' => 'Perahu Kertas',
                'penulis' => 'Dee Lestari',
                'tahun_terbit' => 2009,
                'sinopsis' => 'Cerita tentang persahabatan, cinta, dan impian.',
            ],
            [
                'judul' => 'Hujan',
                'penulis' => 'Tere Liye',
                'tahun_terbit' => 2016,
                'sinopsis' => 'Kisah tentang perjalanan hidup, kehilangan, dan kenangan.',
            ],
        ];

        foreach ($daftarBuku as $buku) {
            Buku::create($buku);
        }
    }
}
