<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PemimpinController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index(){
        $data = User::whereHas('roles', function ($query) {
            $query->where('name', 'Pemimpin');
        })->get();

        return view('pemimpin.index', compact('data'));
    }

    public function store(Request $request){

        $pemimpin = User::craete([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $pemimpin->assignRole([3]);

        return redirect()->back();
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        
        if($request->password){
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }else{
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]); 
        }



        return redirect()->back();
    }

    public function destroy($id){
        User::find($id)->delete();

        return redirect()->back();
    }
}
