<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komputer extends Model
{
    use HasFactory;
    public $fillable = ['keterangan','mouse', 'pc','monitor','keyboard','kabel_power','kabel_pga'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;
}
