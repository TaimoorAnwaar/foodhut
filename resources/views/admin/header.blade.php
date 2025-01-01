<header class="header">   
    <nav class="navbar navbar-expand-lg">
      <div class="search-panel">
        <div class="search-inner d-flex align-items-center justify-content-center">
          <div class="close-btn">Close <i class="fa fa-close"></i></div>
          <form id="searchForm" action="#">
            <div class="form-group">
              <input type="search" name="search" placeholder="What are you searching for...">
              <button type="submit" class="submit">Search</button>
            </div>
          </form>
        </div>
      </div>
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="index.html" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">FoodHut</strong><strong>Admin</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
          <!-- Sidebar Toggle Btn-->
          <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
        </div>
        <div class="right-menu list-inline no-margin-bottom">    
          
          
          <!-- Tasks end-->
          <!-- Megamenu-->
          {{-- <div class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Mega <i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu megamenu">
              <div class="row">
                <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                  <ul class="list-unstyled mb-3">
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Sed ut perspiciatis</a></li>
                    <li><a href="#">Voluptatum deleniti</a></li>
                    <li><a href="#">At vero eos</a></li>
                    <li><a href="#">Consectetur adipiscing</a></li>
                    <li><a href="#">Duis aute irure</a></li>
                    <li><a href="#">Necessitatibus saepe</a></li>
                    <li><a href="#">Maiores alias</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                  <ul class="list-unstyled mb-3">
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Sed ut perspiciatis</a></li>
                    <li><a href="#">Voluptatum deleniti</a></li>
                    <li><a href="#">At vero eos</a></li>
                    <li><a href="#">Consectetur adipiscing</a></li>
                    <li><a href="#">Duis aute irure</a></li>
                    <li><a href="#">Necessitatibus saepe</a></li>
                    <li><a href="#">Maiores alias</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                  <ul class="list-unstyled mb-3">
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Sed ut perspiciatis</a></li>
                    <li><a href="#">Voluptatum deleniti</a></li>
                    <li><a href="#">At vero eos</a></li>
                    <li><a href="#">Consectetur adipiscing</a></li>
                    <li><a href="#">Duis aute irure</a></li>
                    <li><a href="#">Necessitatibus saepe</a></li>
                    <li><a href="#">Maiores alias</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 col-md-6"><strong class="text-uppercase">Elements Heading</strong>
                  <ul class="list-unstyled mb-3">
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Sed ut perspiciatis</a></li>
                    <li><a href="#">Voluptatum deleniti</a></li>
                    <li><a href="#">At vero eos</a></li>
                    <li><a href="#">Consectetur adipiscing</a></li>
                    <li><a href="#">Duis aute irure</a></li>
                    <li><a href="#">Necessitatibus saepe</a></li>
                    <li><a href="#">Maiores alias</a></li>
                  </ul>
                </div>
              </div>
              <div class="row megamenu-buttons text-center">
                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i><strong>Demo 1</strong></a></div>
                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i><strong>Demo 2</strong></a></div>
                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i><strong>Demo 3</strong></a></div>
                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i><strong>Demo 4</strong></a></div>
                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i><strong>Demo 5</strong></a></div>
                <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i><strong>Demo 6</strong></a></div>
              </div>
            </div>
          </div> --}}
          <!-- Megamenu end     -->
          <!-- Languages dropdown    -->
          
          <!-- Log out               -->
          <div class="list-inline-item logout">                  
           <form action="{{ route('logout') }}" method="POST">
            @csrf
            <input type="submit" class="btn btn-primary" value="Logout">
           </form>
          </div>
        </div>
      </div>
    </nav>
  </header>