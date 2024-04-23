<?php

namespace App\Http\Controllers;

use App\Models\Konsumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KonsumenController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index()
    {
        $konsumen = Konsumen::latest()->get();
        
        return view('konsumen.index', compact('konsumen'));
    }
    
    public function store(Request $request)
    {
        $isEdit = $request->id ? true : false;
        
        $rules = [
            'name' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ];
        
        $request->validate($rules);
        
        $data = [
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ];
        
        if(!$isEdit) {
            $data['kode'] = 'KSN-' . date('dmy');
            
            $result = Konsumen::create($data);
            $id = $result->id;
            
            $kode = 'KSN-' . $id . date('dmy');
            
            $result = Konsumen::where('id', $id)->update(['kode' => $kode]);
        } else {
            $result = Konsumen::find($request->id)->update($data);
            
            if(!$result) {
                return redirect()->back()->with([
                    'status' => 'error',
                    'message' => 'Gagal Update Konsumen,'
                ])->withInput();
            }
        }
        
        return redirect()->back()->with([
            'status' => 'success',
            'message' => $isEdit ? 'Berhasil edit Konsumen' : 'Berhasil menambah Konsumen',
        ]);
    }

    public function destroy($id)
    {
        $data = Konsumen::find($id);

        $data->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Berhasil hapus data.',
        ]);
    }
}
    