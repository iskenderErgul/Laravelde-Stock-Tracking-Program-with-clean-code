<?php

namespace App\Repostory;

use App\Http\Requests\CustomerCreateRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Customer;

class CustomerRepository
{
    public function createCustomer(CustomerCreateRequest $request)
    {
        return Customer::create([
            'customer_nameSurname' => $request->customer_nameSurname,
            'customer_email' => $request->customer_email,
            'customer_phone' => $request->customer_phone,
            'customer_balance' => $request->customer_balance
        ]);
    }
    public function updateCustomer(CustomerUpdateRequest $request,$id)
    {
        return Customer::where('id',$id)
            ->update(
                [
                    'customer_nameSurname' => $request->customer_nameSurname,
                    'customer_email' => $request->customer_email,
                    'customer_phone' => $request->customer_phone,
                    'customer_balance' => $request->customer_balance

                ]
            );

    }

    public  function destroyCustomer($id)
    {
        $customer=Customer::find(intval($id));
        return $customer->delete();
    }
}
