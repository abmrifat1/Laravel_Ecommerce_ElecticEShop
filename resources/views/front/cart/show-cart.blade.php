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
           <div class="row">
               <div class="col-md-12">
                   <table class="table table-bordered ">

                       <tr>
                           <td>SL NO</td>
                           <td>Product Id</td>
                           <td>Product Name</td>
                           <td>Product Image</td>
                           <td>Product Price</td>
                           <td>Product Quantity</td>
                           <td>Total Price</td>
                           <td>Action</td>
                       </tr>
                       @php($i=1)
                       @php($sum=0)
                       @foreach($cartProducts as $cartProduct)
                           <tr>
                               <td>{{$i++}}</td>
                               <td>{{$cartProduct->id}}</td>
                               <td>{{$cartProduct->name}}</td>
                               <td><img src="{{asset($cartProduct->options->image)}}" alt="" height="40" width="40"/></td>
                               <td>TK.{{$cartProduct->price*.85}}</td>
                               <td>
                                   <form action="{{url('/update-cart-product')}}" method="POST">
                                       {{csrf_field()}}
                                       <input type="number" name="qty" value="{{$cartProduct->qty}}"/>
                                       <input type="hidden" name="rowId" value="{{$cartProduct->rowId}}"/>
                                       <input type="submit" name="btn" value="Update">
                                   </form>
                               </td>

                               <td>TK.{{$total=$cartProduct->qty*$cartProduct->price*.85}}</td>
                               <td>

                                   <a href="{{url('/update-cart-product/'.$cartProduct->rowId)}}" class="btn btn-danger btn-xs" onclick="return confirm('are you sure to remove this??')" title="Delete Cart">
                                       <span class="glyphicon glyphicon-trash"></span>
                                   </a>
                               </td>
                           </tr>
                           @php($sum=$sum+$total)
                           @endforeach
                   </table>

                   <table class="table table-bordered">
                       <tr>
                           <th>Sub Total</th>
                           <th>Discount</th>
                           <th>Tax</th>
                           <th>Grand Total</th>
                       </tr>
                       <tr>
                           <td>BDT. {{$sum}}</td>
                           <td>BDT. {{$discount=($sum*.05)}}</td>
                           <td>BDT. {{$tax=($sum*.025)}}</td>
                           <td>BDT. {{$grandTotal=($sum+$tax-$discount)}}</td>
                           {{Session::put('grand_total',$grandTotal)}};
                       </tr>
                   </table>
               <div class="button text-center">
                   <a href="{{url('/')}}" class="btn btn-success">Continue Shopping</a>

                   @if(Session::get('customerId') && Session::get('shippingId'))
                       <a href="{{url('/payment-info')}}" class="btn btn-info">Check Out</a>

                   @elseif(Session::get('customerId'))
                       <a href="{{url('/shipping-info')}}" class="btn btn-info">Check Out</a>

                   @else
                       <a href="{{url('/checkout')}}" class="btn btn-info">Check Out</a>

                   @endif
               </div>

               </div>
           </div>
       </div>
   </div>









@endsection