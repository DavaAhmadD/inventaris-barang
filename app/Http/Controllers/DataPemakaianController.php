<?php

namespace App\Http\Controllers;

use App\Models\DataPemakaian;
use App\Models\DataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataPemakaianController extends Controller
{
    public function pemakaian(Request $request){
        $data = DataPemakaian::all();
        return view('datapemakaian', compact('data'));
    }

    public function index()
    {
        return view('datapemakaian');
    }

    public function create()
    {
        $barang = DataBarang::all();
        return view('datapemakaiantambah', compact('barang'));
    }

    public function store_pemakaian(Request $request)
    {
        $pemakaian = [
            'nama_barang'   => $request->nama_barang,
            'jumlah_pakai'  => $request->jumlah_pakai,
            'tanggal_pakai' => $request->tanggal_pakai,
            'pemakaian'     => $request->pemakaian,
            'keterangan'    => $request->keterangan,
        ];
    
        $barang = DataBarang::where('nama_barang', $pemakaian['nama_barang'])->first();
    
        if ($barang) {
            $newJumlah = $barang->jumlah - $pemakaian['jumlah_pakai'];
    
            if ($newJumlah < 0) {
                return redirect()->route('datapemakaian')->with('fail', 'Jumlah barang tidak mencukupi.');
            }
    
            $barang->update(['jumlah' => $newJumlah]);
    
            DataPemakaian::create($pemakaian);
    
            return redirect()->route('datapemakaian')->with('success', 'Data pemakaian berhasil ditambahkan.');
        } else {
            return redirect()->route('datapemakaian')->with('fail', 'Barang tidak ditemukan.');
        }
    }

    public function show_pemakaian(string $id)
    {
        $data = DataPemakaian::findOrFail($id);
        $barang = DataBarang::all();
        return view('datapemakaianedit', compact('data', 'barang'));
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_barang'   => 'required',
            'jumlah_pakai'  => 'required|integer',
            'tanggal_pakai' => 'required|date',
            'pemakaian'     => 'required',
            'keterangan'    => 'nullable|string',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
    
        $data = DataPemakaian::find($id);
    
        if (!$data) {
            return redirect()->route('datapemakaian')->with('fail', 'Data Pemakaian tidak ditemukan');
        }
    
        $barang = DataBarang::where('nama_barang', $data->nama_barang)->first();
    
        if ($barang) {
            $barang->jumlah += $data->jumlah_pakai;
            $barang->save();
        } else {
            return redirect()->route('datapemakaian')->with('fail', 'Barang tidak ditemukan');
        }
    
        $data->update($request->all());
    
        $barang->jumlah -= $request->jumlah_pakai;
    
        if ($barang->jumlah < 0) {
            return redirect()->route('datapemakaian')->with('fail', 'Jumlah barang tidak mencukupi.');
        }
    
        $barang->save();
    
        return redirect()->route('datapemakaian')->with('success', 'Data Pemakaian berhasil diedit');
    }

    public function destroy($id)
    {
        $data = DataPemakaian::findOrFail($id);

        if ($data->delete()) {
            return redirect()->back()->with('success', 'Data Pemakaian berhasil dihapus');
        } else {
            return redirect()->back()->with('fail', 'Data Pemakaian gagal dihapus');
        }
    }
}
