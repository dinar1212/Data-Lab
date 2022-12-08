<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Data_barang;
class Laporan_perbaikan extends Model
{
    use HasFactory;

    public $timestamps = true;

    // public function data_barang()
    // {
    //     // data dari model 'Wali' bisa dimiliki
    //     // oleh model 'Siswa' melalui 'id_siswa'
    //     return $this->belongsTo(Data_barang::class, 'id_data_barang');
    // }
    
    public function barang()
    {
        return $this->belongsTo(Data_barang::class);
    }
}
