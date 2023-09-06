<?php

namespace App\Http\Controllers;

use App\Http\Requests\SiparisCreateRequest;
use App\Http\Requests\SiparisUpdateRequest;
use App\Models\Musteri;
use App\Models\Siparis;
use App\Models\Urun;
use App\Repostory\SiparisRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class SiparisController extends Controller
{
    public SiparisRepository $siparisRepository;

    public function __construct(SiparisRepository $siparisRepository)
    {
        $this->siparisRepository = $siparisRepository;
    }

    public  function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $data['siparis']=Siparis::all();
        return view('backend.siparisler.index',compact('data'));
    }

    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

        $musteriler = Musteri::all();
        $urunler = Urun::all();

        return view('backend.siparisler.create', compact('musteriler', 'urunler'));

    }

    public function store(SiparisCreateRequest $request): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $this->siparisRepository->createSiparis($request);
            return  redirect(route('siparis.Index'));
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    public function edit($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $musteriler = Musteri::all();
        $urunler = Urun::all();
        $siparis = Siparis::where('id', $id)->first();
        return \view('backend.siparisler.edit', compact('siparis','musteriler','urunler'));
    }

    public function update(SiparisUpdateRequest $request,$id): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $this->siparisRepository->updateSiparis($request,$id);
            return redirect(route('siparis.Index'));
        }catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }

    public function destroy($id): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $this->siparisRepository->destroySiparis($id);
            return redirect(route('siparis.Index'));
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}
