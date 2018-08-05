@extends('shop.layouts.app')
@section('title')
    Новости нашего сайта
@endsection
@section('content')
    {{--@foreach($news as $item)
        <li>{{ $item->title }}</li>
    @endforeach--}}

    <div class="blog">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="index.html">Главная</a></li>
                <li class="active">Новости</li>
            </ol>
            <h2>НОВОСТИ</h2>
            <div class="col-md-9 fashion-blogs">
                @foreach($news as $item)
                    <h3> <a href="blog-single.html">{{ $item->title }}</a></h3>
                    <p class="author">Posted By <a href="blog-single.html">{{$users[$item->user_id - 1]->name}}</a> On <span>{{ $item->created_at }}</span> <a href="#">Comments(10)</a></p>
                    <a href="blog-single.html"><img src="/{{ env('URL_IMAGE_NEWS') . $item->img }}" class="img-responsive" alt=""/></a>
                    <p class="blog-info">{{ $item->introtext }}</p>
                    <a class="read" href="blog-single.html">Read More</a>
                @endforeach
            </div>
            <div class="col-md-3 sidebar">
                <h3>CATEGORIES</h3>
                <ul>
                    <li><a href="#"><span> </span>Trendy</a></li>
                    <li><a href="#"><span> </span>Kurtas & kurtis</a></li>
                    <li><a href="#"><span> </span>Fashion</a></li>
                    <li><a href="#"><span> </span>Party</a></li>
                    <li><a href="#"><span> </span>College</a></li>
                    <li><a href="#"><span> </span>Summer</a></li>
                </ul>
                <h3 class="arch">BRANDS</h3>
                <ul>
                    <li><a href="#"><span> </span>Roadster</a></li>
                    <li><a href="#"><span> </span>Puma</a></li>
                    <li><a href="#"><span> </span>Mango</a></li>
                </ul>
                <div class="subscribe">
                    <h4>Subscribe For News</h4>
                    <input type="text" placeholder="Email.." required="" />
                    <input type="submit" value="Subscribe" />
                </div>
            </div>
            <div class="clearfix"></div>

        </div>
        <div class="clearfix"> </div>
    </div>


@endsection
{{--
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
--}} 