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
                <li>Cart</li>
            </ul>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <!-- mobiles -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center text-danger" style="font-size: 25px; border: 1px solid #1c2d3f">
                    @if($message=Session::get('message'))
                        {{$message}}
                    @endif
                </div>

            </div>
        </div>
    </div>

    <div class="well">
        <div class="container">
            <h3 class="text-center">You have to login for your valuable oder.If you are not registered then you registation first</h3>
           <hr/>
            <div class="row">
                <div class="col-md-6">
                  <div class="panel-body">
                      <h2 class="text-center text-success">Login Form</h2>
                      <br/>
                      <form class="form-horizontal" action="{{url('/customer-login')}}" method="POST">
                          {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-md-3">Email Address</label>
                            <div class="col-md-9" >
                                <input type="email" required name="email" class="form-control"/>
                                {{$errors->has('email') ? $errors->first('email'):' '}}
                            </div>
                        </div>
                          <div class="form-group">
                              <label class="control-label col-md-3">Password</label>
                              <div class="col-md-9" >
                                  <input type="password" required name="password" class="form-control"/>
                                  {{$errors->has('password') ? $errors->first('password'):' '}}
                              </div>
                          </div>
                          <div class="form-group">

                              <div class="col-md-9 col-md-offset-3">
                                  <input type="submit" name="btn" class="btn btn-success btn-block" value="Login"/>
                              </div>
                          </div>
                      </form>
                  </div>

                </div>
                <div class="col-md-6">
                    <div class="panel-body">
                        <h2 class="text-center text-success">Registation Form</h2>
                        <br/>
                        <form class="form-horizontal" action="{{url('/new-customer')}}" method="POST">
                           {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label col-md-3">First Name</label>
                                <div class="col-md-9" >
                                    <input type="text" required name="first_name" class="form-control"/>
                                    {{$errors->has('first_name') ? $errors->first('first_name'):' '}}
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3">Last Name</label>
                                <div class="col-md-9" >
                                    <input type="text" required name="last_name" class="form-control"/>
                                    {{$errors->has('last_name') ? $errors->first('last_name'):' '}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-9" >
                                    <input type="email" required name="email" class="form-control"/>
                                    {{$errors->has('email') ? $errors->first('email'):' '}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Password</label>
                                <div class="col-md-9" >
                                    <input type="password" required name="password" class="form-control"/>
                                    {{$errors->has('password') ? $errors->first('password'):' '}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Phone Number</label>
                                <div class="col-md-9" >
                                    <input type="number" required name="phone_number" class="form-control"/>
                                    {{$errors->has('phone_number') ? $errors->first('phone_number'):' '}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Address</label>
                                <div class="col-md-9" >
                                   <textarea name="address" required class="form-control" style="resize: vertical"></textarea>
                                    {{$errors->has('last_name') ? $errors->first('last_name'):' '}}
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Registation"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>









@endsection