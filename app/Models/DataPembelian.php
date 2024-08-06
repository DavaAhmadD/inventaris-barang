<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPembelian extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'data_pembelian';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'jenis_barang',
        'merk_type',
        'jumlah',
        'harga',
        'total',
    ];

}
