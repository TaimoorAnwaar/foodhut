<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
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

        <style>

            label{
                display: inline-block;
                width:200px;
            }
            .div_deg{
                padding: 10px;
            }
        </style>
  </head>
  <body>
   @include('admin.header')
    @include('admin.sidebar')
      <div class="page-content">
       {{--  <div class="page-header">
          <div class="container-fluid"> --}}

            <div class="container min-vh-100 d-flex justify-content-center align-items-center">
              <div class="col-12 col-md-8 col-lg-6">
                  <h1 class="d-flex justify-content-center mb-5 text-white">Update The Details</h1>
                  {{-- update food form --}}
                  <form action="{{ route('edit_food', ['food' => $food->id]) }}" method="POST" enctype="multipart/form-data">
                   
                    @csrf
                      <div class="div_deg">
                          <label for=""  class="text-white">Food Title</label>
                          <input type="text" name="title" id="" class="form-control text-white" value="{{ $food->title }}">
                      </div>
          
                      <div class="div_deg">
                          <label for="" class="text-white">Food Details</label>
                          <textarea name="details" id="" cols="50" rows="5" class="form-control text-white" >{{ $food->detail}}</textarea>
                      </div>
          
                      <div class="div_deg">
                          <label for="" class="text-white">Food Price</label>
                          <input type="text" name="price" id="" class="form-control text-white" value="{{ $food->price }}">
                      </div>
          
                      <div class="div_deg">
                          <label for="" class="text-white">Food Image</label>
                          <input type="file" name="img" id="" class="form-control" >
                      </div>
                          <div class="div_deg">
                          <label for="">Current Image</label>
                          <img height="100px" src="food_image/{{ $food->image }}" alt="">
                      </div>
          
                      <div class="div_deg text-white">
                          <input type="submit" value="Update Food" class="btn btn-warning w-100">
                      </div>
                  </form>
              </div>
          </div>
          
      </div>
    </div>
    <!-- JavaScript files-->
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