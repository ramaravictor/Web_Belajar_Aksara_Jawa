<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nilai extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','soal_id', 'jawab_image', 'nilai', 'kompetensi', 'ustadz'];

    public function Soal()
    {
        return $this->belongsTo(Soal::class);
    }
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
