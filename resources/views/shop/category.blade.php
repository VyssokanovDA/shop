@extends('shop.layouts.app')
@section('title')
    Товары категории {{ $category->title }}
@endsection
@section('content')
    <div class="features_items"><!--features_items-->
        <h2 class="title text-center">Товары категории {{ $category->title }}</h2>
        @forelse ($products as $product)
            <div class="col-sm-4">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{ env('URL_IMAGE_PRODUCTS') . $product->thumb }}" alt="" />
                            <h2>{{ $product->price }} руб.</h2>
                            <p>{{ $product->title }}</p>
                            <a href="{{ route('product.add', ['product_id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>
                        <div class="product-overlay">
                            <div class="overlay-content">
                                <h2>{{ $product->price }} руб.</h2>
                                <p>{{ $product->description }}</p>
                                <a href="{{ route('product.add', ['product_id' => $product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="choose">
                        {{--<ul class="nav nav-pills nav-justified">
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                        </ul>--}}
                    </div>
                </div>
            </div>
        @empty
            <h1>Товаров не обнаружено</h1>
        @endforelse
    </div>
    {{ $products->render() }}
    <!--features_items-->
@endsection 