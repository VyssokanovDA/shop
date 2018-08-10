<div class="rsidebar span_1_of_left">
    <section  class="sky-form">
        <div class="product_right">
            <h3 class="m_2">Категории</h3>
            @foreach($categories as $category)
                <div class="tab1">
                    <ul class="place">
                        <a href="{{ route('client.category', ['alias' => $category->alias]) }}"><li class="sort">{{ $category->title }}</li></a>
                        <li class="by"><img src="images/do.png" alt=""></li>
                        <div class="clearfix"> </div>
                    </ul>
                    <div class="single-bottom">
                        <a href="#"><p>sub category1</p></a>
                        <a href="#"><p>sub category1</p></a>
                        <a href="#"><p>sub category1</p></a>
                        <a href="#"><p>sub category1</p></a>
                    </div>
                </div>
            @endforeach
            <!--script-->
            <script>
                $(document).ready(function(){
                    $(".tab1 .single-bottom").hide();
                    $(".tab2 .single-bottom").hide();
                    $(".tab3 .single-bottom").hide();
                    $(".tab4 .single-bottom").hide();
                    $(".tab5 .single-bottom").hide();

                    $(".tab1 ul").click(function(){
                        $(".tab1 .single-bottom").slideToggle(300);
                        $(".tab2 .single-bottom").hide();
                        $(".tab3 .single-bottom").hide();
                        $(".tab4 .single-bottom").hide();
                        $(".tab5 .single-bottom").hide();
                    })
                    $(".tab2 ul").click(function(){
                        $(".tab2 .single-bottom").slideToggle(300);
                        $(".tab1 .single-bottom").hide();
                        $(".tab3 .single-bottom").hide();
                        $(".tab4 .single-bottom").hide();
                        $(".tab5 .single-bottom").hide();
                    })
                    $(".tab3 ul").click(function(){
                        $(".tab3 .single-bottom").slideToggle(300);
                        $(".tab4 .single-bottom").hide();
                        $(".tab5 .single-bottom").hide();
                        $(".tab2 .single-bottom").hide();
                        $(".tab1 .single-bottom").hide();
                    })
                    $(".tab4 ul").click(function(){
                        $(".tab4 .single-bottom").slideToggle(300);
                        $(".tab5 .single-bottom").hide();
                        $(".tab3 .single-bottom").hide();
                        $(".tab2 .single-bottom").hide();
                        $(".tab1 .single-bottom").hide();
                    })
                    $(".tab5 ul").click(function(){
                        $(".tab5 .single-bottom").slideToggle(300);
                        $(".tab4 .single-bottom").hide();
                        $(".tab3 .single-bottom").hide();
                        $(".tab2 .single-bottom").hide();
                        $(".tab1 .single-bottom").hide();
                    })
                });
            </script>
            <!-- script -->

            <h4>DISCOUNTS</h4>
            <div class="row row1 scroll-pane">
                <div class="col col-4">
                    <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Upto - 10% (20)</label>
                </div>
                <div class="col col-4">
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>40% - 50% (5)</label>
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>30% - 20% (7)</label>
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>10% - 5% (2)</label>
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Other(50)</label>
                </div>
            </div>
    </section>
    <section  class="sky-form">
        <h4>Бренды</h4>
        <div class="row row1 scroll-pane">
            <div class="col col-4">
                @foreach($brands as $brand)
                    <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>{{ $brand->title }}</label>
                @endforeach
            </div>
        </div>
    </section>
    <section  class="sky-form">
        <h4>Price</h4>
        <div class="row row1 scroll-pane">
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>$50.00 and Under (30)</label>
            </div>
            <div class="col col-4">
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$100.00 and Under (30)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$200.00 and Under (30)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$300.00 and Under (30)</label>
                <label class="checkbox"><input type="checkbox" name="checkbox"><i></i>$400.00 and Under (30)</label>
            </div>
        </div>
    </section>
</div>