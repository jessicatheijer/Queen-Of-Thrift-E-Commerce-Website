<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details | Queen of Thrift</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .product-img {
            overflow: hidden;
        }
        .product-img img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .product-details-container {
            border: 1px solid #ccc;
            padding: 20px;
            margin-top: 20px;
        }

        
        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 150%;
            max-width: 500px;
        }

        
        .btn-primary {
        background-color: #f26522;
    }

    .btn-outline-primary {
        color: red;
        border-color: red;
    }
    </style>
</head>
<body>
<div class="logo">
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/Untitled42_20240520114859.png') }}" alt="Logo">
    </a>
</div>


<div class="container py-4">
    <div class="row">
        <div class="col-lg-4">
            <div class="product-img mb-4">
                <img src="images/products/PR0009.jpg" alt="Product Image">
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-details">
                <!-- Product Title -->
                <h2 class="mb-3">Handphone Relmi</h2>
                <!-- Product Price -->
                <p class="font-weight-bold">Price: <span class="text-muted">Rp. 1.000.000</span></p>
                <!-- Description -->
                <h3 class="mt-4">Description:</h3>
                <!-- Product Details -->
                <ul>
                    <li><strong>Brand: </strong>Relmi</li>
                    <li><strong>Model Name: </strong> Galaksi A99</li>
                    <li><strong>Memory Storage Capacity: </strong> 64GB</li>
                    <li><strong>Screen Size: </strong>6.5 inch</li>
                </ul>
                <!-- About this item -->
                <h3 class="mt-4">About this item:</h3>
                <ul>
                    <li><strong>Display:</strong> Super AMOLED, 90Hz, 800 nits (HBM) | 6.5 inches, 103.7 cm2 (~84.3% screen-to-body ratio) | 1080 x 2340 pixels, 19.5:9 ratio (~396 ppi density)</li>
                    <li><strong>Note:</strong>Packaging contains the cell phone, a USB C to USB C cable, and a sim tray ejector tool. Seller provides a USB C wall adapter.</li>
                </ul>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="product-details-container">
                <p class="font-weight-bold">Price: <span class="text-muted">Rp. 1.000.000</span></p>
                <p class="font-weight-bold">Delivery Date: <span class="text-muted"><?php echo date("d/m/Y", strtotime("+1 day")); ?></span></p>
                <p class="font-weight-bold">Deliver from: <span class="text-muted">Jakarta</span></p>
                <p class="font-weight-bold">In Stock</p>
               
                <p><strong>Ships from:</strong> Queen of Thrift</p>
                <p><strong>Sold by:</strong> #U000019</p>
                <p><strong>Returns:</strong> 15-day refund/replacement</p>


                <div class="form-group">
                    <label for="quantity">Quantity:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon1">-</button>
                        </div>
                        <input type="text" class="form-control" id="quantity" value="1" readonly>
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">+</button>
                        </div>
                    </div>
                </div>

                <!-- Add to Cart button -->
                <button type="button" class="btn btn-primary" onclick="addToCart(this)" 
                        data-product-name="Handphone Relmi" 
                        data-product-price="1000000" 
                        data-product-image="images/products/PR0009.jpg">Add to Cart</button><br>
                <!-- Add to Wishlist button -->
                <button type="button" class="btn btn-outline-primary mt-3" onclick="addToWishlist(this)"
                        data-product-name="Handphone Relmi" 
                        data-product-price="1000000" 
                        data-product-image="images/products/PR0009.jpg">Add to Wishlist</button>
            </div>
        </div>
    </div>
</div>
<script>
    // Get the plus and minus buttons and the quantity input field
    var plusBtn = document.getElementById('button-addon2');
    var minusBtn = document.getElementById('button-addon1');
    var quantityInput = document.getElementById('quantity');

    // Add event listener to the plus button
    plusBtn.addEventListener('click', function() {
        var currentValue = parseInt(quantityInput.value);
        quantityInput.value = currentValue + 1;
    });

    // Add event listener to the minus button
    minusBtn.addEventListener('click', function() {
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });


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

function addToWishlist(button) {
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

    // Check if wishlist exists in localStorage
    var wishlist = localStorage.getItem('wishlist') ? JSON.parse(localStorage.getItem('wishlist')) : [];

    // Check if the product already exists in the wishlist
    var existingProductIndex = wishlist.findIndex(item => item.name === productName);

    if (existingProductIndex !== -1) {
        // If the product already exists, increase its quantity
        wishlist[existingProductIndex].quantity++;
    } else {
        // If the product doesn't exist, add it to the wishlist
        wishlist.push(product);
    }

    // Update the wishlist in localStorage
    localStorage.setItem('wishlist', JSON.stringify(wishlist));

    // Show notification that the product has been added to the wishlist
    alert(productName + " has been added to your wishlist!");
}

</script>

