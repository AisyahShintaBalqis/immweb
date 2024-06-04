<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'file_path'];

    // Tentukan aksesori untuk path gambar
    public function getPhotoUrlAttribute()
    {
        return asset('storage/' . $this->file_path);
    }
}
