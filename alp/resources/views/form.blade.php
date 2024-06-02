<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Input Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <style>


        body {
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
            margin: 0;
            background-image: url(../images/wpp-2.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-control {
            border-radius: 0.25rem;
        }
        .btn-block {
            padding: 0.75rem;
            border-radius: 0.25rem;
        }
        .card {
            border-radius: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f26522;
            color: #fff;
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }
        .card-body {
            padding: 2rem;
        }
        .terms {
            margin-top: 20px;
            max-height: 200px;
            overflow-y: auto;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            background-color: #f8f9fa;
        }

        h2 {
            font-weight: bold;
            font-family: 'Poppins', sans-serif; 
            color: white;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo img {
            width: 150%;
            max-width: 500px;
        }
    </style>
</head>
<body>
<div class="logo">
    <a href="{{ route('home') }}">
        <img src="{{ asset('images/Untitled42_20240520114859.png') }}" alt="Logo">
    </a>
</div>

<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h2>~ Sell Your Stuff ~ Input Form</h2>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('product.store') }}" id="productForm" class="needs-validation" novalidate>
                @csrf
                <div class="form-group">
                    <label for="title">Product Title</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                    <div class="invalid-feedback">Please provide a product title.</div>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    <div class="invalid-feedback">Please provide a description.</div>
                </div>
                <div class="form-group">
    <label for="price">Price</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Rp.</span>
        </div>
        <input type="text" class="form-control" id="price" name="price" required>
        <div class="invalid-feedback">Please provide a price.</div>
    </div>
</div>


<div class="form-group">
    <label for="size_weight">Product Size (L x W x H in Cm)</label>
    <div class="form-row">
        <div class="col">
            <div class="input-group">
                <input type="text" class="form-control" id="length" name="length" placeholder="Length" required>
                <div class="input-group-append">
                    <span class="input-group-text">Cm</span>
                </div>
                <div class="invalid-feedback">Please provide the length.</div>
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="text" class="form-control" id="width" name="width" placeholder="Width" required>
                <div class="input-group-append">
                    <span class="input-group-text">Cm</span>
                </div>
                <div class="invalid-feedback">Please provide the width.</div>
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <input type="text" class="form-control" id="height" name="height" placeholder="Height" required>
                <div class="input-group-append">
                    <span class="input-group-text">Cm</span>
                </div>
                <div class="invalid-feedback">Please provide the height.</div>
            </div>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="weight">Weight</label>
    <div class="input-group">
        <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight" required>
        <div class="input-group-append">
            <span class="input-group-text">Kg</span>
        </div>
        <div class="invalid-feedback">Please provide the weight.</div>
    </div>
</div>

                <div class="form-group">
                    <label for="image" class="font-weight-bold">Upload Product Image</label>
                    <input type="file" class="form-control-file" accept="image/*" id="image" name="image" required>
                    <div class="invalid-feedback">Please upload a product image.</div>
                </div>

                <div class="form-group">
                    <label for="video" class="font-weight-bold">Upload Product Video</label>
                    <input type="file" class="form-control-file" accept="video/*" id="video" name="video" required>
                    <div class="invalid-feedback">Please upload a product video.</div>
                </div>

                <div class="form-group">
                    <label for="bank_name">Bank Name</label>
                    <input type="text" class="form-control" id="bank_name" name="bank_name" required>
                    <div class="invalid-feedback">Please provide a bank name.</div>
                </div>
                
                <div class="form-group">
                    <label for="bank_number">Bank Number</label>
                    <input type="text" class="form-control" id="bank_number" name="bank_number" required>
                    <div class="invalid-feedback">Please provide a bank number.</div>
                </div>

                <div class="form-group">
                    <label for="address">Pick Up Address</label>
                    <input type="text" class="form-control" id="address" name="address" rows="3" required>
                    <div class="invalid-feedback">Please provide an address.</div>
                </div>

                <div class="terms">
                    <h5>Terms and Conditions</h5>
                    <p>By submitting a product for posting on our platform, you agree to be bound by these terms and conditions. If you do not agree with any part of these terms, you should not submit your product.</p>
                    <p>You must be at least 18 years old to post a product on our platform. By submitting a product, you confirm that you meet this age requirement.</p>
                    <p>All information provided about the product must be accurate, complete, and up-to-date. This includes, but is not limited to, the product title, description, price, size, weight, bank number, and address.</p>
                    <p>You may not post any products that are illegal, hazardous, or otherwise restricted. This includes, but is not limited to, weapons, drugs, counterfeit goods, and items that violate intellectual property rights.</p>
                    <p>By posting a product, you confirm that you own the product or have the necessary rights to sell it. You also grant us a non-exclusive, worldwide, royalty-free license to display and promote your product on our platform.</p>
                    <p>You agree not to engage in any activity that violates any laws or regulations, infringes on the rights of others, is fraudulent, deceptive, or misleading, is harmful, threatening, abusive, or harassing, or involves spam, phishing, or other unsolicited communications.</p>
                    <p>Any fees associated with posting a product on our platform will be clearly stated at the time of submission. By submitting a product, you agree to pay any applicable fees.</p>
                    <p>We reserve the right to remove any product from our platform at our sole discretion. This includes, but is not limited to, products that violate these terms, are reported by users, or are deemed inappropriate.</p>
                    <p>We are not liable for any damages or losses resulting from the posting, sale, or purchase of any product on our platform. You agree to indemnify and hold us harmless from any claims, damages, or expenses arising from your use of our platform.</p>
                </div>

                <div class="form-group form-check mt-3">
                    <input type="checkbox" class="form-check-input" id="agree" required>
                    <label class="form-check-label" for="agree">I agree to the terms and conditions</label>
                    <div class="invalid-feedback">You must agree to the terms and conditions.</div>
                </div>

                <button type="submit" class="btn btn-primary btn-block" href="{{ route('formhistory') }}">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();


    
</script>

<script>
    function formatRupiah(value, prefix) {
        var numberString = value.replace(/[^,\d]/g, '').toString(),
            split = numberString.split(','),
            remainder = split[0].length % 3,
            rupiah = split[0].substr(0, remainder),
            thousands = split[0].substr(remainder).match(/\d{3}/gi);

        if (thousands) {
            separator = remainder ? '.' : '';
            rupiah += separator + thousands.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
    }

    document.getElementById('price').addEventListener('keyup', function(e) {
        this.value = formatRupiah(this.value);
    });
</script>

</body>
</html>
