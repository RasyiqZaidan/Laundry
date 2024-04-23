<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisLayanan extends Model
{
    use HasFactory;

    protected $table = 'jenis_layanans';
    protected $fillable = ['name', 'price'];

    public function history_order()
    {
        return $this->hasMany(HistoryOrder::class, 'id_jenis_layanan', 'id');
    }
}
