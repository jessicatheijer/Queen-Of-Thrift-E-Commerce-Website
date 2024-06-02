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
    <title>Wishlist | Queen of Tears</title>
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

        /* Styling for the wishlist */
        .wishlist-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        /* Styling for the wishlist image */
        .wishlist-item img {
            margin-right: 20px;
            border-radius: 5px;
            width: 100px; /* Set a fixed width for the images */
        }

        /* Styling for the wishlist item details */
        .wishlist-item div {
            flex-grow: 1;
        }

        /* Styling for the remove button */
        .wishlist-item button {
            background-color: #f26522;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 2px;
        }

        .wishlist-item button:hover {
            background-color: #cc0000;
        }

        /* Styling for the item name */
        .wishlist-item h4 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
        }

        /* Styling for the item price */
        .wishlist-item p {
            margin: 5px 0;
            font-size: 16px;
        }

        /* Styling for the wishlist total container */
        #wishlist-total {
            text-align: right;
            margin-top: 20px;
        }

        #wishlist-total h3 {
            font-size: 24px;
            font-weight: bold;
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

    <div class="container">
        <h1 class="fashion_taital">Wishlist</h1>
        <div id="wishlist-items">
            <!-- Wishlist items will be displayed here -->
        </div>
    </div>

    <script>
        function loadWishlist() {
            // Load wishlist items from localStorage
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

            let wishlistItemsContainer = document.getElementById('wishlist-items');

            if (wishlist.length === 0) {
                wishlistItemsContainer.innerHTML = '<p>Your wishlist is empty.</p>';
                return;
            }

            let wishlistItemsHTML = '';

            // Loop to create wishlist item elements
            wishlist.forEach(item => {
                wishlistItemsHTML += `
                    <div class="wishlist-item">
                        <img src="${item.image}" alt="${item.name}" width="100">
                        <div>
                            <h4>${item.name}</h4>
                            <p>Price: Rp.${item.price}</p>
                            <p>Quantity: ${item.quantity}</p>
                            <button class="btn btn-danger" onclick="removeFromWishlist('${item.name}')">Remove</button>
                        </div>
                    </div>
                    <hr>
                `;
            });

            wishlistItemsContainer.innerHTML = wishlistItemsHTML;
        }

        function removeFromWishlist(itemName) {
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];

            // Find the index of the item in the wishlist
            let itemIndex = wishlist.findIndex(item => item.name === itemName);
            if (itemIndex > -1) {
                // Remove the item from the wishlist array
                wishlist.splice(itemIndex, 1);
                // Save the updated wishlist back to localStorage
                localStorage.setItem('wishlist', JSON.stringify(wishlist));
                // Reload the wishlist to reflect the changes
                loadWishlist();
            }
        }

        // Call loadWishlist when the page loads
        document.addEventListener('DOMContentLoaded', loadWishlist);
    </script>
</body>
</html>
