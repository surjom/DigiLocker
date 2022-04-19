@extends('master')
@section('content')
<div class="custom-product">
     <div class="col-sm-6">
     <table class="table table-striped">
    <tbody>
      <tr>
        <td>Scheme Upto</td>
        <td>{{$total}} INR</td>
      </tr>
      <tr>
        <td>Paid Upto</td>
        <td>50000 Rupees</td>
      </tr>
      <tr>
        <td>Information Storage Cost</td>
        <td>5000 Rupees</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$total+50000+5000}} INR</td>
      </tr>
    </tbody>
  </table>

    <form method='POST' action="orderplace">
    {{ csrf_field() }}
  <div class="form-group">
    <textarea placeholder="Enter Your Address or Online Address with Valid Contact Info" name="address" class="form-control"></textarea>
  </div>
  <div class="form-group">
  <label for="">Payment & Information Sharing Process</label>
  <p>
    <input type="radio" value="Online" name="payment"><span> Online </span>
  </p>
   <p>
    <input type="radio" value="Online With D2D" name="payment"><span> Online with Individual </span>
  </p>
   <p>
    <input type="radio" value="D2D" name="payment"><span> Door To Door</span>
  </p>
  </div>
  <button type="submit" class="btn btn-default"> Apply Now</button>
</form>
      
     </div>
</div>
@endsection