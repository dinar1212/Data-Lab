<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Jad_lab;

class kel_lab extends Model
{
    use HasFactory;
    public $fillable = ['lantai','lab', 'no_lab'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif
    public $timestamps = true;

    public function jad_lab()
    {
        return $this->hasMany(Jad_lab::class);
    }

}
