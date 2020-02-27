<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Gate;
use App\User;

class UserController extends Controller
{
    public function getProfile()
    {
        $orders = Auth::user()->orders;
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        $orders = $orders->reverse();
        return view('user.profile', ['orders' => $orders, 'user' => Auth::user()]);
    }

    public function getView($id)
    {
        if (Gate::denies('view-users')) {
            return redirect(route('admin.users.index'));
        }
        $user = User::find($id);

        $orders = $user->orders;
        $orders->transform(function ($order, $key) {
            $order->cart = unserialize($order->cart);
            return $order;
        });
        $orders = $orders->reverse();
        return view('admin.users.view')->with([
            'user' => $user,
            'orders' => $orders
        ]);
    }
    public function getAboutUs(){
        return view('about-us');
    }
}
