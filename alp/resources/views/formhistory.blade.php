<?php
session_start();

// Initialize the history array if it's not already set
if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $bank_number = $_POST['bank_number'];
    $address = $_POST['address'];
    $image = $_FILES['image']['name'];
    $video = $_FILES['video']['name'];

    // Auto-generate request ID
    $request_id = '#P' . str_pad(count($_SESSION['history']) + 1, 6, '0', STR_PAD_LEFT);

    // Get today's date
    $request_date = date('Y-m-d');

    // Product status
    $status = "Rejected. Photo unclear, please make a new request";

    // Save product details to history
    $product = [
        'title' => $title,
        'description' => $description,
        'price' => $price,
        'length' => $length,
        'width' => $width,
        'height' => $height,
        'weight' => $weight,
        'bank_number' => $bank_number,
        'address' => $address,
        'request_id' => $request_id,
        'request_date' => $request_date,
        'status' => $status,
        'image' => $image,
        'video' => $video
    ];

    $_SESSION['history'][] = $product;

    // Save uploaded files
    move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $image);
    move_uploaded_file($_FILES['video']['tmp_name'], 'uploads/' . $video);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell Your Stuff History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card-header {
            cursor: pointer;
        }
        .card-header:hover {
            background-color: #f1f1f1;
        }
        .card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Sell Your Stuff History</h1>
        <?php if (empty($_SESSION['history'])): ?>
            <p>No products have been submitted yet.</p>
        <?php else: ?>
            <?php foreach ($_SESSION['history'] as $index => $product): ?>
                <div class="card">
                    <div class="card-header" data-toggle="collapse" data-target="#collapse<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse<?php echo $index; ?>">
                        <strong>Product Name:</strong> <?php echo htmlspecialchars($product['title']); ?>, 
                        <strong>Price:</strong> <?php echo htmlspecialchars($product['price']); ?>, 
                        <strong>Request ID:</strong> <?php echo htmlspecialchars($product['request_id']); ?>, 
                        <strong>Request Date:</strong> <?php echo htmlspecialchars($product['request_date']); ?>, 
                        <strong>Product Status:</strong> <?php echo htmlspecialchars($product['status']); ?>
                    </div>
                    <div id="collapse<?php echo $index; ?>" class="collapse">
                        <div class="card-body">
                            <p><strong>Description:</strong> <?php echo htmlspecialchars($product['description']); ?></p>
                            <p><strong>Length:</strong> <?php echo htmlspecialchars($product['length']); ?> Cm</p>
                            <p><strong>Width:</strong> <?php echo htmlspecialchars($product['width']); ?> Cm</p>
                            <p><strong>Height:</strong> <?php echo htmlspecialchars($product['height']); ?> Cm</p>
                            <p><strong>Weight:</strong> <?php echo htmlspecialchars($product['weight']); ?> Kg</p>
                            <p><strong>Bank Number:</strong> <?php echo htmlspecialchars($product['bank_number']); ?></p>
                            <p><strong>Address:</strong> <?php echo htmlspecialchars($product['address']); ?></p>
                            <p><strong>Image:</strong> <a href="uploads/<?php echo htmlspecialchars($product['image']); ?>" target="_blank">View Image</a></p>
                            <p><strong>Video:</strong> <a href="uploads/<?php echo htmlspecialchars($product['video']); ?>" target="_blank">View Video</a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
