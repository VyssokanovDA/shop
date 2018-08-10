@extends('shop.layouts.app')

@section('title')
    {{ $single->title }}
@endsection
@section('content')
    <div class="product-main">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="active">{{ $single->title }}</li>
            </ol>
            <div class="ctnt-bar cntnt">
                <div class="content-bar">
                    <div class="row d-flex">
                        <!--Include the Etalage files-->
                        <link rel="stylesheet" href="{{ asset('shop') }}/css/etalage.css">
                        <!--//details-product-slider-->
                        <div class="col-md-3 details-left-slider">
                            <img src="/{{ env('URL_IMAGE_PRODUCTS') . $single->thumb }}" width="120%" />
                        </div>
                        <div class="col-md-9 details-left-info">
                            <h3>{{ $single->title }}</h3>
                            <h4>Pellentesque pretium </h4>
                            <p>{{ $single->price }} руб.</p>
                            <p class="qty">Qty ::</p><input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
                            <div class="btn_form">
                                <a href="{{ route('product.add', ['product_id' => $single->id]) }}">Добавить в корзину</a>
                            </div>
                            <div class="flower-type">
                                <p>Категория  ::<a href="#">{{ $category->title }}</a></p>
                                <p>Бренд  ::<a href="#">{{ $brand->title }}</a></p>
                            </div>
                            <h5>Описание  ::</h5>
                            <p class="desc">{{ $single->description }}</p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="single-bottom2">
                <h6>Related Products</h6>
                <div class="rltd-posts">
                    <div class="col-md-3 pst1">
                        <img src="images/ab3.jpg" alt=""/>
                        <h4><a href="products.html">NEWLOOK</a></h4>
                        <a class="pst-crt" href="cart.html">ADD TO CART</a>
                    </div>
                    <div class="col-md-3 pst1">
                        <img src="images/c1.jpg" alt=""/>
                        <h4><a href="products.html">NEWLOOK</a></h4>
                        <a class="pst-crt" href="cart.html">ADD TO CART</a>
                    </div>
                    <div class="col-md-3 pst1">
                        <img src="images/ab4.jpg" alt=""/>
                        <h4><a href="products.html">SAREES</a></h4>
                        <a class="pst-crt" href="cart.html">ADD TO CART</a>
                    </div>
                    <div class="col-md-3 pst1">
                        <img src="images/c5.jpg" alt=""/>
                        <h4><a href="products.html">MANGO</a></h4>
                        <a class="pst-crt" href="cart.html">ADD TO CART</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection