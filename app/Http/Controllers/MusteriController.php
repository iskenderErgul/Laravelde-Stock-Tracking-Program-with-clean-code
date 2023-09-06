<?php

namespace App\Http\Controllers;

use App\Http\Requests\MuseriCreateRequest;
use App\Http\Requests\MuseriUpdateRequest;
use App\Models\Musteri;
use App\Repostory\MusteriRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;


class MusteriController extends Controller
{
    public MusteriRepository $musteriRepository;

    public function __construct(MusteriRepository $musteriRepository)
    {
        $this->musteriRepository =$musteriRepository;
    }

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $data['musteri'] = Musteri::all();
        return view('backend.musteriler.index', compact('data'));
    }

    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {

        return view('backend.musteriler.create');
    }

    public function store(MuseriCreateRequest $request): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $this->musteriRepository->createMusteri($request);
            return redirect(route('musteri.Index'));
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }


    }

    public function edit($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $musteri = Musteri::where('id', $id)->first();
        return \view('backend.musteriler.edit', compact('musteri'));
    }


    public function update(MuseriUpdateRequest $request, $id): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $this->musteriRepository->updateMusteri($request, $id);
            return redirect(route('musteri.Index'));
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
//
    public function destroy($id): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $this->musteriRepository->destroyMusteri($id);
            return redirect(route('musteri.Index'));
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

    }
}
