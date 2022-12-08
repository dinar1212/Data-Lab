<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tambahadmin extends Model
{
    use HasFactory;
    public $fillable = ['nip','nama','email','password','keterangan',];
    public function image()
    {
        if ($this->foto && file_exists(public_path('images/tambahadmin/' . $this->foto))) {
            return asset('images/tambahadmin/' . $this->foto);
        } else {
            return asset('images/no_image.jpg');
        }
    }
    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/tambahadmin/' . $this->foto))) {
            return unlink(public_path('images/tambahadmin/' . $this->foto));
        }
    }
  
}
