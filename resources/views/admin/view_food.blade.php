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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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
            
           <h1 class=" d-flex justify-content-center ">All Foods</h1>
        </div>
        <div >
            <table class="table table-dark table-responsive-sm  table-hover table-striped  mt-4">
                <tr>
                    <th>Sr#No</th>
                    <th>Food Title</th>
                    <th class="text-center">Food Detail</th>
                    <th>Food Price</th>
                    <th>Food Image</th>
                    <th class="px-5" >Actions</th>


                </tr>
                @php
                $count=1
            @endphp
               @foreach ($food as $item)
               <tr>
                   <td>{{ $count++ }}</td>
                   <td>{{ $item->title }}</td>
                   <td>{{ $item->detail }}</td>
                   <td>{{ $item->price }}</td>
                   <td>
                       <img src="food_image/{{ $item->image }}" alt="" class="img-fluid" style="max-height: 50px; width: 70px;">
                   </td>
                   <td class="d-flex">
                       <form action="{{ route('Delete_food', $item->id) }}" method="POST">
                           @csrf
                           <button type="submit" class="btn btn-danger" style="margin-right: 20px">Delete</button>
                       </form>
                       <a href="{{ route('update_food', $item->id) }}" class="btn btn-warning"> Update</a>
                   </td>
               </tr>
           @endforeach
           


            </table>
           
        </div>
       
          </div>
          <div class="d-flex justify-content-center mr-5">
            {{ $food->links('pagination::bootstrap-5') }}
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