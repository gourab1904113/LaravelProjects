<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;
use PDO;

class CustomersController extends Controller
{
    public function list()
    {

        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();

        // return view('internals/customers', [
        //     'activeCustomers' => $activeCustomers,
        //     'inactiveCustomers' => $inactiveCustomers,
        // ]);

        return view('internals/customers', compact('activeCustomers','inactiveCustomers', 'companies'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'status' => 'required',
            'company_id' => 'required'
        ]);

        Customer::create($data);

        return back();
    }
}
