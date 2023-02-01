@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <img src="{{url('assets/images/track.jpg')}}" style="width:100%" alt="track">
        </div>
        <div class="col-md-6 d-flex align-items-center">
            <form action="">
            <div class="form-group pb-3">
                <select class="form-control shadow rounded" id="track-system">
                    {{-- <option value="">CN Number</option> --}}
                    <option value="receiver_contact">Receiver Contact</option>
                    <option value="sender_contact">Sender Contact</option>
                </select>
              </div>
            {{-- <div class="form-group pb-3">
                <select class="form-control shadow rounded" name="track-limit" id="">
                    <option value="">Last 7 days</option>
                    <option value="">Last 14 days</option>
                    <option value="">Last 21 days</option>
                    <option value="">Last 30 days</option>
                </select>
              </div> --}}
              <div class="form-group pb-3">
                <input class="form-control shadow rounded" type="search" name="track-search" placeholder="Track your order">
              </div>
              <input class="form-control btn btn-outline-danger shadow rounded" type="button" value="Search" id="search">
        </form></div>
    </div>
</div>

@endsection
@push('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#search').click(function () { 
            var trackSystem = $("#track-system").val();
            var trackSearch = $("input[name='track-search']").val();
            // alert(trackSearch+trackSystem)
            $.get('http://127.0.0.1:8000/track-order')
        });
    });
</script>
@endpush()