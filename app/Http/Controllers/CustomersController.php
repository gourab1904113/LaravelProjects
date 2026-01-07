<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function list()
    {

        $customers = [
            'gourab',
            'chandra',
            'biswas'
        ];

        return view('internals/customers', [
            'customers' => $customers,
        ]);
    }
}
