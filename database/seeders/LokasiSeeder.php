<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LokasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasis = [
            ['nama_lokasi' => 'Jepang'],
            ['nama_lokasi' => 'Weleri'],
            ['nama_lokasi' => 'Jetis'],
        ];

        foreach ($lokasis as $lokasi) {
            Lokasi::firstOrCreate(['nama_lokasi' => $lokasi['nama_lokasi']]);
        }
    }
}
