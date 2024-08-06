<?php

namespace Database\Seeders;

use App\Models\DataBarang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang1 = DataBarang::updateOrCreate([
            'kode_barang' => 'K001',
            'nama_barang' => 'Laptop',
            'jenis_barang' => 'Elektronik',
            'merk_type' => 'Asus',
            'jumlah' => '23',
            'harga' => '5000000',
        ]);
    }
}
