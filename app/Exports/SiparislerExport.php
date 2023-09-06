<?php

namespace App\Exports;

use App\Models\Musteri;
use App\Models\Siparis;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Facades\Excel;

class SiparislerExport implements FromCollection, WithHeadings
{
    public function collection(): Collection|\Illuminate\Support\Collection
    {
        return Siparis::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'musteri_id',
            'urun_id',
            'siparis_durumu',
            'created_at',
            'updated_at',

        ];
    }
}
