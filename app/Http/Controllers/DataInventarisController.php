<?php

namespace App\Http\Controllers;

use App\Models\DataInventaris;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DataInventarisController extends Controller
{

    public function inventaris(Request $request){
        $data = DataInventaris::all();
        return view('datainventaris', compact('data')

        );
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('datainventaris');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('datainventaristambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store_inventaris(Request $request)
    {
        $inventaris = ([
            'kode_barang'         =>  $request->kode_barang,
            'jenis_barang'        =>  $request->jenis_barang,
            'jumlah'              =>  $request->jumlah,
            'tanggal_pembelian'   =>  $request->tanggal_pembelian,
            'tanggal_pemakaian'   =>  $request->tanggal_pemakaian,
            'penggunaan'          =>  $request->penggunaan,
            'ruang'               =>  $request->ruang,
            'keterangan'          =>  $request->keterangan,
        ]);

        DataInventaris::create($inventaris);
        return redirect()->route('datainventaris');
    }

    /**
     * Display the specified resource.
     */
    public function show_inventaris(string $id)
    {
       $data = DataInventaris::where('id',$id)->first();
       $data = DataInventaris::findOrFail($id);
        return view('datainventarisedit',[
            'data' => $data
        ]
    );
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {

    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),[        
        ]);
    
        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $data = DataInventaris::find($id);
        $data->kode_barang       = $request->kode_barang;
        $data->jenis_barang      = $request->jenis_barang;
        $data->jumlah            = $request->jumlah;
        $data->tanggal_pembelian = $request->tanggal_pembelian;
        $data->tanggal_pemakaian = $request->tanggal_pemakaian;
        $data->penggunaan        = $request->penggunaan;
        $data->ruang             = $request->ruang;
        $data->keterangan        = $request->keterangan;
        
        if($data->save()){
            return redirect()->route('datainventaris')->with('success-update', 'Data Inventaris berhasil diedit');        
        }
        else{
            return redirect()->route('datainventaris')->with('fail', 'Data Inventaris gagal diedit');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = DataInventaris::findOrFail($id);
        

        if($data->delete()){
            return redirect()->back()->with('success-delete', 'Data Inventaris berhasil dihapus');
        }else{
            return redirect()->back()->with('fail', 'Data Inventaris gagal dihapus');
        }
    }
}
