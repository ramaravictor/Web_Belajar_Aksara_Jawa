<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    // public function materi()
    // {
    //     return $this->hasMany(materi::class);
    // }
    
    public function soal()
    {
        return $this->hasMany(soal::class);
    }
}
