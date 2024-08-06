<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataInventaris;
use App\Models\DataPemakaian;
use App\Models\DataPembelian;
use Illuminate\Http\Request;

class DashboardOperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventariss = DataInventaris::count();
        $barangs = DataBarang::count();
        $pembelians = DataPembelian::count();
        $pemakaians = DataPemakaian::count();
        
        $data = ([
            
            'inventaris' => $inventariss,
            'barang' => $barangs,
            'pembelian' => $pembelians,
            'pemakaian' => $pemakaians,
        ]);
        return view('operator', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
