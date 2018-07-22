@extends('shop.layouts.app')

@section('title')
    Главная страница магазина
@endsection

{{--@section('slider')
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free E-Commerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('shop') }}/{{ asset('shop') }}/images/home/girl1.jpg" class="girl img-responsive" alt="" />
                                    <img src="{{ asset('shop') }}/{{ asset('shop') }}/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>100% Responsive Design</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('shop') }}/{{ asset('shop') }}/images/home/girl2.jpg" class="girl img-responsive" alt="" />
                                    <img src="{{ asset('shop') }}/{{ asset('shop') }}/images/home/pricing.png"  class="pricing" alt="" />
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>Free Ecommerce Template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ asset('shop') }}/{{ asset('shop') }}/images/home/girl3.jpg" class="girl img-responsive" alt="" />
                                    <img src="{{ asset('shop') }}/{{ asset('shop') }}/images/home/pricing.png" class="pricing" alt="" />
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->
@endsection--}}

@section('content')
    <div class="features" id="features">
        <div class="container">
            <div class="tabs-box">
                <ul class="tabs-menu">
                    <li><a href="#tab1">Best seller</a></li>
                    <li><a href="#tab2">Popular</a></li>
                    <li><a href="#tab3">New Arrivals</a></li>
                </ul>
                <div class="clearfix"> </div>
                <div class="tab-grids">
                    <div id="tab1" class="tab-grid1">
                        <a href="single.html">
                            <div class="product-grid">
                                <div class="more-product-info"><span>NEW</span></div>
                                <div class="product-img b-link-stripe b-animate-go  thickbox">
                                    <img src="{{ asset('shop') }}/images/bs1.jpg" class="img-responsive" alt=""/>
                                    <div class="b-wrapper">
                                        <h4 class="b-animate b-from-left  b-delay03">
                                            <button class="btns">ORDER NOW</button>
                                        </h4>
                                    </div>
                                </div>
                        </a>
                        <div class="product-info simpleCart_shelfItem">
                            <div class="product-info-cust">
                                <h4>BELLE B&W</h4>
                                <span class="item_price">$187.95</span>
                                <input type="text" class="item_quantity" value="1" />
                                <input type="button" class="item_add" value="ADD">
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>

                    <a href="single.html"><div class="product-grid">
                            <div class="more-product-info"></div>
                            <div class="product-img b-link-stripe b-animate-go  thickbox">
                                <img src="{{ asset('shop') }}/images/bs2.jpg" class="img-responsive" alt=""/>
                                <div class="b-wrapper">
                                    <h4 class="b-animate b-from-left  b-delay03">
                                        <button class="btns">ORDER NOW</button>
                                    </h4>
                                </div>
                            </div>	</a>
                    <div class="product-info simpleCart_shelfItem">
                        <div class="product-info-cust">
                            <h4>CLUBYORK</h4>
                            <span class="item_price">$187.95</span>
                            <input type="text" class="item_quantity" value="1" />
                            <input type="button" class="item_add" value="ADD">
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>

                <a href="single.html"><div class="product-grid">
                        <div class="more-product-info"></div>
                        <div class="product-img b-link-stripe b-animate-go  thickbox">
                            <img src="{{ asset('shop') }}/images/bs3.jpg" class="img-responsive" alt=""/>
                            <div class="b-wrapper">
                                <h4 class="b-animate b-from-left  b-delay03">
                                    <button class="btns">ORDER NOW</button>
                                </h4>
                            </div>
                        </div>	</a>
                <div class="product-info simpleCart_shelfItem">
                    <div class="product-info-cust">
                        <h4>ROADSTER</h4>
                        <span class="item_price">$220.95</span>
                        <input type="text" class="item_quantity" value="1" />
                        <input type="button" class="item_add" value="ADD">
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>

            <a href="single.html"><div class="product-grid">
                    <div class="more-product-info"></div>
                    <div class="product-img b-link-stripe b-animate-go  thickbox">
                        <img src="{{ asset('shop') }}/images/bs4.jpg" class="img-responsive" alt=""/>
                        <div class="b-wrapper">
                            <h4 class="b-animate b-from-left  b-delay03">
                                <button class="btns">ORDER NOW</button>
                            </h4>
                        </div>
                    </div></a>
            <div class="product-info simpleCart_shelfItem">
                <div class="product-info-cust">
                    <h4>BLACKFLPS</h4>
                    <span class="item_price">$150.95</span>
                    <input type="text" class="item_quantity" value="1" />
                    <input type="button" class="item_add" value="ADD">
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <a href="single.html"><div class="product-grid">
                <div class="more-product-info"><span>NEW</span></div>
                <div class="product-img b-link-stripe b-animate-go  thickbox">
                    <img src="{{ asset('shop') }}/images/bs5.jpg" class="img-responsive" alt=""/>
                    <div class="b-wrapper">
                        <h4 class="b-animate b-from-left  b-delay03">
                            <button class="btns">ORDER NOW</button>
                        </h4>
                    </div>
                </div>	</a>
        <div class="product-info simpleCart_shelfItem">
            <div class="product-info-cust">
                <h4>RED CHECKS</h4>
                <span class="item_price">$140.95</span>
                <input type="text" class="item_quantity" value="1" />
                <input type="button" class="item_add" value="ADD">
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/bs6.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div>
    </a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>NEW LOOK</h4>
            <span class="item_price">$100.00</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>

    <div id="tab2" class="tab-grid2">
        <a href="single.html"><div class="product-grid">
                <div class="more-product-info"></div>
                <div class="product-img b-link-stripe b-animate-go  thickbox">
                    <img src="{{ asset('shop') }}/images/c1.jpg" class="img-responsive" alt=""/>
                    <div class="b-wrapper">
                        <h4 class="b-animate b-from-left  b-delay03">
                            <button class="btns">ORDER NOW</button>
                        </h4>
                    </div>
                </div></a>
        <div class="product-info simpleCart_shelfItem">
            <div class="product-info-cust">
                <h4>NEWLOOK</h4>
                <span class="item_price">$187.95</span>
                <input type="text" class="item_quantity" value="1" />
                <input type="button" class="item_add" value="ADD">
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/c2.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div>	</a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>NEWLOOK</h4>
            <span class="item_price">$120.95</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"><span>NEW</span></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/c3.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div></a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>NEWLOOK</h4>
            <span class="item_price">$187.95</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"><span>NEW</span></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/c4.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div>
    </a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>NEWLOOK</h4>
            <span class="item_price">$187.95</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/c5.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div></a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>NEWLOOK</h4>
            <span class="item_price">$187.95</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/c6.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div></a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>NEWLOOK</h4>
            <span class="item_price">$180.95</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>

    <div id="tab3" class="tab-grid3">
        <a href="single.html"><div class="product-grid">
                <div class="more-product-info"></div>
                <div class="product-img b-link-stripe b-animate-go  thickbox">
                    <img src="{{ asset('shop') }}/images/bs3.jpg" class="img-responsive" alt=""/>
                    <div class="b-wrapper">
                        <h4 class="b-animate b-from-left  b-delay03">
                            <button class="btns">ORDER NOW</button>
                        </h4>
                    </div>
                </div>	</a>
        <div class="product-info simpleCart_shelfItem">
            <div class="product-info-cust">
                <h4>ROADSTER</h4>
                <span class="item_price">$160.95</span>
                <input type="text" class="item_quantity" value="1" />
                <input type="button" class="item_add" value="ADD">
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/bs5.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div>	</a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>RED CHECKS</h4>
            <span class="item_price">$187.95</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/c5.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div></a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>NEWLOOK</h4>
            <span class="item_price">$187.95</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/c4.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div>	</a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>MANGO</h4>
            <span class="item_price">$187.95</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/c3.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div>	</a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>SISLEY</h4>
            <span class="item_price">$187.95</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>

    <a href="single.html"><div class="product-grid">
            <div class="more-product-info"></div>
            <div class="product-img b-link-stripe b-animate-go  thickbox">
                <img src="{{ asset('shop') }}/images/bs1.jpg" class="img-responsive" alt=""/>
                <div class="b-wrapper">
                    <h4 class="b-animate b-from-left  b-delay03">
                        <button class="btns">ORDER NOW</button>
                    </h4>
                </div>
            </div></a>
    <div class="product-info simpleCart_shelfItem">
        <div class="product-info-cust">
            <h4>ROADSTER</h4>
            <span class="item_price">$187.95</span>
            <input type="text" class="item_quantity" value="1" />
            <input type="button" class="item_add" value="ADD">
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>
    </div>
    </div>
    <!-- tabs-box -->
    <!-- Comman-js-files -->
    <script>
        $(document).ready(function() {
            $("#tab2").hide();
            $("#tab3").hide();
            $(".tabs-menu a").click(function(event){
                event.preventDefault();
                var tab=$(this).attr("href");
                $(".tab-grid1,.tab-grid2,.tab-grid3").not(tab).css("display","none");
                $(tab).fadeIn("slow");
            });
            $("ul.tabs-menu li a").click(function(){
                $(this).parent().addClass("active a");
                $(this).parent().siblings().removeClass("active a");
            });
        });
    </script>
    <!-- Comman-js-files -->
    </div>
    </div>
@endsection