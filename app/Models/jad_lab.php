<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kel_lab;

class jad_lab extends Model
{
    use HasFactory;
    // public $fillable = ['nama','hari','tanggal','jam','lantai','no_lab','kegiatan','tanggal_berakhir','keterangan'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    public function kel()
    {
        return $this->belongsTo(Kel_lab::class);
    }
}
