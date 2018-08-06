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
                <li><a href="/">Главная</a></li>
                <li class="active">Новости</li>
            </ol>
            <h2>НОВОСТИ</h2>
            <div class="col-md-9 fashion-blogs">
                @foreach($news as $item)
                    <h3> <a href="{{ route('singleBlog.show', ['id' => $item->id]) }}">{{ $item->title }}</a></h3>
                    <p class="author">Posted By <a href="{{ route('singleBlog.show', ['id' => $item->id]) }}">{{$users[$item->user_id - 1]->name}}</a> On <span>{{ $item->created_at }}</span> <a href="#">Comments(10)</a></p>
                    <a href="{{ route('singleBlog.show', ['id' => $item->id]) }}"><img src="/{{ env('URL_IMAGE_NEWS') . $item->img }}" class="img-responsive" alt=""/></a>
                    <p class="blog-info">{{ $item->introtext }}</p>
                    <a class="read" href="{{ route('singleBlog.show', ['id' => $item->id]) }}">Read More</a>
                @endforeach
            </div>
            @include('shop.news_sidebar')
            <div class="clearfix"></div>

        </div>
        <div class="clearfix"> </div>
    </div>


@endsection
{{--
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
--}} 