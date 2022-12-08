<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan_barang extends Model
{
    use HasFactory;

    public $timestamps = true;

    // public function data_barang()
    // {
    //     // data dari model 'Wali' bisa dimiliki
    //     // oleh model 'Siswa' melalui 'id_siswa'
    //     return $this->belongsTo(Data_barang::class, 'id_data_barang');
    // }
    
   
}
