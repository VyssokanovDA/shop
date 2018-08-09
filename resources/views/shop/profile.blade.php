@extends('shop.layouts.app')
@section('content')
    <div class="col-md-12">
        <h1>Мой профиль</h1>
        <hr>
        @if(Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            <hr>
        @endif
        <h2>Мои заказы</h2>
        @foreach($orders as $order)
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col" colspan="4">Заказ №{{$order['id']}} от {{$order->created_at}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->cart->items as $item)
                    <tr>
                        <td colspan="2">{{$item['item']['title']}}</td>
                        <td>{{$item['qty']}}</td>
                        <td>${{$item['price']}}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="4" class="text-right">Общая стоимость: <strong>${{$order->cart->totalPrice}}</strong></td>
                </tr>
                </tbody>
            </table>
        @endforeach
    </div>
@endsection 