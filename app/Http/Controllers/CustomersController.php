<?php

namespace App\Http\Controllers;

use App\Company;
use App\Customer;
use Illuminate\Http\Request;
use PDO;

class CustomersController extends Controller
{
    public function index()
    {

        // $activeCustomers = Customer::active()->get();
        // $inactiveCustomers = Customer::inactive()->get();


        // return view('internals/customers', [
        //     'activeCustomers' => $activeCustomers,
        //     'inactiveCustomers' => $inactiveCustomers,
        // ]);

        $customers = Customer::all();
        return view('customers/index', compact('customers'));
    }


    public function create(){
         $companies = Company::all();
         return view('customers/create',compact('companies') );
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

        return redirect('customers');
    }

    public function show(Customer $customer){

    //    $customer = Customer::where('id',$customer)->firstOrFail();
       return view('customers.show', compact('customer'));
    }


     public function edit(Customer $customer){

       $companies = Company::all();
       return view('customers.edit', compact('customer', 'companies'));
    }


     public function update(Customer $customer){

    //    $customer = Customer::where('id',$customer)->firstOrFail();

        $data = request()->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        $customer->update($data);

        return redirect('customers/' . $customer->id);
    }
}
