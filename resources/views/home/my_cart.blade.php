
<!DOCTYPE html>
<html lang="en">
<head>
    
   

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with FoodHut landing page.">
    <meta name="author" content="Devcrud">
    <title>FoodHut | Free Bootstrap 4.3.x template</title>
   
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <link rel="stylesheet" href="assets/vendors/animate/animate.css">

    <!-- Bootstrap + FoodHut main styles -->
	<link rel="stylesheet" href="assets/css/foodhut.css">

   

</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- Navbar -->
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top " data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-5">
                <li class="nav-item ">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
               
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/logo.svg" class="brand-img" alt="">
                <span class="brand-txt">Food Hut</span>
            </a>
            <ul class="navbar-nav">
                
                @if (Auth::check() && Auth::user()->hasUsertype('user'))
               
                {{-- <li class="nav-item">
                    <a href="{{ route('logout') }}" class="btn btn-primary ml-xl-4">Logout</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('my_cart') }}">Cart<span class="sr-only">(current)</span></a>
                </li>
                <form action="{{ route('logout') }}" method="POST" class="nav-item">
                    @csrf
                   
                    <button type="submit" class="btn btn-primary ml-xl-4 ">logout</button>
                </form>


            @else
            <li class="nav-item">
                <a class="nav-link" href="{{route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
            @endif
            
            </ul>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="gallery" class="text-center has-height-md middle-items wow fadeIn">
        <table class="table table-hover text-light">
            <tr>
                <th>Food Title</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Remove</th>
            </tr>

            <?php $total_price = 0; ?>

            @foreach ($cart as $cart)
            <tr>
                <td>{{ $cart->title }}</td>
                <td>{{ $cart->price }}</td>
                <td>{{ $cart->quantity }}</td>
                <td>
                    <img height="50px" src="food_image/{{ $cart->image }}" alt="">
                </td>
                <td>
                    <a href="{{ route('remove_cart', $cart->id) }}" class="btn btn-danger">Remove</a>
                </td>
            </tr>
            <?php $total_price += $cart->price; ?>
            @endforeach
        </table>

        <h1 class="mt-5">Your total price is RS {{ $total_price }}</h1>
        
        <div class="d-flex justify-content-center my-3">
            <button class="btn btn-primary col-3" data-bs-toggle="modal" data-bs-target="#checkoutModal">Checkout</button>
        </div>
            
</div>

    <!-- Modal -->
    <div class="modal fade mt-5 py-5" id="checkoutModal" tabindex="-1" aria-labelledby="checkoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark text-light">
                    <h5 class="modal-title" id="checkoutModalLabel">Checkout Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-dark">
                    <form action="{{ route('confirm_order') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" value="{{ Auth()->user()->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" value="{{ Auth()->user()->email}}" >
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="number" name="phone" id="phone" class="form-control" placeholder="Enter your phone number" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter your address" required>
                        </div>
                        <span class="badge bg-success fs-5 my-2">Total Price is Rs{{ $total_price }}</span>
                        <button type="submit" class="btn btn-danger w-100">Confirm Order</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    
  
  
    

   

	<!-- core  -->
   


    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    

    <!-- bootstrap affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- wow.js -->
    <script src="assets/vendors/wow/wow.js"></script>
    
    <!-- google maps -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- FoodHut js -->
    <script src="assets/js/foodhut.js"></script>

</body>
</html>

