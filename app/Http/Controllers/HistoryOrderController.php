<?php

namespace App\Http\Controllers;

use App\Models\HistoryOrder;
use Illuminate\Http\Request;

class HistoryOrderController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    
    public function index(){
        $data = HistoryOrder::with('konsumen', 'jenis_pembayaran', 'jenis_layanan')->get();

        return view('history-order.index', compact('data'));
    }
    
}
