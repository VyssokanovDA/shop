@extends('shop.layouts.app')
@section('title')
    Корзина
@endsection
@section('content')
    <div class="cart">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="men.html">Home</a></li>
                <li class="active">Cart</li>
            </ol>
            <div class="cart-top">
                <a href="/"><< home</a>
            </div>

            <div class="col-md-9 cart-items">
                <h2>Моя корзина ({{ $cart->totalQty }})</h2>
                {{--<script>$(document).ready(function(c) {
                        $('.close1').on('click', function(c){
                            $('.cart-header').fadeOut('slow', function(c){
                                $('.cart-header').remove();
                            });
                        });
                    });
                </script>--}}
                @forelse ($cart->items as $thing)
                    <div class="cart-header">
                        <div class="close1"> </div>
                        <div class="cart-sec">
                            <div class="cart-item cyc">
                                <img src="{{ env('URL_IMAGE_PRODUCTS') . $thing['item']->thumb }}"/>
                            </div>
                            <div class="cart-item-info">
                                <h3>{{ $thing['item']->title }}<span>{{ $thing['item']->description }}</span></h3>
                                <h4>{{ $thing['item']->price }}<span> руб. </span></h4>
                                <p class="qty">Количество ::</p>
                                <input min="1" type="number" id="quantity" name="quantity" value="{{ $thing['qty'] }}" class="form-control input-small">
                            </div>
                            <div class="clearfix"></div>
                            <div class="delivery">
                                <p>Service Charges:: Rs.50.00</p>
                                <span>Delivered in 2-3 bussiness days</span>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h1>Корзина пуста</h1>
                @endforelse
            </div>

            <div class="col-md-3 cart-total">
                <a class="continue" href="#">Continue to basket</a>
                <div class="price-details">
                    <h3>Price Details</h3>
                    <span>Total</span>
                    <span class="total">350.00</span>
                    <span>Discount</span>
                    <span class="total">---</span>
                    <span>Delivery Charges</span>
                    <span class="total">100.00</span>
                    <div class="clearfix"></div>
                </div>
                <h4 class="last-price">TOTAL</h4>
                <span class="total final">{{ $cart->totalPrice }}</span>
                <div class="clearfix"></div>
                <a class="order" href="#">Place Order</a>
                <div class="total-item">
                    <h3>OPTIONS</h3>
                    <h4>COUPONS</h4>
                    <a class="cpns" href="#">Apply Coupons</a>
                    <p><a href="#">Log In</a> to use accounts - linked coupons</p>
                </div>
            </div>
        </div>
    </div>
@endsection
