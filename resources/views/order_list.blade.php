@extends('layouts.app')

@section('content')
  <table class="table table-striped">
    <tr>
      <th>Sender Name</th>
      <th>Receiver Name</th>
      <th>Status</th>
    </tr>
    @foreach ($orders as $order)
      <tr>
        <td>{{ $order->receiver_name }}</td>
        <td>{{ $order->sender_name }}</td>
        <td>
          <select name="" id="">

            @foreach ($actions as $action)
              <option value="{{ $action->id }}">{{ $action->status }}</option>
            @endforeach

          </select>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
