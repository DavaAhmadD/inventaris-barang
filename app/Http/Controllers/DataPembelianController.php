<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use App\Models\DataPembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class DataPembelianController extends Controller
{

    public function pembelian(Request $request){
        $data = DataPembelian::all();
        return view('datapembelian', compact('data')

        );
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('datapembelian');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('datapembeliantambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_pembelian(Request $request)
    {
        $pembelian = ([
            'kode_barang'         =>  $request->kode_barang,
            'nama_barang'         =>  $request->nama_barang,
            'jenis_barang'        =>  $request->jenis_barang,
            'merk_type'           =>  $request->merk_type,
            'jumlah'              =>  $request->jumlah,
            'harga'               =>  $request->harga,
            'total'               =>  $request->jumlah * $request->harga,
        ]);

        $barang = DataBarang::where('kode_barang', $pembelian['kode_barang'])->first();
        if($barang !== null){
            $dataBarang = ([
                'kode_barang'         =>  $request->kode_barang,
                'nama_barang'         =>  $request->nama_barang,
                'jenis_barang'        =>  $request->jenis_barang,
                'merk_type'           =>  $request->merk_type,
                'jumlah'              =>  $request->jumlah + $barang->jumlah,
                'harga'               =>  $request->harga,
            ]);
            DataPembelian::create($pembelian);
            $barang->update($dataBarang);

            return redirect()->route('datapembelian')->with('success', 'Data Pembelian berhasil ditambahkan');
        } else{
            $dataBarang = ([
                'kode_barang'         =>  $request->kode_barang,
                'nama_barang'         =>  $request->nama_barang,
                'jenis_barang'        =>  $request->jenis_barang,
                'merk_type'           =>  $request->merk_type,
                'jumlah'              =>  $request->jumlah,
                'harga'               =>  $request->harga,
            ]);
            DataBarang::create($dataBarang);
            DataPembelian::create($pembelian);
            return redirect()->route('datapembelian')->with('success', 'Data Pembelian berhasil ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show_pembelian(string $id)
    {
        $data = DataPembelian::where('id',$id)->first();
       $data = DataPembelian::findOrFail($id);
        return view('datapembelianedit',[
            'data' => $data
        ]
        );
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
        $barang = DataBarang::where('kode_barang',$request->kode_barang)->first();
        $data = DataPembelian::findOrFail($id);

        $barang->jumlah = $barang->jumlah - $data->jumlah;
        $barang->save();
        
        $this->validate($request,[
            'jumlah' => 'required|integer',
        ]);

        $data->update([
            'jumlah' => $request->jumlah,
            'total' => $barang->harga * $request->jumlah,
        ],[
            'jumlah.required' => 'Jumlah Barang wajib diisi',
            'jumlah.integer' => 'Jumlah Barang wajib berisi angka',
        ]);

        if($data->update()){
            $barang->jumlah = $barang->jumlah + $request->jumlah;
            if($barang->jumlah){
                $barang->save();
                return redirect()->route('datapembelian')->with('success-update', 'Data Pembelian berhasil diedit');
            }
        }else{
            return redirect()->route('datapembelian')->with('fail', 'Data Pembelian gagal diedit');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = DataPembelian::findOrFail($id);
        

        if($data->delete()){
            return redirect()->back()->with('success', 'Data Pembelian berhasil dihapus');
        }else{
            return redirect()->back()->with('fail', 'Data Pembelian gagal dihapus');
        }
    }
}
