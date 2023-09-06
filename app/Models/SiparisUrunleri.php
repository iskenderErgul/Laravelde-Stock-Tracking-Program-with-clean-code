<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiparisUrunleri extends Model
{
    use HasFactory;

    protected $table = 'siparis_urunleri';

    protected $fillable = [
        'siparis_id', 'urun_id', 'miktar'
    ];

    public function siparis()
    {
        return $this->belongsTo(Siparis::class);
    }

    public function urun()
    {
        return $this->belongsTo(Urun::class);
    }
}
