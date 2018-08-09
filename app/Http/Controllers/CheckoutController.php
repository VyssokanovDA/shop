<?php
namespace App\Http\Controllers;
use App\Cart;
use App\Menu;
use App\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class CheckoutController extends Controller
{
    public function getCheckout(){
        if(!Session::has('cart')){
            return redirect()->route('home');
        }
        $cart = Session::get('cart');
        return view('shop.checkout', [
            'menus' => Menu::all(),
            'totalPrice' => $cart->totalPrice
        ]);
    }
    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return redirect()->route('home');
        }
        if(preg_match('/[0-9]{13,16}/', $request->input('number'))){
            try{
                $cart = new Cart(Session::get('cart'));
                $order = new Order();
                $order->name = $request->input('name');
                $order->cart = serialize($cart);
                $order->address = $request->input('address');
                $order->is_guest = Auth::id() ? 1 : 0;
                Auth::user()->orders()->save($order);
                Session::forget('cart'); //удаляем из сессии
                Session::flash('message', 'Заказ успешно оформлен');
                return redirect()->route('user.profile');
            }catch (\Exception $e){
                Session::flash('message', $e->getMessage());
                return redirect()->route('get.checkout');
            }
        }
    }
}