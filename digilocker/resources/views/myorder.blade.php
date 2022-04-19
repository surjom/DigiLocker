@extends('master')
@section('content')
<div class="custom-product">
     <div class="col-sm-10">
       <div class="trending-wrapper">
    <h2>Schemata Apply for</h4>
    <div class="">
    @foreach($orders as $item)
    <div class="row searched-item cart-list-devider">
    <div  class="col-sm-3">
        <a href="detail/{{$item->id}}">
        <img class="trending-image" src="{{$item->gallery}}">
        </a>  
    </div>
    <div  class="col-sm-3">
      <div>
        <h3>{{$item->name}}</h3>
        <h5>Process Status : {{$item->status}}</h5>
        <h5>Payment Status : {{$item->payment_status}}</h5>
        <h5>Process Method : {{$item->payment_method}}</h5>
        <h5>Communication : {{$item->address}}</h5>
        <h5>Enterprise : {{$item->price}}</h5>
      </div>    
    </div>
    <div  class="col-sm-3">
      
    </div>
    </div>
    @endforeach
    </div>
     </div>
</div>
@endsection