<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Data_barang;

class Laporan extends Model
{
    use HasFactory;
    // public $fillable = ['kode_peminjam','barang_id','nama_peminjam', 'tanggal_pinjam','jumlah','tanggal_kembali','contact'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
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
