      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         <div class="container">
            <div class="header_section_top">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="custom_menu">
                        <ul>
                           <li><span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png"></span></li>
                           <li><a href="registration#">Home</a></li>
                           <li><a href="{{ route('catalogue') }}">Catalogues</a></li>
                           <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                           <li><a href="{{ route('form') }}">Sell Your Stuff</a></li>
                           <li><a href="{{ route('login') }}">Log Out</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo">
                        <a href="{{ route('home') }}">
                       <img src="{{ asset('images/Untitled42_20240520114859.png') }}" alt="Logo"></a>
                     </div>
                  </div> 
               </div>
            </div>
         </div>
         <!-- logo section end -->
         <!-- header section start -->
         <div class="header_section">
            <div class="container">
               <div class="containt_main">
                  <div id="mySidenav" class="sidenav">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <a href="{{ route('home') }}">Home</a>
                     <a href="{{ route('catalogue') }}">Catalogues</a>
                     <a href="{{ route('form') }}">Sell Your Stuff</a>
                     <a href="{{ route('login') }}">Log Out</a>
                  </div>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All Category 
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">All Category</a>
                        <a class="dropdown-item" href="#">Fashion</a>
                        <a class="dropdown-item" href="#">Electronic</a>
                        <a class="dropdown-item" href="#">Furniture</a>
                        <a class="dropdown-item" href="#">Toys</a>
                        <a class="dropdown-item" href="#">Cosmetics</a>
                        <a class="dropdown-item" href="#">Others</a>
                     </div>
                  </div>
                  <div class="main">
                     <!-- Another variation with a button -->
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search your favorite product here">
                        <div class="input-group-append">
                           <a href="{{ route('catalogue') }}" class="btn btn-secondary" style="background-color: #f26522; border-color:#f26522 ">
                              <i class="fa fa-search"></i>
                           </a>

                           </button>
                        </div>
                     </div>
                  </div>
                  <div class="header_box">
                     <div class="login_menu">
                        <ul>
                           <li><a href="{{ route('cart') }}">
                              <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                              <span class="padding_10">Cart</span></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- header section end -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">~ GET STARTED ~<br>Your favorite e-commerce<br> to buy thrift stuff</h1>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">~ Sell Your Stuff ~<br>Register your own thrift <br> stuff to sell here!</h1>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">~ our thrift products ~<br>cheap, good quality, <br> fulfill all your needs</h1>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.dropdown-item').on('click', function(){
                var selectedText = $(this).text();
                $('#dropdownMenuButton').text(selectedText);
            });
        });
    </script>