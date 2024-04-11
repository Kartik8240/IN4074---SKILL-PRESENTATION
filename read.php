<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .product-details {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        .product-img {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
            border-radius: 8px;
        }
        h1 {
            color: grey;
            text-align: center;
            margin-bottom: 30px;
        }
        h2 {
            color: grey;
            margin-bottom: 20px;
        }
        p {
            color: grey;
            margin-bottom: 10px;
        }
        .btn-back {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Details</h1>
        <?php
        include 'config.php';

        if(isset($_GET['id'])) {
            $product_id = $_GET['id'];
            $sql = "SELECT * FROM eyeglasses WHERE id = $product_id";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
                echo '<div class="product-details">';
                echo '<h2>' . $row['name'] . '</h2>';
                echo '<img src="' . $row['image_path'] . '" class="product-img">';
                echo '<p><strong>Price:</strong> $' . $row['price'] . '</p>';
                echo '<p><strong>Stock:</strong> ' . $row['stock'] . '</p>';
                echo '</div>';
            } else {
                echo "<p>No product found</p>";
            }
        } else {
            echo "<p>Product ID not provided</p>";
        }
        ?>
        <a href="index.php" class="btn btn-primary btn-back">Back to Products</a>
    </div>
</body>
</html>
