@extends('shop.layouts.app')

@section('title')
    Товары по категориям
@endsection
@section('content')

    <div class="product-model">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="active">Товары</li>
            </ol>
            <h2>НАШИ ТОВАРЫ</h2>
            @include('shop.includes.sidebar')
            <div class="col-md-9 product-model-sec">
                @forelse ($products as $product)
                    <a href="{{ route('single.show', ['id' => $product->id]) }}">
                        <div class="product-grid love-grid">
                            <div class="more-product">
                                <span> </span>
                            </div>
                            <div class="product-img b-link-stripe b-animate-go  thickbox">
                                <img src="/{{ env('URL_IMAGE_PRODUCTS') . $product->thumb }}" class="img-responsive" alt=""/>
                                <div class="b-wrapper">
                                    <h4 class="b-animate b-from-left  b-delay03">
                                        <button class="btns">ОФОРМИТЬ ЗАКАЗ</button>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="product-info simpleCart_shelfItem">
                        <div class="product-info-cust prt_name">
                            <h4>{{ $product->title }}</h4>
                            <span class="item_price">{{ $product->price }} руб.</span>
                            <input type="text" class="item_quantity" value="1" />
                            <a href="{{ route('product.add', ['product_id' => $product->id]) }}" class="item_add"><i class="fa fa-shopping-cart"></i>Добавить в корзину</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                @empty
                    <h1>Товаров не обнаружено</h1>
                @endforelse
            </div>


        </div>
    </div>

    <div class="clearfix"></div>

    </div>
</div>

@endsection