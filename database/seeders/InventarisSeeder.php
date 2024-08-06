<?php

namespace Database\Seeders;

use App\Models\DataInventaris;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inventaris1 = DataInventaris::updateOrCreate([
            'kode_barang' => 'K001',
            'jenis_barang' => 'Alat',
            'jumlah' => '10',
            'tanggal_pembelian' => '2024-05-20',
            'tanggal_pemakaian' => '2024-05-20',
            'penggunaan' => '1 kali',
            'ruang' => 'ruang kantor',
            'keterangan' => 'terpakai',
        ]);
    }
}
