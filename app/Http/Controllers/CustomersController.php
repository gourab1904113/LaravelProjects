<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use PDO;

class CustomersController extends Controller
{
    public function list()
    {

        $activeCustomers = Customer::where('status', 1)->get();
        $inactiveCustomers = Customer::where('status',0)->get();

        // return view('internals/customers', [
        //     'activeCustomers' => $activeCustomers,
        //     'inactiveCustomers' => $inactiveCustomers,
        // ]);

        return view('internals/customers', compact('activeCustomers','inactiveCustomers'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'status' => 'required'
        ]);



        $customer = new Customer();
        $customer->name = request('name');
        $customer->email = request('email');
        $customer->status = request('status');
        $customer->save();


        return back();
    }
}
