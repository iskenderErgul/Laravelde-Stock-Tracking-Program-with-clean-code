<?php

namespace App\Exports;

use App\Models\Musteri;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Facades\Excel;

class MusterilerExport implements FromCollection, WithHeadings
{
    public function collection(): Collection|\Illuminate\Support\Collection
    {
        return Musteri::all();
    }

    public function headings(): array
    {
        return [
            'musteri_id',
            'created_at',
            'updated_at',
            'musteri_ad',
            'musteri_soyad',
            'musteri_email',

        ];
    }
}
