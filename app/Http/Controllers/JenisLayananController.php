<?php

namespace App\Http\Controllers;

use App\Models\JenisLayanan;
use Illuminate\Http\Request;

class JenisLayananController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index(){

        $layanan = JenisLayanan::all();

        return view('jenis-layanan.index', compact('layanan'));
    }

    public function create() 
    {
        //
    }

    public function store(Request $request)
    {
        $isEdit = $request->id ? true : false;

        $rules = [
            'name' => 'required',
            'price' => 'required'
        ];

        $request->validate($rules);

        $data = [
            'name' => $request->name,
            'price' => $request->price
        ];

        if(!$isEdit) {
            $result = JenisLayanan::create($data);
        } else {
            $result = JenisLayanan::find($request->id)->update($data);

            if (!$result) {
                return redirect()->back()->with([
                    'status' => 'error',
                    'message' => 'Gagal update Layanan',
                ])->withInput();
            }
        }

        return redirect()->route('jenis-layanan.index')->with([
            'status' => 'success',
            'message' => $isEdit ? 'Berhasil edit Layanan' : 'Berhasil menambah Layanan'
        ]);
    }

    public function destroy($id)
    {
        $layanan = JenisLayanan::find($id);

        $layanan->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil hapus data.',
        ]);
    }
}
