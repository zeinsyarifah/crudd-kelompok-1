<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bukus')->insert([
            'kode_buku' => 'BK-00001',
            'judul' => 'Manajemen Buku Perpustakaan',
            'kategori' => 'Teknologi',
            'penulis' => 'Ahmad',
            'tahun_terbit' => 2024,
            'jumlah' => 10,
            'keterangan' => 'Buku panduan dasar Manajemen Buku Perpustakaan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Buku::factory()->count(20)->create();
    }
}
