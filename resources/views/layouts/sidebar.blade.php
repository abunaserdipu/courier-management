<nav class="navbar bg-light sticky-top">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ url('order') }}" role="button" data-bs-toggle="dropdown">Orders</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="{{ url('order') }}">Order List</a></li>
          <li><a class="dropdown-item" href="{{ url('order/create') }}">New Order</a></li>
          <li><a class="dropdown-item" href="#">A third link</a></li>
      </li>
    </ul>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('track') }}">Track</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Profile</a>
    </li>


    </ul>
  </div>
</nav>
