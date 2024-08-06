<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataInventaris extends Model
{
    use HasFactory;

    protected $table = 'data_inventaris';

    protected $fillable = [
        'kode_barang',
        'jenis_barang',
        'jumlah',
        'tanggal_pembelian',
        'tanggal_pemakaian',
        'penggunaan',
        'ruang',
        'keterangan',
    ];

    protected $casts = [
        'tanggal_pembelian' => 'date',
        'tanggal_pemakaian' => 'date',
    ];
}
