<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function bookForm()
    {
        return view("/Customer/book");
    }
}
