@extends('front.master')
@section('content')

    <div class="banner banner2">
        <div class="container">
            <h2>Top Selling <span>Gadgets</span> Flat <i>25% Discount</i></h2>
        </div>
    </div>
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Products1</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- mobiles -->



    <div class="container">
        <br>

        <div class="row">
            <div class="col-md-5 ">
                <img src="{{asset($product->product_image)}}" alt=" " class="img-responsive" style="width: 400px;width: 400px"/>
            </div>
            <div class="col-md-7 ">

                <h4 style="color: red;text-align: center; padding:5px">{{$product->product_name}}</h4>
                <div class="well">
          <div class="row">


                    <div class="col-md-6">
                        <div class="modal_body_right_cart simpleCart_shelfItem">
                            <p><span>$380</span> <i class="item_price">$350</i></p>
                            <form action="{{url('/add-to-cart')}}" method="POST">
                                {{ csrf_field() }}
                                 <div class="form-group">
                                     <input type="number" name="qty" value="1" min="1">
                                     <input type="hidden" name="product_id" value="{{$product->id}}">
                                 </div>
                                <div class="form-group">
                                    <input type="submit"  class="w3ls-cart" name="btn" value="Add To Cart">

                                </div>
                            </form>

                        </div><br>
                        <h5>Color</h5><br>
                        <div class="color-quality">
                            <ul>
                                <li><a href="#"><span></span></a></li>
                                <li><a href="#" class="brown"><span></span></a></li>
                                <li><a href="#" class="purple"><span></span></a></li>
                                <li><a href="#" class="gray"><span></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 style="color: green; padding:5px">product Description</h4>
                        <p>{{$product->long_description}}</p><br><br>

                    </div>



                </div>
          </div>
            </div>
        </div>
    </div>





    <!-- Related Products -->
    <div class="w3l_related_products">
        <div class="container">
            <h3>Related Products</h3>

            <ul id="flexiselDemo2">
                @foreach($relatedProducts as $relatedProduct)
                <li>
                    <div class="w3l_related_products_grid">
                        <div class="agile_ecommerce_tab_left mobiles_grid">
                            <div class="hs-wrapper hs-wrapper3">
                                <img src="{{asset($relatedProduct->product_image)}}" alt=" " class="img-responsive" />

                                <div class="w3_hs_bottom">
                                    <div class="flex_ecommerce">
                                        <a href="#" data-toggle="modal" data-target="#myModal6"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                                    </div>
                                </div>
                            </div>
                            <h5>{{$relatedProduct->product_name}}</h5>
                            <div class="simpleCart_shelfItem">
                                <p class="flexisel_ecommerce_cart"><span>{{$relatedProduct->product_price}}</span> <i class="item_price">{{$relatedProduct->product_price*.85}}</i></p>
                                <form action="#" method="post">
                                    <input type="hidden" name="cmd" value="_cart">
                                    <input type="hidden" name="add" value="1">
                                    <input type="hidden" name="w3ls_item" value="{{$relatedProduct->product_name}}">
                                    <input type="hidden" name="amount" value="{{$relatedProduct->product_price*.85}}">
                                    <button type="submit" class="w3ls-cart">Add to cart</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>

              @endforeach

            </ul>

            <script type="text/javascript">
                $(window).load(function() {
                    $("#flexiselDemo2").flexisel({
                        visibleItems:4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:568,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:667,
                                visibleItems:2
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{asset('/front/')}}/js/jquery.flexisel.js"></script>
        </div>
    </div>

@endsection