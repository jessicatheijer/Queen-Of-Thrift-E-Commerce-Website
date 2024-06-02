<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Home | Queen of Thrift</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
      <!-- Responsive -->
      <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs -->
      <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}">
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
    <h1 class="fashion_taital">Fashion Recommendation</h1>
    <div id="main_slider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
    <div class="carousel-item active">
        <div class="container">
            <div class="fashion_section_2">
                <div class="row">
                <div class="col-lg-4 col-sm-4">
                  <a href="{{ route('product-1') }}">
                     <div class="box_main">
                         <h4 class="shirt_text">Kemeja Garis Wanita</h4>
                        <p class="price_text">Price <span style="color: #262626;">Rp. 100.000</span></p>
                      <div class="tshirt_img"><img src="images/products/PR0001.png"></div>
                      <div class="btn_main">
                        <div class="seemore_bt">
                    <a href="#" onclick="addToCart(this)" 
                       data-product-name="Kemeja Garis Wanita" 
                       data-product-price="100000" 
                       data-product-image="images/products/PR0001.png">Add to Cart</a>
                      </div>
                     </div>
                     </div>
                  </a>
            </div>

                    <div class="col-lg-4 col-sm-4">
                  <a href="{{ route('product-1') }}">
                        <div class="box_main">
                            <h4 class="shirt_text">Kaos T-Shirt Anak Laki Laki</h4>
                            <p class="price_text">Price  <span style="color: #262626;">Rp. 35.000</span></p>
                            <div class="tshirt_img"><img src="images/products/PR0002.png"></div>
                            <div class="btn_main">
                                <div class="seemore_bt">
                                    <a href="#" onclick="addToCart(this)" 
                                       data-product-name="Kaos T-Shirt Anak Laki Laki" 
                                       data-product-price="35000" 
                                       data-product-image="images/products/PR0002.png">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                     </a>  
                    </div>
                    <div class="col-lg-4 col-sm-4">
                  <a href="{{ route('product-1') }}">
                        <div class="box_main">
                            <h4 class="shirt_text">Outer Kotak-Kotak Pria</h4>
                            <p class="price_text">Price  <span style="color: #262626;">Rp. 200.000</span></p>
                            <div class="tshirt_img"><img src="images/products/PR0003.png"></div>
                            <div class="btn_main">
                                <div class="seemore_bt">
                                    <a href="#" onclick="addToCart(this)" 
                                       data-product-name="Outer Kotak-Kotak Pria" 
                                       data-product-price="200000" 
                                       data-product-image="images/products/PR0003.png">Add to Cart</a>
                                </div>
                            </div>
                        </div>
</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="container">
            <div class="fashion_section_2">
                <div class="row">
                    <div class="col-lg-4 col-sm-4">
                     
                  <a href="{{ route('product-1') }}">
                        <div class="box_main">
                            <h4 class="shirt_text">Hoodie Kuning Pria</h4>
                            <p class="price_text">Price  <span style="color: #262626;">Rp. 145.000</span></p>
                            <div class="tshirt_img"><img src="images/products/PR0004.png"></div>
                            <div class="btn_main">
                                <div class="seemore_bt">
                                    <a href="#" onclick="addToCart(this)" 
                                       data-product-name="Hoodie Kuning Pria" 
                                       data-product-price="145000" 
                                       data-product-image="images/products/PR0004.png">Add to Cart</a>
                                </div>
                            </div>
                        </div>
</a>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                     
                  <a href="{{ route('product-1') }}">
                        <div class="box_main">
                            <h4 class="shirt_text">Dress Bunga Wanita</h4>
                            <p class="price_text">Price  <span style="color: #262626;">Rp. 85.000</span></p>
                            <div class="tshirt_img"><img src="images/products/PR0005.png"></div>
                            <div class="btn_main">
                                <div class="seemore_bt">
                                    <a href="#" onclick="addToCart(this)" 
                                       data-product-name="Dress Bunga Wanita" 
                                       data-product-price="85000" 
                                       data-product-image="images/products/PR0005.png">Add to Cart</a>
                                </div>
                            </div>
                        </div>
</a>
                    </div>
                    <div class="col-lg-4 col-sm-4">
                     
                  <a href="{{ route('product-1') }}">
                        <div class="box_main">
                            <h4 class="shirt_text">Kemeja Vintage Wanita</h4>
                            <p class="price_text">Price  <span style="color: #262626;">Rp. 150.000</span></p>
                            <div class="tshirt_img"><img src="images/products/PR0006.png"></div>
                            <div class="btn_main">
                                <div class="seemore_bt">
                                    <a href="#" onclick="addToCart(this)" 
                                       data-product-name="Kemeja Vintage Wanita" 
                                       data-product-price="150000" 
                                       data-product-image="images/products/PR0006.png">Add to Cart</a>
                                </div>
                            </div>
                        </div>
</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

      <!-- fashion section end -->



      <!-- electronic section start -->
      <div class="fashion_section">
         
      <h1 class="fashion_taital">Electronic Recommendation</h1>
         <div id="electronic_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              
                  <a href="{{ route('product-2') }}">
                              <div class="box_main">
                                 <h4 class="shirt_text">Handphone Relmi</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">Rp. 1.000.000</span></p>
                                 <div class="electronic_img"><img src="images/products/PR0009.jpg"></div>
                                 <div class="btn_main">
                                    <div class="seemore_bt"><a href="#" onclick="addToCart(this)" data-product-name="Handphone Relmi" data-product-price="1000000" data-product-image="images/products/PR0009.jpg">Add to Cart</a></div>

                                 </div>
                              </div>
</a>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                  <a href="{{ route('product-2') }}">
                              <div class="box_main">
                                 <h4 class="shirt_text">Mobile Vipo</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">Rp. 1.500.000</span></p>
                                 <div class="electronic_img"><img src="images/products/PR0010.jpg"></div>
                                 <div class="btn_main">
                                    <div class="seemore_bt"><a href="#" onclick="addToCart(this)" data-product-name="Mobile Vipo" data-product-price="1500000" data-product-image="images/products/PR0010.jpg">Add to Cart</a></div>

                                 </div>
                              </div>
</a>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                  <a href="{{ route('product-2') }}">
                              <div class="box_main">
                                 <h4 class="shirt_text">Laptop Second Baru</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">Rp. 10.000.000</span></p>
                                 <div class="electronic_img"><img src="images/products/PR0011.jpg"></div>
                                 <div class="btn_main">
                                    <div class="seemore_bt"><a href="#" onclick="addToCart(this)" data-product-name="Laptop Second Baru" data-product-price="10000000" data-product-image="images/products/PR0011.jpg">Add to Cart</a></div>

                                 </div>
                              </div>
</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="fashion_section_2">
                     <div class="row">
    <div class="col-lg-4 col-sm-4">
      
    <a href="{{ route('product-2') }}">
        <div class="box_main">
            <h4 class="shirt_text">Laptop</h4>
            <p class="price_text">Price <span style="color: #262626;">Rp. 6.790.000</span></p>
            <div class="electronic_img"><img src="images/products/PR0012.png"></div>
            <div class="btn_main">
                <div class="seemore_bt"><a href="#" onclick="addToCart(this)" data-product-name="Laptop" data-product-price="6790000" data-product-image="images/products/PR0012.png">Add to Cart</a></div>
            </div>
        </div>
</a>
    </div>
    <div class="col-lg-4 col-sm-4">
      
    <a href="{{ route('product-2') }}">
        <div class="box_main">
            <h4 class="shirt_text">Apel Watch</h4>
            <p class="price_text">Price <span style="color: #262626;">Rp. 5.000.000</span></p>
            <div class="electronic_img"><img src="images/products/PR0013.jpg"></div>
            <div class="btn_main">
                <div class="seemore_bt"><a href="#" onclick="addToCart(this)" data-product-name="Apel Watch" data-product-price="5000000" data-product-image="images/products/PR0013.jpg">Add to Cart</a></div>
            </div>
        </div>
</a>
    </div>
    <div class="col-lg-4 col-sm-4">
      
    <a href="{{ route('product-2') }}">
        <div class="box_main">
            <h4 class="shirt_text">Computers PC</h4>
            <p class="price_text">Price <span style="color: #262626;">Rp. 7.090.000</span></p>
            <div class="electronic_img"><img src="images/products/PR0014.jpeg"></div>
            <div class="btn_main">
                <div class="seemore_bt"><a href="#" onclick="addToCart(this)" data-product-name="Computers PC" data-product-price="7090000" data-product-image="images/products/PR0014.jpeg">Add to Cart</a></div>
            </div>
        </div>
    </div>
    <a>
</div>

                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="fashion_section_2">
                        <div class="row">
                           <div class="col-lg-4 col-sm-4">
                              
                  <a href="{{ route('product-2') }}">
                              <div class="box_main">
                                 <h4 class="shirt_text">Charger Second ACER</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">Rp. 150.000</span></p>
                                 <div class="electronic_img"><img src="images/products/PR0015.png"></div>
                                 <div class="btn_main">
                                 <div class="seemore_bt"><a href="#" onclick="addToCart(this)" data-product-name="Charger Second ACER" data-product-price="150000" data-product-image="images/products/PR0015.png">Add to Cart</a></div>
           
                                 </div>
                              </div>
</a>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              
                  <a href="{{ route('product-2') }}">
                              <div class="box_main">
                                 <h4 class="shirt_text">Erpod with Case</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">Rp. 2.000.000</span></p>
                                 <div class="electronic_img"><img src="images/products/PR0016.jpeg"></div>
                                 <div class="btn_main"> 
                                    <div class="seemore_bt"><a href="#" onclick="addToCart(this)" data-product-name="Erpod with Case" data-product-price="2000000" data-product-image="images/products/PR0016.jpeg">Add to Cart</a></div>
           
                                 </div>
                              </div>
</a>
                           </div>
                           <div class="col-lg-4 col-sm-4">
                              
                  <a href="{{ route('product-2') }}">
                              <div class="box_main">
                                 <h4 class="shirt_text">Headphone</h4>
                                 <p class="price_text">Price  <span style="color: #262626;">Rp. 5.000.000</span></p>
                                 <div class="electronic_img"><img src="images/products/PR0017.png"></div>
                                 <div class="btn_main">
                                 <div class="seemore_bt"><a href="#" onclick="addToCart(this)" data-product-name="Headphone" data-product-price="5000000" data-product-image="images/products/PR0017.png">Add to Cart</a></div>
           
                                 </div>
                              </div>
</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>               

            <a class="carousel-control-prev" href="#electronic_main_slider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#electronic_main_slider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>

         </div>
      </div>
      <!-- electronic section end -->


      

      @include('layouts.footer')
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>




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