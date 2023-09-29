<?php

namespace App\Exports;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Facades\Excel;

class CustomersExport implements FromCollection, WithHeadings
{
    public function collection(): Collection|\Illuminate\Support\Collection
    {
        return Customer::all();
    }

    public function headings(): array
    {
        return [
            'CustomersId',
            'created_at',
            'updated_at',
            'CustomerFile',
            'CustomerNameSurname',
            'CustomerEmail',
            'CustomerPhone',
            'CustomerBalance',

        ];
    }
}
