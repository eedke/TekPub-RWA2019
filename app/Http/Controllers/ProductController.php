<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use Session;
use Intervention\Image\Facades\Image;


class ProductController extends Controller
{
    public function getSearch()
    {
        $q = \Request::get('q');
        $product = Product::where('title', 'LIKE', '%' . $q . '%')->orWhere('description', 'LIKE', '%' . $q . '%')->orWhere('subtype', 'LIKE', '%' . $q . '%')->get();
        if (count($product) > 0)
            return view('shop.search')->withDetails($product)->withQuery($q);
        else
            return view('shop.search')->withMessage('No Details found. Try to search again !');

    }

    public function getSearchCategory($val)
    {


        $product = Product::where('type', 'LIKE', '%' . $val . '%')->get();
        if (count($product) > 0)
            return view('shop.searchCategory')->withDetails($product)->withQuery($val);
        else
            return view('shop.searchCategory')->withMessage('No Details found. Try to search again !');

    }


    public function getIndex()
    {
        $products = Product::paginate(15);
        return view('shop.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product.shoppingCart');
    }

    public function getReduceByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getIncreaseByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);

        Session::put('cart', $cart);

        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveAll()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        Session::forget('cart');
        return redirect()->route('product.shoppingCart');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        if (!Session::has('cart')) {
            return redirect()->route('product.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);


        $line_items = [[
            'name' => $cart->items
        ]];

        \Stripe\Stripe::setApiKey('sk_test_lktZVUGsrprd39KwQpzbj9C100isnbhZuu');
        try {
            $session = \Stripe\Checkout\Session::create([
                'payment_method_types' => ['card'],

                'line_items' => [[
                    'name' => ' A test purchase',
                    'description' => 'using stripe',
                    'images' => ['https://example.com/t-shirt.png'],
                    'amount' => $cart->totalPrice * 100,
                    'currency' => 'usd',
                    'quantity' => 1,
                ]],
                'success_url' => 'https://127.0.0.1:8000/success?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => 'https://127.0.0.1:8000/cancel',
            ]);

            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->payment_id = $session->id;
            $order->status = 0;

            Auth::user()->orders()->save($order);
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }


        Session::forget('cart');
        return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    }

    public function getOrderAccept($id)
    {
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        return back();
    }

    public function getOrderComplete($id)
    {
        $order = Order::find($id);
        $order->status = 2;
        $order->save();
        return back();
    }

    public function getOrderReject($id)
    {
        $order = Order::find($id);
        $order->status = 3;
        $order->save();
        return back();
    }

    public function getAllOrders()
    {
        $orders = Order::all();
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        $orders = $orders->reverse();
        return view('admin.users.allOrders')->with('orders', $orders);
    }

    public function getSortAsc()
    {
        $products = Product::all();

        $products = $products->sortBy('price', SORT_ASC);

        return view('shop.index')->with('products', $products);
    }

    public function getSortDesc()
    {
        $products = Product::all();

        $products = $products->sortBy('price', SORT_ASC);
        $products = $products->reverse();
        return view('shop.index')->with('products', $products);
    }
    public function getSortNameAsc()
    {
        $products = Product::all();

        $products = $products->sortBy('title', SORT_ASC);

        return view('shop.index')->with('products', $products);
    }

    public function getSortNameDesc()
    {
        $products = Product::all();

        $products = $products->sortBy('title', SORT_ASC);
        $products = $products->reverse();
        return view('shop.index')->with('products', $products);
    }
}
