@extends('layouts.app')

@section('content')
  <form action="">
    <p class="bg-info p-2 fs-4">Receiver Information</p>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Receiver Name</label>
      <input class="form-control" type="text" name="receiver-name" id="">
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Receiver Contact</label>
      <input type="text" name="receiver-contact" id="">
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Receiver Address</label>
      <select name="receiver-address" id="">
        <option value="">Select One</option>
      </select>
    </div>
    <p class="bg-info p-2 fs-4">Sender Information</p>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Sender Name</label>
      <input class="form-control" type="text" name="sender-name" id="">
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Sender Contact</label>
      <input class="form-control" type="text" name="sender-contact" id="">
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Sender Address</label>
      <select name="sender-address" id="">
        <option value="">Select One</option>
      </select>
    </div>

    <p class="bg-info p-2 fs-4">Order Information</p>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Order Type</label>
      <select name="order-type" id="">
        <option value="">Select One</option>
      </select>
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Order Weight</label>
      <input type="text" name="order-weight" id="">
    </div>
    <div class="form-group pb-3">
      <label for="" class="fw-bold">Order Price</label>
      <input class="form-control" type="text" name="order-price" id=""
        value="{{ Request::input('order-weight') }}">
    </div>

  </form>
@endsection
