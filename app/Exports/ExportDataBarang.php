<?php

namespace App\Exports;

use App\Models\DataBarang;
use Maatwebsite\Excel\Concerns\FromCollection;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportDataBarang implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $data =  DataBarang::select('kode_barang', 'nama_barang', 'jenis_barang', 'merk_type', 'jumlah', 'harga',)->orderBy('kode_barang', 'asc')->get();
        return $data;
    }

    public function title(): string
    {
        return 'Data Barang';
    }

    public function headings(): array
    {
        return [
            'Kode Barang',
            'Nama Barang',
            'Jenis Barang',
            'Merk/Type',
            'Jumlah',
            'Harga',
        ];
    }
    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:F1')->getFont()->setBold(true);
        $sheet->getStyle('A:F')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        // size sesuai value
        foreach (range('A', 'F') as $columnID) {
            $sheet->getColumnDimension($columnID)->setAutoSize(true);
        }
    }
}