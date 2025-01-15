<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="admin/https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
   @include('admin.header')
    @include('admin.sidebar')
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

<h1 class="text-center text-white">Order Table</h1>

<table class="table table-striped table-hover mt-5 table-responsive-lg">
    <tr>
        <th>Sr#</th>
        <th>Customer Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Food Title</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Image</th>
        <th>Status</th>
        <th>Change Status</th>
    </tr>
    <?php $i = 1; ?>
    @foreach ($orders as $order)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $order->name }}</td>
            <td>{{ $order->email }}</td>
            <td>{{ $order->phone }}</td>
            <td>{{ $order->address }}</td>
            <td>{{ $order->title }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->price }}</td>
            <td><img height="50px" width="70px" src="/food_image/{{ $order->image }}" alt=""></td>
            <td>{{ $order->delivery_status }}</td>
            <td>
                <div class="dropdown">
                    <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton{{ $order->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                        Change Status
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton{{ $order->id }}">
                        <li><a class="dropdown-item bg-light text-dark" href="{{ route('change_status', ['id' => $order->id, 'status' => 'On the way']) }}">On the way</a></li>
                        <li><a class="dropdown-item bg-light text-dark" href="{{ route('change_status', ['id' => $order->id, 'status' => 'Delivered']) }}">Delivered</a></li>
                        <li><a class="dropdown-item  bg-light text-dark" href="{{ route('change_status', ['id' => $order->id, 'status' => 'Cancelled']) }}">Cancel</a></li>
                    </ul>
                </div>
            </td>
        </tr>
    @endforeach
</table>

          </div>
          <div class="d-flex justify-content-center" style="margin-right: 300px">
            {{ $orders->links('pagination::bootstrap-5') }}
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="admin/vendor/jquery/jquery.min.js"></script>
    <script src="admin/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="admin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="admin/vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="admin/js/charts-home.js"></script>
    <script src="admin/js/front.js"></script>
  </body>
</html>