




    {{--<div class="modal-dialog modal-lg">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header">--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">--}}
                    {{--&times;</button>--}}
                {{--<h4 class="modal-title" id="myModalLabel">Don't Wait, Login now!</h4>--}}

            {{--</div>--}}
            {{--<div class="modal-body modal-body-sub">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-8 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">--}}
                        {{--<div class="sap_tabs">--}}
                            {{--<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">--}}
                                {{--<ul>--}}
                                    {{--<li class="resp-tab-item" aria-controls="tab_item-0"><span>Sign in</span></li>--}}
                                    {{--<li class="resp-tab-item" aria-controls="tab_item-1"><span>Sign up</span></li>--}}
                                {{--</ul>--}}
                                {{--<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">--}}
                                    {{--<div class="facts">--}}
                                        {{--<div class="register">--}}
                                            {{--<form class="form-horizontal" action="" method="POST">--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label col-md-3">Email Address</label>--}}
                                                    {{--<div class="col-md-9" >--}}
                                                        {{--<input type="email" name="email" class="form-control"/>--}}
                                                        {{--{{$errors->has('email') ? $errors->first('email'):' '}}--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label col-md-3">Password</label>--}}
                                                    {{--<div class="col-md-9" >--}}
                                                        {{--<input type="password" name="password" class="form-control"/>--}}
                                                        {{--{{$errors->has('password') ? $errors->first('password'):' '}}--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group">--}}

                                                    {{--<div class="col-md-9 col-md-offset-3">--}}
                                                        {{--<input type="submit" name="btn" class="btn btn-success btn-block"/>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">--}}
                                    {{--<div class="facts">--}}
                                        {{--<div class="register">--}}
                                            {{--<form class="form-horizontal" action="{{url('/new-customer')}}" method="POST">--}}
                                                {{--{{csrf_field()}}--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label col-md-3">First Name</label>--}}
                                                    {{--<div class="col-md-9" >--}}
                                                        {{--<input type="text" name="first_name" class="form-control"/>--}}
                                                        {{--{{$errors->has('first_name') ? $errors->first('first_name'):' '}}--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}


                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label col-md-3">Last Name</label>--}}
                                                    {{--<div class="col-md-9" >--}}
                                                        {{--<input type="text" name="last_name" class="form-control"/>--}}
                                                        {{--{{$errors->has('last_name') ? $errors->first('last_name'):' '}}--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label col-md-3">Email</label>--}}
                                                    {{--<div class="col-md-9" >--}}
                                                        {{--<input type="email" name="email" class="form-control"/>--}}
                                                        {{--{{$errors->has('email') ? $errors->first('email'):' '}}--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}

                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label col-md-3">Password</label>--}}
                                                    {{--<div class="col-md-9" >--}}
                                                        {{--<input type="password" name="password" class="form-control"/>--}}
                                                        {{--{{$errors->has('password') ? $errors->first('password'):' '}}--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}

                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label col-md-3">Phone Number</label>--}}
                                                    {{--<div class="col-md-9" >--}}
                                                        {{--<input type="number" name="phone_number" class="form-control"/>--}}
                                                        {{--{{$errors->has('phone_number') ? $errors->first('phone_number'):' '}}--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group">--}}
                                                    {{--<label class="control-label col-md-3">Address</label>--}}
                                                    {{--<div class="col-md-9" >--}}
                                                        {{--<textarea name="address" class="form-control" style="resize: vertical"></textarea>--}}
                                                        {{--{{$errors->has('last_name') ? $errors->first('last_name'):' '}}--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-group">--}}

                                                    {{--<div class="col-md-9 col-md-offset-3">--}}
                                                        {{--<input type="submit" name="btn" class="btn btn-success btn-block"/>--}}
                                                    {{--</div>--}}
                                                {{--</div>--}}
                                            {{--</form>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<script src="{{asset('/front/')}}/js/easyResponsiveTabs.js" type="text/javascript"></script>--}}
                        {{--<script type="text/javascript">--}}
                            {{--$(document).ready(function () {--}}
                                {{--$('#horizontalTab').easyResponsiveTabs({--}}
                                    {{--type: 'default', //Types: default, vertical, accordion--}}
                                    {{--width: 'auto', //auto or any width like 600px--}}
                                    {{--fit: true   // 100% fit in a container--}}
                                {{--});--}}
                            {{--});--}}
                        {{--</script>--}}
                        {{--<div id="OR" class="hidden-xs">OR</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4 modal_body_right modal_body_right1">--}}
                        {{--<div class="row text-center sign-with">--}}
                            {{--<div class="col-md-12">--}}
                                {{--<h3 class="other-nw">Sign in with</h3>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12">--}}
                                {{--<ul class="social">--}}
                                    {{--<li class="social_facebook"><a href="#" class="entypo-facebook"></a></li>--}}
                                    {{--<li class="social_dribbble"><a href="#" class="entypo-dribbble"></a></li>--}}
                                    {{--<li class="social_twitter"><a href="#" class="entypo-twitter"></a></li>--}}
                                    {{--<li class="social_behance"><a href="#" class="entypo-behance"></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<script>--}}
        {{--$('#myModal88').modal('show');--}}
    {{--</script>--}}
    {{--<!-- header modal -->--}}
    {{--<!-- header -->--}}
</div>
    <div class="header" id="home1">
        <div class="container">
            <div class="w3l_login">
                @if(Session::get('customerId'))
                    <h3><a href="#" onclick="event.preventDefault(); document.getElementById('customerLogoutForm').submit();">Log Out</a><h3/>
                        <form action="{{url('/customer-logout')}}" method="POST" id="customerLogoutForm">

                        </form>
                    @else
                      <h3><a href="{{url('/checkout')}}">Log In</a><h3/>

                  @endif
            </div>
            <div class="w3l_logo">
                <h1><a href="index.html">Electronic Store<span>Your stores. Your place.</span></a></h1>
            </div>
            <div class="search">
                <input class="search_box" type="checkbox" id="search_box">
                <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
                <div class="search_form">
                    <form action="#" method="post">
                        <input type="text" name="Search" placeholder="Search...">
                        <input type="submit" value="Send">
                    </form>
                </div>
            </div>
            <div class="cart cart box_1">


                <a href="{{url('/show-cart')}}"><button class="w3view-cart" style="display: block; margin-right:50px" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button></a>
                 <br/>

                @if(Cart::count()==0)
                    <h6>Empty Cart</h6>


                @else
                    <h6>TK.{{Session::get('grand_total')}} ({{Cart::count()}} iteams)</h6>
                @endif
            </div>
        </div>
    </div>
    <!-- //header -->
    <!-- navigation -->
    <div class="navigation">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li><a href="{{url('/')}}" class="act">Home</a></li>
                        <!-- Mega Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products <b class="caret"></b></a>
                            <ul class="dropdown-menu multi-column columns-3">
                                <div class="row">

                                    <div class="col-sm-3">
                                        <ul class="multi-column-dropdown">
                                            <h6>Electronics</h6>
                                              @foreach($publishedCategories as $publishedCategory)
                                                <li><a href="{{url('/product-category/'.$publishedCategory->id)}}">{{$publishedCategory->category_name}}</a></li>
                                               @endforeach
                                        </ul>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="w3ls_products_pos">
                                            <h4>30%<i>Off/-</i></h4>
                                            <img src="{{asset('/front/')}}/images/1.jpg" alt=" " class="img-responsive" />
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li class="w3pages"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="icons.html">Web Icons</a></li>
                                <li><a href="codes.html">Short Codes</a></li>
                            </ul>
                        </li>
                        <li><a href="mail.html">Mail Us</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
