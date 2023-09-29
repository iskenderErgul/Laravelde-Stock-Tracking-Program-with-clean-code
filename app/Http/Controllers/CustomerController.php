<?php

namespace App\Http\Controllers;

use App\Exports\CustomersExport;
use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Customer;
use App\Repostory\CustomerRepository;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public CustomerRepository $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository =$customerRepository;
    }

    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $data['customer'] = Customer::all();
        return view('backend.customers.index',compact('data'));
    }

    public function create(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('backend.customers.create');
    }

    public function store(CustomerCreateRequest $request): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $this->customerRepository->createCustomer($request);
            return redirect(route('customer.index'));
        }catch (\Exception  $exception)
        {
            return $exception->getMessage();
        }
    }
    public function  edit($id): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $customer = Customer::where('id',$id)->first();
        return \view('backend.customers.edit',compact('customer'));
    }

    public function update(CustomerUpdateRequest $request,$id): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $this->customerRepository->updateCustomer($request,$id);
            return redirect(route('customer.index'));
        } catch (\Exception  $exception)
        {
            return $exception->getMessage();
        }
    }

    public function destroy($id): Application|Redirector|string|RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        try {
            $this->customerRepository->destroyCustomer($id);
            return redirect(route('customer.index'));
        }catch (\Exception  $exception)
        {
            return $exception->getMessage();
        }
    }

    public function exportCustomer(): \Symfony\Component\HttpFoundation\BinaryFileResponse
    {
        $export = new CustomersExport();
        return Excel::download($export, 'customers.xlsx');
    }





}






















