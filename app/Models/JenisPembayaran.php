<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisPembayaran extends Model
{
    use HasFactory;

    protected $table = 'jenis_pembayarans';
    protected $fillable = [
        'name'
    ];

    public function history_order()
    {
        return $this->hasMany(HistoryOrder::class, 'id_jenis_pembayaran', 'id');
    }
}
