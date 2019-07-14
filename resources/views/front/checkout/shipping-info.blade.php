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
                @if($message=Session::get('message'))
                    {{$message}}
                @endif
            </div>
        </div>
    </div>


    <div class="well">
        <div class="container">
            <h3 class="text-center">Welcome {{Session::get('customerName')}}.You have to give us product shipping information to complete your valuable order.If your billing info and shipping info is same then click in shipping info button. </h3>
            <hr/>
            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <div class="panel-body">
                        <h2 class="text-center text-success">Shipping Information</h2>
                        <br/>
                        <form class="form-horizontal" action="{{url('/new-shipping')}}" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label col-md-3">Full Name</label>
                                <div class="col-md-9" >
                                    <input type="text" name="full_name" value="{{$customer->first_name.' '.$customer->last_name}}" class="form-control"/>
                                    {{$errors->has('full_name') ? $errors->first('full_name'):' '}}
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-9" >
                                    <input type="email" name="email" value="{{$customer->email}}" class="form-control"/>
                                    {{$errors->has('email') ? $errors->first('email'):' '}}
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Phone Number</label>
                                <div class="col-md-9" >
                                    <input type="number" name="phone_number" value="{{$customer->phone_number}}" class="form-control"/>
                                    {{$errors->has('phone_number') ? $errors->first('phone_number'):' '}}
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Address</label>
                                <div class="col-md-9" >
                                    <textarea name="address" class="form-control" style="resize: vertical">{{$customer->address}}</textarea>
                                    {{$errors->has('last_name') ? $errors->first('last_name'):' '}}
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-md-9 col-md-offset-3">
                                    <input type="submit" name="btn" class="btn btn-success btn-block" value="Save Shipping Info"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>








@endsection