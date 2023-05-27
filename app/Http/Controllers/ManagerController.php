<?php

namespace App\Http\Controllers;

use App\Http\Requests\formMenu;
use App\Http\Requests\formType;
use App\Models\Book;
use App\Models\Menu;
use App\Models\Type;

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
        $menus = Menu::all();
        return view("/Manager/menu/indexMenu",['menus' => $menus]);
    }
    public function createFormMenu()
    {
        return view("/Manager/menu/menuForm");
    }
    public function createMenu(formMenu $request)
    {
        $menu = new Menu($request->all());
        $menu->save();
        return redirect()->route('indexMenu')->with('success', 'Booking created successfully!');
    }

    public function type()
    {
        $types = Type::all();
        return view("/Manager/type/indexType",['types' => $types]);
    }
    public function createFormType()
    {
        return view("/Manager/type/typeForm");
    }
    public function createType(formType $request)
    {
        $type = new Type($request->all());
        $type->save();
        return redirect()->route('indexType')->with('success', 'Type created successfully!');
    }
}
