<?php

namespace App\Http\Controllers;

use App\Models\HistoryOrder;
use Illuminate\Http\Request;

class MainController extends Controller
{   
    public function index(){

        $data = HistoryOrder::with('konsumen', 'jenis_pembayaran', 'jenis_layanan')->get();
        
        return view('welcome', compact('data'));
    }
}
