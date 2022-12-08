<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Data_barang;

class Data_perbaikan extends Model
{
    use HasFactory;
    public $fillable = ['tanggal_perbaikan','nama_barang','kerusakan','kebutuhan_komputer','ket'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
      
    public function barang()
    {
        return $this->belongsTo(Data_barang::class);
    }
}

