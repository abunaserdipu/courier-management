@extends('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
  <form action="{{url('order')}}" method="post">
    @csrf
    <p class="bg-info p-2 fs-4">Receiver Information</p>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Receiver Name</label>
      <input class="form-control" type="text" name="receiver_name" id="">
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Receiver Contact</label>
      <input type="text" name="receiver_contact" id="">
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Receiver Address</label>
      <select name="receiver_address" id="">
        <option value="">Select One</option>
        @foreach($locations as $location)
        
        <option value="{{$location->id}}">{{$location->address}}</option>
        @endforeach
      </select>
    </div>
    <p class="bg-info p-2 fs-4">Sender Information</p>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Sender Name</label>
      <input class="form-control" type="text" name="sender_name" id="">
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Sender Contact</label>
      <input class="form-control" type="text" name="sender_contact" id="">
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Sender Address</label>
      <select name="sender_address" id="">
        <option value="">Select One</option>
        @foreach($locations as $location)
        <option value="{{$location->id}}">{{$location->address}}</option>
        @endforeach
      </select>
    </div>

    <p class="bg-info p-2 fs-4">Order Information</p>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Order Type</label>
      <select name="order_type" id="">
        <option value="1">Regular</option>
        <option value="2">Express</option>
      </select>
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Order Weight <small>(per kg)</small></label>
      <input type="text" name="order_weight" value="0.15">
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Order Price</label>
      <input class="form-control" readonly type="text" name="order_price" id="price">
    </div>
    <input type="hidden" value="1" name="order_status">
    <input class="form-control btn btn-info" type="submit" value="Cofirm Order">

  </form>
@endsection

@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("input[name='order_price']").val(60)
    $("input[name='order_weight']").keyup(function () { 
      
      var weightValue = $("input[name='order_weight']").val();
      if(weightValue>1){
        var price = $('#price').val(Number(70 + (weightValue - 1)*20).toFixed());
      }else if(weightValue>=0.5){
        $('#price').val(70);
      }
      else{
        $('#price').val(60);
      }
      
    });
  })
</script>
@endpush
