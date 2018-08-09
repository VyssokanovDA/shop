<header id="header"><!--header-->
    <div class="header2 text-cente">
        <div class="container">
            <div class="main-header">
                {{--<div class="carting">
                    <ul><li><a href="login.html"> LOGIN</a></li></ul>
                </div>--}}
                <div class="logo">
                    <h3><a href="{{ env('APP_URL') }}">МАГАЗИН ОДЕЖДЫ</a></h3>
                </div>
                <div class="box_1">
                    <a href="{{ route('cart.show') }}"><h3>Корзина: <span>{{Session::has('cart') ? Session::get('cart')->totalPrice : null}} руб.</span> (<span>{{Session::has('cart') ? Session::get('cart')->totalQty : null}}</span> шт.)<img src="{{ asset('shop') }}/images/cart.png" alt=""/></h3></a>
                    <p><a href="{{ route('cart.clear') }}">Очистить корзину</a></p>

                </div>

                <div class="clearfix"></div>
            </div>

            <!-- start header menu -->
            <ul class="megamenu skyblue">
                <li class="active grid"><a class="color1" href="/">Главная</a></li>
                <li class="grid"><a href="{{ route('products') }}">Товары по категориям</a></li>
                <li class="grid"><a href="/news">Новости</a></li>
                @if(Auth::check())
                    <li class="grid"><a href="{{ route('user.profile') }}">Профиль</a></li>
                    <li><a href="#">ВЫХОД</a></li>
                        @else
                    <li class="grid"><a href="{{ route('login') }}">Войти</a></li>
                    @endif
                    {{--<div class="megapanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>shop</h4>
                                    <ul>
                                        <li><a href="shop.html">new arrivals</a></li>
                                        <li><a href="shop.html">men</a></li>
                                        <li><a href="shop.html">women</a></li>
                                        <li><a href="shop.html">accessories</a></li>
                                        <li><a href="shop.html">kids</a></li>
                                        <li><a href="shop.html">brands</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>help</h4>
                                    <ul>
                                        <li><a href="shop.html">trends</a></li>
                                        <li><a href="shop.html">sale</a></li>
                                        <li><a href="shop.html">style videos</a></li>
                                        <li><a href="shop.html">accessories</a></li>
                                        <li><a href="shop.html">kids</a></li>
                                        <li><a href="shop.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Products</h4>
                                    <ul>
                                        <li><a href="shop.html">trends</a></li>
                                        <li><a href="shop.html">sale</a></li>
                                        <li><a href="shop.html">style videos</a></li>
                                        <li><a href="shop.html">accessories</a></li>
                                        <li><a href="shop.html">kids</a></li>
                                        <li><a href="shop.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>my company</h4>
                                    <ul>
                                        <li><a href="shop.html">trends</a></li>
                                        <li><a href="shop.html">sale</a></li>
                                        <li><a href="shop.html">style videos</a></li>
                                        <li><a href="shop.html">accessories</a></li>
                                        <li><a href="shop.html">kids</a></li>
                                        <li><a href="shop.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>popular</h4>
                                    <ul>
                                        <li><a href="shop.html">new arrivals</a></li>
                                        <li><a href="shop.html">men</a></li>
                                        <li><a href="shop.html">women</a></li>
                                        <li><a href="shop.html">accessories</a></li>
                                        <li><a href="shop.html">kids</a></li>
                                        <li><a href="shop.html">style videos</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col2"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                            <div class="col1"></div>
                        </div>
                    </div>--}}


            </ul>
            <div class="clearfix"></div>
        </div>
        {{--<div class="caption">
            <h1>FASHION AND CREATIVITY</h1>
            <p>Sed dapibus est a lorem dictum, id dignissim lacus fermentum. Nulla ut nibh in libero maximus pretium
                Nunc vulputate vel tellus ac elementum. Duis nec tincidunt dolor, ac dictum eros.</p>
        </div>--}}
    </div>
    <!--header-->

</header><!--/header-->