<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
      <!-- Sidebar Header-->
      <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="admin/img/20241007_125019.jpg" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
          <h1 class="h5">Rana Taimoor</h1>
          <p>Web Developer</p>
        </div>
      </div>
      <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
      <ul class="list-unstyled">
              <li class="active"><a href="{{ route('admin.dashboard') }}"> <i class="icon-home"></i>Dashboard </a></li>
             
              <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-sign-in"></i>Food </a>
                <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="{{ route('add_food') }}">Add Food</a></li>
                  <li><a href="{{ route('view_food') }}">View Food</a></li>
                  
                </ul>
              </li>
              <li><a href="{{ route('orders') }}"> <i class="fa fa-sign-in"></i>View Order</a></li>
              <li><a href="{{ route('reservations') }}"> <i class="fa fa-sign-in"></i>Reservations</a></li>
              <li><a href="{{ route('my_home') }}"> <i class="fa fa-sign-in"></i> website</a></li>


    </nav>
    <!-- Sidebar Navigation end-->