<?php

namespace Database\Seeders;

use App\Models\DataPembelian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pembelian1 = DataPembelian::updateOrCreate([
            'kode_barang' => 'K001',
            'nama_barang' => 'Laptop',
            'jenis_barang' => 'Elektronik',
            'merk_type' => 'Asus',
            'jumlah' => '23',
            'harga' => '5000000',
            'total' => '115000000',
        ]);
    }
}
