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
        //Добалвение товара в корзину
        $cart->add($product, $product->id);
        //Кладем в сессию нашук корзину в сериализованном виде
        $request->session()->put('cart', $cart);
        return redirect()->route('home');
    }
}
