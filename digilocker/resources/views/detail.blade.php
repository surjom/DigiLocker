@extends('master')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-6">
		<img class="detail-img" src="{{$product['gallery']}}" alt="">
		</div>
		<div class="col-sm-6">
			<a href="/">Go Back</a>
		<h2>Enterprises : {{$product['name']}}</h2>
		<h3>Scheme Upto : {{$product['price']}}</h3>
		<h4>Category : {{$product['category']}}</h4>
		<h4>Description : {{$product['description']}}</h4>
		<br><br>
		<form action="/add_to_cart" method="POST">
		{{ csrf_field() }}
			<input type="hidden" name="product_id" value="{{$product['id']}}">
			<button class="btn btn-success">Apply Now</button>
		</form>
		<br><br>
			<button class="btn btn-primary">Register Now</button>
		</div>
	</div>
</div>
@endsection