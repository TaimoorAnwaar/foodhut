
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
    <nav class="custom-navbar navbar navbar-expand-lg navbar-dark fixed-top" data-spy="affix" data-offset-top="10">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallary">Gallary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#book-table">Book-Table</a>
                </li>
            </ul>
            <a class="navbar-brand m-auto" href="#">
                <img src="assets/imgs/logo.svg" class="brand-img" alt="">
                <span class="brand-txt">Food Hut</span>
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog<span class="sr-only">(current)</span></a>
                </li>
                @if (Auth::check() && Auth::user()->hasUsertype('user'))
               
                {{-- <li class="nav-item">
                    <a href="{{ route('logout') }}" class="btn btn-primary ml-xl-4">Logout</a>
                </li> --}}

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('my_cart') }}">Cart<span class="sr-only">(current)</span></a>
                </li>
                <form action="{{ route('logout') }}" method="POST" class="nav-item">
                    @csrf
                   
                    <button type="submit" class="btn btn-primary ml-xl-4 ">Logout</button>
                </form>


            @elseif(Auth::check() && Auth::user()->hasUsertype('admin'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
            </li>
            <form action="{{ route('logout') }}" method="POST" class="nav-item">
                @csrf
               
                <button type="submit" class="btn btn-primary ml-xl-4 ">Logout</button>
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
    <!-- header -->
    <header id="home" class="header">
        <div class="overlay text-white text-center">
            <h1 class="display-2 font-weight-bold my-3">Food Hut</h1>
            <h2 class="display-4 mb-5">Always fresh &amp; Delightful</h2>
            <a class="btn btn-lg btn-primary" href="#gallary">View Our gallary</a>
        </div>
    </header>

    <!--  About Section  -->
    <div id="about" class="container-fluid wow fadeIn" id="about"data-wow-duration="1.5s">
        <div class="row">
            <div class="col-lg-6 has-img-bg"></div>
            <div class="col-lg-6">
                <div class="row justify-content-center">
                    <div class="col-sm-8 py-5 my-5">
                        <h2 class="mb-4">About Us</h2>
                        <p>Welcome to <strong>Food Hut</strong>, where every dish tells a story, and every moment is an unforgettable experience. Nestled in the heart of <strong>Lahore</strong>, we take pride in serving a rich array of culinary delights crafted with love, passion, and the freshest ingredients. <br><br> Every dish we serve is thoughtfully crafted with the freshest, locally sourced ingredients, ensuring that each bite is a harmonious blend of quality and taste. Our menu is a reflection of our love for culinary diversity, offering a delightful mix of classic recipes and innovative creations that cater to all palates. Whether you’re joining us for a casual lunch, a romantic dinner, or a family gathering, our warm and inviting ambiance is designed to make you feel right at home.  </p>
                        <p><b> we believe that food is not just about nourishment but also about creating moments that bring people together and leave lasting memories.</b></p>
                        <p>Come and experience a culinary journey like no other. At <b>Food Hut</b>, it's not just about the food; it's about the people, the laughter, and the joy of sharing a meal.
<br>
<br>

                          <strong>  We look forward to welcoming you soon! </strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  gallary Section  -->
    <div id="gallary" class="text-center bg-dark text-light has-height-md middle-items wow fadeIn">
        <h2 class="section-title">OUR MENU</h2>
    </div>
    <div class="gallary row">
        @foreach ($food as $item)
            
      
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="food_image/{{ $item->image }}" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img h-100">
            <div class="gallary-overlay d-flex flex-column justify-content-center align-items-center text-white text-center">
                <h3 class="mb-3">{{ $item->title }}</h3>
                <p class="mb-2">{{ $item->detail }}</p>
                <span class="badge bg-success fs-5 p-2">Rs {{ $item->price }}</span>
            </div>
            
           
        </div>
        @endforeach
        {{-- <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-2.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-3.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-4.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-5.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-6.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-7.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
       
            
        
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-8.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
       
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-9.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-10.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-11.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div>
        <div class="col-sm-6 col-lg-3 gallary-item wow fadeIn">
            <img src="assets/imgs/gallary-12.jpg" alt="template by DevCRID http://www.devcrud.com/" class="gallary-img">
            <a href="#" class="gallary-overlay">
                <i class="gallary-icon ti-plus"></i>
            </a>
        </div> --}}
    </div>

    <!-- book a table Section  -->
    <div class="container-fluid has-bg-overlay text-center text-light has-height-lg middle-items" id="book-table">
        <div class="">
            <h2 class="section-title mb-5">BOOK A TABLE</h2>
<form action="{{  route('book_table')  }}" method="post">
    @csrf

            <div class="row mb-5">
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="text" id="booktable" class="form-control form-control-lg custom-form-control" name="phone" placeholder="Phone Number">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="number" id="booktable" class="form-control form-control-lg custom-form-control"  name="n_guest" placeholder="NUMBER OF GUESTS" max="20" min="0">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="time" id="booktable" class="form-control form-control-lg custom-form-control" name="time" placeholder="Time">
                </div>
                <div class="col-sm-6 col-md-3 col-xs-12 my-2">
                    <input type="date" id="booktable" class="form-control form-control-lg custom-form-control" name="date" placeholder="Date">
                </div>
            </div>
            <input type="submit" class="btn btn-lg btn-primary " id="rounded-btn" value="Book Table">
        </form>
        </div>
    </div>

    <!-- BLOG Section  -->
    <div id="blog" class="container-fluid bg-dark text-light py-5 text-center wow fadeIn">
        <h2 class="section-title py-5">Our All Food</h2>
        <div class="row justify-content-center">
           
        </div>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="foods" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                    @foreach ($food as $food)
                        
                   
                    <div class="col-lg-4 col-md-6 mb-3">
                        <div class="card bg-transparent border  h-100" >
                            <img height="250" src="food_image/{{ $food->image }}" alt="template by DevCRID http://www.devcrud.com/" class="rounded-0 card-img-top mg-responsive">
                           
                            <div class="card-body">
                                <h1 class="text-center mb-4 badge badge-primary " style="font-size: 2rem;">Rs {{ $food->price }}</h1>
                                <h4 class="pt20 pb20">{{ $food->title }} </h4>
                                <p class="text-white">{{ $food->detail }} </p>
                               
                            </div>

@if (Auth::check() && Auth::user()->hasUsertype('admin'))
    
<div class="d-flex justify-content-center mb-4 ">
    <form action="{{ route('Delete_food', $food->id) }}" method="POST">
        @csrf
       
        <button type="submit" class="btn btn-danger "style="margin-right: 20px">Delete</button>
    </form>
    
    <a href="{{ route('update_food',$food->id) }}" class="btn btn-success"> Update</a>
</div>
@else
<form id="cartForm" action="{{ route('add_cart', $food->id) }}" class="mb-2" method="POST">
    @csrf
    <div class="d-flex justify-content-center">
        <input type="number" min="1" name="qty" class="form-control w-50" required>
        <button type="button" id="addcart" class="btn btn-danger">Add To Cart</button>
    </div>
</form>
        @endif
                           
                        </div>
                      
                      
                   
                </div>
                @endforeach
            </div>
           
        </div>
    </div>

    <!-- REVIEWS Section  -->
    <div id="testmonial" class="container-fluid wow fadeIn bg-dark text-light has-height-lg middle-items">
        <h2 class="section-title my-5 text-center">REVIEWS</h2>
        <div class="row mt-3 mb-5">
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Bilal</h3>
                    <div class="testmonial-body">
                        <p>From the warm ambiance to the beautifully presented dishes, everything about this place is perfection. The chefs clearly put their heart and soul into their creations. Highly recommend</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card">
                    <h3 class="testmonial-title">Sarah</h3>
                   
                    <div class="testmonial-body">
                        <p>The food at Food Hut is out of this world. Every dish is bursting with flavor, and the staff is incredibly friendly and attentive. I’ve been here multiple times, and it never disappoints!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-3 my-md-0">
                <div class="testmonial-card ">
                    <h3 class="testmonial-title">Tauqeer</h3>
                    <div class="testmonial-body">
                        <p>I’ve tried many restaurants, but this one stands out. The attention to detail, the fresh ingredients, and the creative dishes make it my go-to spot for special occasions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CONTACT Section  -->
    <div id="contact" class="container-fluid bg-dark text-light border-top wow fadeIn">
        <div class="row">
            <div class="col-md-6 px-0">
                <div id="map" style="width: 100%; height: 100%; min-height: 400px"></div>
            </div>
            <div class="col-md-6 px-5 has-height-lg middle-items">
                <h3>FIND US</h3>
                <p></p>
                <div class="text-muted">
                    <p><span class="ti-location-pin pr-3"></span>  DHA Phase 4 , Lahore, Pakistan</p>
                    <p><span class="ti-support pr-3"></span> (0316) 4201-521</p>
                    <p><span class="ti-email pr-3"></span>info@foodhut.com</p>
                </div>
            </div>
        </div>
    </div>

    <!-- page footer  -->
    <div class="container-fluid bg-dark text-light has-height-md middle-items border-top text-center wow fadeIn">
        <div class="row">
            <div class="col-sm-4">
                <h3>EMAIL US</h3>
                <P class="text-muted">info@foodhut.com</P>
            </div>
            <div class="col-sm-4">
                <h3>CALL US</h3>
                <P class="text-muted">(0316) 4201-521</P>
            </div>
            <div class="col-sm-4">
                <h3>FIND US</h3>
                <P class="text-muted">DHA Phase 4 , Lahore, Pakistan</P>
            </div>
        </div>
    </div>
    <div class="bg-dark text-light text-center border-top wow fadeIn">
        <p class="mb-0 py-3 text-muted small">&copy; Copyright <script>document.write(new Date().getFullYear())</script> </p>
    </div>
    <!-- end of page footer -->

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $(document).ready(function() {
        $('#addcart').on('click', function() {
            const qty = $('input[name="qty"]').val();
            const url = $('#cartForm').attr('action'); 
            const token = $('input[name="_token"]').val(); 

            if (!qty || qty <= 0) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops',
                    text: 'Please enter a valid quantity!',
                });
                return;
            }

            Swal.fire({
                title: 'Add to Cart',
                text: 'Do you really want to add the product?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, add it!',
            }).then((result) => {
                if (result.isConfirmed) {
                    
                    $.ajax({
                        url: url,
                        method: 'POST',
                        data: {
                            _token: token, 
                            qty: qty 
                        },
                        success: function(response) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Success',
                                text: 'Product added to cart successfully!',
                            });
                        },
                        error: function(xhr) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'Failed to add the product. Please try again.',
                            });
                        }
                    });
                }
            });
        });
    });
</script>

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

