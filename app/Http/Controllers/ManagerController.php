<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    public function index()
    {
        $books = Book::all();
        return view("/manager/index", ['books' => $books]);
    }
    public function menu()
    {
        return view("/manager/menu");
    }
}
