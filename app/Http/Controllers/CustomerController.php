<?php

namespace App\Http\Controllers;

use App\Http\Requests\bookStore;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Type;
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
        $types = Type::all();
        return view("/Customer/order/orderForm", ['types' => $types]);
    }

    public function detailDish($id)
    {
        $dish = Menu::find($id);
        $typeName = Type::find(Menu::find($id)->type_id);
        return view("/Customer/order/detailDish", ['dish' => $dish, 'typeName' => $typeName]);
    }

    public function addToCart($id)
    {
        $dish = Menu::find($id);
        $cart = session()->get('cart');
        if (isset($cart[$id]))
            $cart[$id]['quantity'] = $cart[$id]['quantity'] + 1;
        else
            $cart[$id] = [
                'name' => $dish->name,
                'price' => $dish->price,
                'quantity' => 1,
                'image' => $dish->image,
            ];
        session()->put('cart', $cart);
        return response()->json([
            'code' => 200,
            'message' => 'success'
        ], 200);
    }

    public function showCart()
    {
        $carts = session()->get('cart');
        return view('Customer.order.viewCart', ['carts' => $carts]);
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $carts = session()->get('cart');
            $carts[$request->id]['quantity'] = $request->quantity;
            session()->put('cart', $carts);
            $carts = session()->get('cart');
            $cartComponents = view('Customer.order.components.cart_component', ['carts' => $carts])->render();
            return response()->json([
                'cart_component' => $cartComponents,
                'code' => 200,
            ], 200);
        }
    }
}
