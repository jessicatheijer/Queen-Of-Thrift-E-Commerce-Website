<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content including CSS links and title -->
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Checkout | Queen of Thrift</title>
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
    
    <style>
        .left{
            padding-right: 50px;
        }
    </style>
</head>
<body>

  
    <!-- Header Section Start -->
    <div class="container mt-5">
        <h1 class="fashion_taital mt-3">Checkout Form</h1>
    </div>
    <!-- Header Section End -->

    <div class="row mt-3 mb-5">
        <div class="col-6">
            <!-- Checkout Form Section Start -->
            
            <div class="card">
                <div class="card-body">
                    @if(session()->has('success_message'))
                        <div class="alert alert-success">
                            {{ session()->get('success_message') }}
                        </div>
                    @endif
                    <form action="{{ route('checkout.store') }}" method="post">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="name" class="font-weight-bold">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama lengkap" required>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label for="phone" class="font-weight-bold">No. HP</label>
                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukkan no. HP" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="address" class="font-weight-bold">Alamat</label>
                                    <textarea rows="5" class="form-control" id="address" name="address" placeholder="Masukkan alamat" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label for="image" class="font-weight-bold">Unggah Bukti Pembayaran</label>
                                    <input type="file" accept="image/*" id="image" name="image" placeholder="Unggah Bukti Pembayaran">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-lg-12 col-md-12">
                                <div id="submit-button">
                                   <a href="{{ route('home') }}"> <button type="submit" class="btn btn-warning w-100 font-weight-bold">Konfirmasi Pesanan</a>
                                </div>
                                <div id="go-back-button" class="btn btn-outline-warning w-100 mt-2">
                                    <a href="{{ route('cart') }}">Back to Cart</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Checkout Form Section End -->
        </div>
        <div class="col-6">
            <!-- Cart Section Start -->
            <div class="container">
                <div id="cart-items">
                    <!-- Cart items will be displayed here -->
                </div>
                <div id="cart-total">
                    <!-- Cart total will be displayed here -->
                </div>
            </div>            
            <!-- Cart Section End -->
        </div>
    </div>

   

    <script>
        function loadCart() {
            // Load cart items from local storage
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            let cartItemsContainer = document.getElementById('cart-items');
            let cartTotalContainer = document.getElementById('cart-total');

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
                cartTotalContainer.innerHTML = '';
                return;
            }

            let cartItemsHTML = '';
            let totalPrice = 0;

            // Perulangan untuk membuat elemen-elemen keranjang
            cart.forEach(item => {
                cartItemsHTML += `
                    <div class="cart bg-white">
                        <img src="${item.image}" alt="${item.name}" width="100">
                        <div>
                            <h4>${item.name}</h4>
                            <p class="Left">Price: Rp. ${item.price}</p>
                            <p class="Left">Quantity: ${item.quantity}</p>
                        </div>
                        <hr>
                    </div>
                `;
                // Menambahkan harga produk kali jumlahnya ke total harga
                totalPrice += item.price * item.quantity;
                
            });

            cartItemsContainer.innerHTML = cartItemsHTML;
            cartTotalContainer.innerHTML = `<h3>Total Price: Rp. ${totalPrice.toFixed(2)}</h3>`;
        }

        // Load the cart when the page is loaded
        window.onload = loadCart;
    </script>
</body>
</html>
