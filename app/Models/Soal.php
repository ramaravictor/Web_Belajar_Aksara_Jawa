<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;
    protected $fillable = ['kategori_id', 'title', 'image', 'body'];

    public function Nilai()
    {
        return $this->hasMany(Nilai::class);
    }

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

    
}
