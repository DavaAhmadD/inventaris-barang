<?php

namespace App\Http\Controllers;

use App\Exports\ExportDataBarang;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Maatwebsite\Excel\Facades\Excel;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // public function export_excel(){
    //     return Excel::download(new ExportDataBarang, "LaporanDataBarang.xlsx");
    // }
}
