@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img src="{{url('assets/images/track.jpg')}}" style="width:100%" alt="track">
        </div>
        <div class="col-md-6 d-flex align-items-center"><form action="">
            <div class="form-group pb-3">
                <select class="form-control" name="track-system" id="">
                    <option value="">CN Number</option>
                    <option value="">Receiver Cotact</option>
                    <option value="">Sender Cotact</option>
                </select>
              </div>
            <div class="form-group pb-3">
                <select class="form-control" name="track-limit" id="">
                    <option value="">Last 7 days</option>
                    <option value="">Last 14 days</option>
                    <option value="">Last 21 days</option>
                    <option value="">Last 30 days</option>
                </select>
              </div>
              <div class="form-group pb-3">
                <input class="form-control" type="search" name="track-search" placeholder="Track your order">
              </div>
              <input type="submit" class="btn btn-primary" value="Search">
        </form></div>
    </div>
</div>

@endsection