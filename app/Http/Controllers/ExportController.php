<?php

namespace App\Http\Controllers;

use App\Exports\MusterilerExport;
use App\Exports\SiparislerExport;
use App\Exports\UrunlerExport;
use App\Models\Siparis;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function index()
    {
        return view('backend.raporlama.index');
    }

    public function exportUrun()
    {
        $export = new UrunlerExport();
        return Excel::download($export, 'urunler.xlsx');
    }
    public function exportMusteri()
    {
        $export = new MusterilerExport();
        return Excel::download($export, 'musteriler.xlsx');
    }
    public function exportSiparis()
    {
        $export = new SiparislerExport();
        return Excel::download($export, 'siparisler.xlsx');
    }
}
