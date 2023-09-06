<?php

namespace App\Exports;

use App\Models\Urun;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Facades\Excel;

class UrunlerExport implements FromCollection, WithHeadings
{
    public function collection(): Collection|\Illuminate\Support\Collection
    {
        return Urun::all();
    }

    public function headings(): array
    {
        return [
            'urun_id',
            'created_at',
            'updated_at',
            'urun_file',
            'ürün_ismi',
            'urun_fiyat',
            'stok_miktari',
            'urun_aciklama'
        ];
    }
}
