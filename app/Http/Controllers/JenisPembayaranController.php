<?php

namespace App\Http\Controllers;

use App\Models\JenisPembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JenisPembayaranController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index(){

        $data = JenisPembayaran::all();
        return view('jenis-pembayaran.index', compact('data'));
    }

    // public function store(Request $request)
    // {
    //     $data = JenisPembayaran::create([
    //         'nama' => $request->nama,
    //     ]);

    //     return redirect()->back();
    // }

    // public function update(Request $request,$id){
    //     $data = JenisPembayaran::find($id);
    //     $data->update([
    //         'nama' => $request->nama,
    //     ]);

    //     return redirect()->back();
    // }

    // public function destroy($id){
    //     $data = JenisPembayaran::find($id);
    //     $data->delete();

    //     return redirect()->back();
    //     $data = JenisPembayaran::all();

    //     return view('jenis-pembayaran.index', compact('data'));
    // }

    public function store(Request $request){

        $validator = Validator::make($request->all(), [
            'nm_jns_pembayaran' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        JenisPembayaran::create([
            'name' => $request->nm_jns_pembayaran
        ]);

        return redirect()->back();
    }

    public function update(Request $request, $id){
        $data = JenisPembayaran::find($id);

        $validator = Validator::make($request->all(), [
            'nm_jns_pembayaran' => 'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $data->update([
            'name' => $request->nm_jns_pembayaran
        ]);

        return redirect()->back();
    }

    public function destroy($id){
        JenisPembayaran::find($id)->delete();

        return redirect()->back();
    }
}
