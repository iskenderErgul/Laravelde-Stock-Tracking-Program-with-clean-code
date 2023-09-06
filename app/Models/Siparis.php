<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siparis extends Model
{
    use HasFactory;

    protected $table = 'siparisler';


    protected $guarded=[];

    public function musteri()
    {
        return $this->belongsTo(Musteri::class);
    }

    public function urun()
    {
        return $this->belongsTo(Urun::class);
    }
}
