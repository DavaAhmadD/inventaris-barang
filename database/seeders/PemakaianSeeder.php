<?php

namespace Database\Seeders;

use App\Models\DataPemakaian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemakaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pemakaian1 = DataPemakaian::updateOrCreate([
            'nama_barang' => 'Pensil',
            'jumlah_pakai' => '3',
            'tanggal_pakai' => '2024-05-22',
            'pemakaian' => 'menulis',
            'keterangan' => 'tersisa',
        ]);
    }
}
