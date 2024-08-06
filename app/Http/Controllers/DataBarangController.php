<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DataBarangController extends Controller
{
    public function barang(Request $request){
        $data = DataBarang::all();
        return view('databarang', compact('data'));
    }

    public function index()
    {
        return view('databarang');
    }

    public function create()
    {
        return view('databarangtambah');
    }

    public function store_barang(Request $request)
    {
        $barang = [
            'kode_barang'   =>  $request->kode_barang,
            'nama_barang'   =>  $request->nama_barang,
            'jenis_barang'  =>  $request->jenis_barang,
            'merk_type'     =>  $request->merk_type,
            'jumlah'        =>  $request->jumlah,
            'harga'         =>  $request->harga,
        ];

        DataBarang::create($barang);
        return redirect()->route('databarang')->with('success', 'Data Barang berhasil ditambahkan');
    }

    public function show_barang(string $id)
    {
        $data = DataBarang::findOrFail($id);
        return view('databarangedit', ['data' => $data]);
    }

    public function edit(string $id)
    {
        // Edit method content here if needed
    }

    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'merk_type' => 'required',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data = DataBarang::findOrFail($id);
        $data->kode_barang = $request->kode_barang;
        $data->nama_barang = $request->nama_barang;
        $data->jenis_barang = $request->jenis_barang;
        $data->merk_type = $request->merk_type;
        $data->jumlah = $request->jumlah;
        $data->harga = $request->harga;

        if ($data->save()) {
            return redirect()->route('databarang')->with('success', 'Data Barang berhasil diedit');
        } else {
            return redirect()->route('databarang')->with('fail', 'Data Barang gagal diedit');
        }
    }

    public function destroy($id)
    {
        $data = DataBarang::findOrFail($id);
        
        if ($data->delete()) {
            return redirect()->back()->with('success', 'Data Barang berhasil dihapus');
        } else {
            return redirect()->back()->with('fail', 'Data Barang gagal dihapus');
        }
    }
}
