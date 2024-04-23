<?php

namespace App\Http\Controllers;

use App\Models\HistoryOrder;
use App\Models\JenisLayanan;
use App\Models\JenisPembayaran;
use App\Models\Konsumen;
use Illuminate\Http\Request;

class TransaksiOrderController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index(){
        $konsumen = Konsumen::orderBy('created_at', 'desc')->get();

        return view('transaksi-order.index', compact('konsumen'));
    }

    public function casier(Request $request, $id){
        $konsumen = Konsumen::find($id);
        $jns_layanan = JenisLayanan::all();
        $jns_pembayaran = JenisPembayaran::all();

        return view('transaksi-order.casier', compact('konsumen', 'jns_layanan', 'jns_pembayaran'));
    }

    public function detailOrder($id_jns_layanan, $total_berat){

        if(isset($id_jns_layanan) && isset($total_berat)){
            $jns_layanan = JenisLayanan::find($id_jns_layanan)->value('price');

            $total_harga = $jns_layanan * $total_berat;
        }else{
            $total_harga = 0;
        }

        return response()->json($total_harga);
    }

    public function store(Request $request){
        $data = HistoryOrder::create([
            'tanggal' => date('Y-m-d'),
            'id_konsumen' => $request->id_konsumen,
            'id_jenis_pembayaran' => $request->id_jns_pembayaran,
            'id_jenis_layanan' => $request->id_jns_layanan,
            'total_berat' => $request->total_berat,
            'total_harga' => $request->total_harga,
            'status' => $request->status
        ]);

        return redirect()->back();
    }

    public function update(){
        $data = HistoryOrder::find($id);

        $validator = Validator::make($request->all(), [
            'status' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data->update([
            'status' => $request->status
        ]);

        return redirect()->back();  
    }
    public function destroy($id){
        HistoryOrder::find($id)->delete();

        return redirect()->back();
    }
}
