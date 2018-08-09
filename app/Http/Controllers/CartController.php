<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $product_id){
        //Получаем добавляемый продукт в корзину по id
        $product = Product::find($product_id);
        /*Проверяем налииче корзины в сессии (массив данных )
            array( items = array(
                           //Id продукта
                        id = ( qty - кол-во данного продукта
                               price - общую сумму данного продукта
                               item - сам продукт экземпляр)
                    ) - список товаров,
                   totalQty - общее кол-во
                   totalPrice - Сумма )
        */
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        //Cоздается экземпляр объекта из массива данных
        $cart = new Cart($oldCart);
        //Добавление товара в корзину
        $cart->add($product, $product->id);
        //Кладем в сессию нашу корзину в сериализованном виде
        $request->session()->put('cart', $cart);
        return back();
    }
    public function clearCart(Request $request){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart -> clear();
        $request->session()->put('cart', $cart);
        Session::forget('cart');
        return back();

    }
    public function show(){
        $cart = Session::get('cart');
        return view('shop.cart', [
            'cart' => $cart //отдаем шаблону на рендер
        ]);
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('cart.show');
    }

    public function getIncreaseByOne($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->increaseByOne($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('cart.show');
    }
    public function getRemoveItem($id){
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        }else{
            Session::forget('cart');
        }
        return redirect()->route('cart.show');
    }
}
