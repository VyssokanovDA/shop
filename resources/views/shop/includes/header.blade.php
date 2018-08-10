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
                <li class="grid"><a href="{{ route('products') }}">Товары</a></li>
                <li class="grid"><a href="/news">Новости</a></li>
                @if(Auth::check())
                    <li class="grid"><a href="{{ route('user.profile') }}">Профиль {{ Auth::user()->name }}</a></li>
                    <li><a href="{{ route('logout') }}">ВЫХОД</a></li>
                        @else
                    <li class="grid"><a href="{{ route('login') }}">Войти</a></li>
                    <li class="grid"><a href="{{ route('register') }}">Регистрация</a></li>
                    @endif
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--header-->

</header><!--/header-->
