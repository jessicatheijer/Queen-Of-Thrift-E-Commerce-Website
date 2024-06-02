<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Fashion | Queen of Thrift</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<!-- Responsive-->
<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
<!-- fevicon -->
<link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- fonts -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
<!-- font awesome -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- owl stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

   </head>
   <body>
      
      @include('layouts.header')

      <!-- fashion section start -->
      <div class="fashion_section mt-5">
         <div id="main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <h1 class="fashion_taital">Man & Woman Fashion</h1>
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Man T -shirt</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/tshirt-img.png"></div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Man -shirt</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/dress-shirt-img.png"></div>
                                 <div class="btn_main"><div class="buy_bt"><a href="#" onclick="addToCart(this)" data-product-name="Dress shirt" data-product-price="30" data-product-image="images/dress-shirt-img.png">Add to cart</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">Woman Scart</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">$ 30</span></p>
                                 <div class="tshirt_img"><img src="images/women-clothes-img.png"></div>
                                 <div class="btn_main"><div class="buy_bt"><a href="#" onclick="addToCart(this)" data-product-name="Woman Scart" data-product-price="30" data-product-image="images/women-clothes-img.png">Add to cart</a></div>
                                 <div class="seemore_bt"><a href="#">See More</a></div> 
                                </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

      @include('layouts.footer')

      <script>
         function addToCart(button) {
             // Retrieve product details from data attributes
             var productName = button.getAttribute('data-product-name');
             var productPrice = parseFloat(button.getAttribute('data-product-price'));
             var productImage = button.getAttribute('data-product-image');

             // Construct the product object
             var product = {
                 name: productName,
                 price: productPrice,
                 image: productImage,
                 quantity: 1 // Default quantity is 1
             };

             // Check if cart exists in localStorage
             var cart = localStorage.getItem('cart') ? JSON.parse(localStorage.getItem('cart')) : [];

             // Check if the product already exists in the cart
             var existingProductIndex = cart.findIndex(item => item.name === productName);

             if (existingProductIndex !== -1) {
                 // If the product already exists, increase its quantity and update the price
                 cart[existingProductIndex].quantity++;
                 cart[existingProductIndex].price += productPrice;
             } else {
                 // If the product doesn't exist, add it to the cart
                 cart.push(product);
             }

             // Update the cart in localStorage
             localStorage.setItem('cart', JSON.stringify(cart));

             // Show notification that the product has been added to the cart
             alert(productName + " has been added to your cart!");
         }

      </script>

   </body>
</html>