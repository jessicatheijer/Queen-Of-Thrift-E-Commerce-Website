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
    <title>Cart | Queen of Tears</title>
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
        
        .cart div {
            flex-grow: 0; /* Matikan flex grow */
            margin-right: 20px; /* Atur margin antara gambar dan konten lainnya */
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 150%;
            max-width: 500px;
        }

        .fashion_taital {
            
            font-weight: bold;
            font-family: 'Poppins', sans-serif; 
        }
    </style>
</head>
<body>
    
    <!-- Your header section -->
    <div class="logo">
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/Untitled42_20240520114859.png') }}" alt="Logo">
    </a>    
    </div>

    <!-- Cart Section Start -->
    <div class="container">
        <h1 class="fashion_taital">Shopping Cart</h1>
        
    <button id="selectAllBtn" class="btn btn-primary" onclick="toggleSelectAll()">Select All</button>
        <div id="cart-items">
            <!-- Cart items will be displayed here -->
        </div>
    </div>
    <div id="cart-total">
        <!-- Cart total will be displayed here -->
        <h3>Total Price: Rp. <span id="totalPrice">0.00</span></h3>
        <button id="checkoutBtn" class="btn btn-primary">Check Out</button>
    </div>
    <!-- Cart Section End -->

    <script>
        function loadCart() {
            // Load cart items from local storage
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            let cartItemsContainer = document.getElementById('cart-items');

            if (cart.length === 0) {
                cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
                document.getElementById('totalPrice').innerText = "0.00"; // Set total price to 0
                return;
            }

            let cartItemsHTML = '';
            let totalPrice = 0;

            // Perulangan untuk membuat elemen-elemen keranjang
            cart.forEach(item => {
                cartItemsHTML += `
                    <div class="cart">
                        <div>
                            <input type="checkbox" class="checkbox" onclick="calculateTotal()">
                        </div>
                        <img src="${item.image}" alt="${item.name}" width="100">
                        <div>
                            <h4>${item.name}</h4>
                            <p class="Left">Price: Rp.${item.price}</p>
                            <p class="Left">Quantity: ${item.quantity}</p>
                            <button class="mt-2 decrease-quantity" onclick="decreaseQuantity('${item.name}')">-</button>
                            <button class="mt-2 increase-quantity" onclick="increaseQuantity('${item.name}')">+</button>
                        </div>
                        <hr>
                    </div>
                `;
            });
            cartItemsContainer.innerHTML = cartItemsHTML;
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        }

        function removeFromCart(itemName) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Find the index of the item in the cart
            let itemIndex = cart.findIndex(item => item.name === itemName);
            if (itemIndex > -1) {
                // Remove the item from the cart array
                cart.splice(itemIndex, 1);
                // Save the updated cart back to local storage
                localStorage.setItem('cart', JSON.stringify(cart));
                // Reload the cart to reflect the changes
                loadCart();
            }
        }

        function decreaseQuantity(itemName) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Find the index of the item in the cart
            let itemIndex = cart.findIndex(item => item.name === itemName);
            if (itemIndex > -1) {
                // Decrease the quantity
                if (cart[itemIndex].quantity > 1) {
                    cart[itemIndex].quantity--;
                } else {
                    // If quantity is 1, remove the item
                    cart.splice(itemIndex, 1);
                }
                // Save the updated cart back to local storage
                localStorage.setItem('cart', JSON.stringify(cart));
                // Reload the cart to reflect the changes
                loadCart();
            }
        }

        function increaseQuantity(itemName) {
            let cart = JSON.parse(localStorage.getItem('cart')) || [];

            // Find the index of the item in the cart
            let itemIndex = cart.findIndex(item => item.name === itemName);
            if (itemIndex > -1) {
                // Increase the quantity
                cart[itemIndex].quantity++;
                // Save the updated cart back to local storage
                localStorage.setItem('cart', JSON.stringify(cart));
                // Reload the cart to reflect the changes
                loadCart();
            }
        }

        function calculateTotal() {
            let checkboxes = document.querySelectorAll('.checkbox');
            let totalPrice = 0;

            checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                    let cartItem = checkbox.closest('.cart');
                    let price = parseFloat(cartItem.querySelector('.Left').innerText.replace('Price: Rp.', ''));
                    let quantity = parseInt(cartItem.querySelector('.Left:nth-child(3)').innerText.replace('Quantity: ', ''));
                    totalPrice += price * quantity;
                }
            });
            document.getElementById('totalPrice').innerText = totalPrice.toFixed(2);
        }

        // Panggil fungsi loadCart saat halaman dimuat
        window.onload = function() {
            loadCart();
            document.getElementById('checkoutBtn').addEventListener('click', calculateTotal);
        };

        document.getElementById('checkoutBtn').addEventListener('click', function() {
            window.location.href = '{{ route("checkout") }}'; // Mengarahkan ke halaman checkout menggunakan laravel route
        });

        let selectAllState = false; // Track the state of the "Select All" button

function toggleSelectAll() {
    let checkboxes = document.querySelectorAll('.checkbox');

    if (!selectAllState) {
        // Select all checkboxes
        checkboxes.forEach(checkbox => {
            checkbox.checked = true;
        });
        document.getElementById('selectAllBtn').classList.add('btn-secondary'); // Change button color to grey
    } else {
        // Deselect all checkboxes
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
        document.getElementById('selectAllBtn').classList.remove('btn-secondary'); // Revert button color
    }

    calculateTotal(); // Recalculate total price after toggling selection
    selectAllState = !selectAllState; // Toggle the state
}

        
    </script>
</body>
</html>
