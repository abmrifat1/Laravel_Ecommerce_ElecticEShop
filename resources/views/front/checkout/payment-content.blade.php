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
            <div class="col-md">
                @if($message=Session::get('message'))
                    {{$message}}
                @endif
            </div>
        </div>
    </div>

    <div class="well">
        <div class="container">
            <h3 class="text-center">You have to give us Payment information to complete your valuable order.</h3>
            <hr/>
            <div class="row">

                <div class="col-md-6 col-md-offset-3">
                    <div class="panel-body">

                        <form class="form-horizontal" action="{{url('/new-order')}}" method="POST">
                            {{csrf_field()}}
                           <table class="table table-bordered ">
                               <tr>
                                   <th>Cash On Delivery</th>
                                   <td><input type="radio" name="payment_type" value="cash_on_delivery"></td>
                               </tr>
                               <tr>
                                   <th>BKash</th>
                                   <td><input type="radio" name="payment_type" value="Bkash"></td>
                               </tr>
                               <tr>
                                   <th>Paypall</th>
                                   <td><input type="radio" name="payment_type" value="paypall"></td>
                               </tr>


                           </table>
                            <h2 class="text-center"><input type="submit" name="btn" class="btn btn-primary" value="Confirmo Order"></h2>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection