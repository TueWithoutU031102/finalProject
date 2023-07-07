<?php

namespace App\Http\Controllers;

use App\Http\Requests\bookStore;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Type;

class CustomerController extends Controller
{
    //
    public function index()
    {
        return view("/Customer/index");
    }

    public function bookForm()
    {
        return view("/Customer/booking/bookForm");
    }

    public function store(bookStore $request)
    {
        $book = new Book($request->all());
        $book->save();
        return redirect()->route('books.index')->with('success', 'Booking created successfully!');
    }

    public function orderForm()
    {
        $types = Type::all();
        return view("/Customer/order/orderForm", ['types' => $types]);
    }
}
