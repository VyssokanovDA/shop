<?php
namespace App\Http\Controllers;
use App\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function getProfile(){
        /**
         * //Получаем заказы пользователя используя отношения
         * тип коллекции. Если не ясно то сделайте дебаг $orders
         */
        $orders = Auth::user()->orders;
        /**
         * Метод transform() перебирает коллекцию и
         * вызывает заданную функцию обратного
         * вызова для каждого элемента коллекции.
         * Элементы коллекции будут заменены на значения,
         * полученный из функции обратного вызова
         */
        $orders->transform(function ($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('shop.profile',
            [
                'menus' => Menu::all(),
                'orders' => $orders
            ]
        );
    }
}
