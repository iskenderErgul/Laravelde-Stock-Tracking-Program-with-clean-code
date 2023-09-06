<?php

namespace App\Http\Controllers;

use App\Http\Requests\UrunCreateRequest;
use App\Http\Requests\UrunUpdateRequest;
use App\Models\Urun;
use App\Repostory\UrunRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;


class UrunController extends Controller
{
    public UrunRepository $urunRepository;

    public function __construct(UrunRepository $urunRepository)
    {
        $this->urunRepository = $urunRepository;
    }

    public  function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $data['urun'] = Urun::all();
        return view('backend.urunler.index',compact('data'));
    }

    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

        return view('backend.urunler.create');
    }

    public function store(UrunCreateRequest $request): string
    {
        try {
            $this->urunRepository->CreateUrun($request);
            return redirect(route('urun.Index'));
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }


    }

    public function edit($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $urun=Urun::where('id', $id)->first();
        return \view('backend.urunler.edit',compact('urun'));
    }

    public function update(UrunUpdateRequest $request ,$id): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $this->urunRepository->UpdateUrun($request,$id);
            return redirect(route('urun.Index'));
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }
    }

    public function destroy($id): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {


        try {
            $this->urunRepository->DestroyUrun($id);
            return redirect(route('urun.Index'));
        }catch (\Exception $exception)
        {
            return $exception->getMessage();
        }

    }



}
