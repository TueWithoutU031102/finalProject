<?php

namespace App\Http\Controllers;

use App\Http\Requests\bookStore;
use App\Models\Book;
use App\Models\Menu;
use Illuminate\Http\Request;

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
        $menus = Menu::all();
        return view("/Customer/order/orderForm", ['menus' => $menus]);
    }
}
