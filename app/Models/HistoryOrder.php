<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function konsumen()
    {
        return $this->belongsTo(Konsumen::class, 'id_konsumen', 'id');
    }

    public function jenis_pembayaran()
    {
        return $this->belongsTo(JenisPembayaran::class, 'id_jenis_pembayaran', 'id');
    }
    
    public function jenis_layanan()
    {
        return $this->belongsTo(JenisLayanan::class, 'id_jenis_layanan', 'id');
    }
}
