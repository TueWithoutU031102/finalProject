<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Menu;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //
    public function index()
    {
        $books = Book::all();
        return view("/Manager/index", ['books' => $books]);
    }
    public function menu()
    {
        return view("/Manager/menu/indexMenu");
    }

    public function createFormMenu()
    {
        return view("/Manager/menu/menuForm");
    }
    public function createMenu(Request $request)
    {
        $menu = new Menu($request->all());
        $menu->save();
        return redirect()->route('indexMenu')->with('success', 'Booking created successfully!');
    }
}
