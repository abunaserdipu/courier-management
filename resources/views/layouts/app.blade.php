<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container-fluid">
    @include('layouts.top-nav')
  
  <div class="row p-0 m-0">
    <div class="col-md-3 ps-0">
      @include('layouts.sidebar')
    </div>
    <div class="col-md-9 pe-0">
      @yield('content')
    </div>
  </div>
</div>

</body>

</html>
