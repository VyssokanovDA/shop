@extends('shop.news')
@section('title')
    Новость
@endsection
@section('content')
    <div class="blog-single">
        <div class="container">
            <div class="col-md-9 blog-sec-img">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Blog</li>
                </ol>
                <div class="blog-sec-info">
                    <h2>{{ $blog->title }}</h2>
                    <img src="/{{ env('URL_IMAGE_NEWS') . $blog->img }}" class="img-responsive" alt=""/>
                    <p>{{ $blog->text }}</p>
                </div>
                <div class="comment-box">
                    <h4 class="page-header">Comment Here </h4>
                    <div class="text-cmt">
                        <input type="text" placeholder="Name" required=""/>
                        <input type="text" placeholder="Email" required=""/>
                    </div>
                    <div class="text-cmt">
                        <textarea placeholder="Message" required=""></textarea>
                    </div>
                    <div class="text-cmt">
                        <input type="submit" />
                    </div>
                </div>
                <div class="comments1">
                    <h4>COMMENTS</h4>
                    <div class="comments-main">
                        <div class="col-md-3 cmts-main-left">
                            <img src="images/avatar.jpg" alt="">
                        </div>
                        <div class="col-md-9 cmts-main-right">
                            <h5>TOM BROWN</h5>
                            <p>Vivamus congue turpis in laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper purus sit amet lorem elementum faucibus.</p>
                            <div class="cmts">
                                <div class="col-md-6 cmnts-left">
                                    <p>On April 14, 2014, 18:01</p>
                                </div>
                                <div class="col-md-6 cmnts-right">
                                    <a href="#">Reply</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="comments-main">
                        <div class="col-md-3 cmts-main-left">
                            <img src="images/avatar.jpg" alt="">
                        </div>
                        <div class="col-md-9 cmts-main-right">
                            <h5>HENRY JOE</h5>
                            <p>Vivamus congue turpis in laoreet sem nec ultrices. Fusce blandit nunc vehicula massa vehicula tincidunt. Nam venenatis cursus urna sed gravida. Ut tincidunt elit ut quam malesuada consequat. Sed semper purus sit amet lorem elementum faucibus.</p>
                            <div class="cmts">
                                <div class="col-md-6 cmnts-left">
                                    <p>On April 14, 2014, 18:01</p>
                                </div>
                                <div class="col-md-6 cmnts-right">
                                    <a href="#">Reply</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            @include('shop.news_sidebar')
            <div class="clearfix"></div>
        </div>
    </div>

@endsection



