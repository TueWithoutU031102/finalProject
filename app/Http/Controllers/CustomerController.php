<?php

namespace App\Http\Controllers;

use App\Http\Requests\bookStore;
use App\Models\Book;

class CustomerController extends Controller
{
    //
    public function index()
    {
        return view("/customer/index");
    }

    public function bookForm()
    {
        return view("/customer/bookForm");
    }

    public function store(bookStore $request)
    {
        $book = new Book($request->all());
        $book->save();
        return redirect()->route('books.index')->with('success', 'Booking created successfully!');
    }
}
