<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use PDO;

class CustomersController extends Controller
{
    public function list()
    {

        $customers = Customer::all();

        return view('internals/customers', [
            'customers' => $customers,
        ]);
    }

    public function store()
    {


        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->save();


        return back();
    }
}
