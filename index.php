<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eyeglasses</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        h1, h2 {
            margin-bottom: 20px;
        }
        
        
        nav {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 20px;
            transition: all 0.3s ease;
        }
        
        nav a:hover {
            text-decoration: underline;
        }
        
        
        .intro {
            text-align: center;
            margin-bottom: 50px;
        }

        
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .gallery-item {
            margin: 20px;
            max-width: 300px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .gallery-item img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 15px;
        }
        
        .buttons {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            margin: 0 auto;
            width: 200px;
            display: flex;
            justify-content: space-between;
            padding: 0 10px;
            background-color: grey;
            color: white;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        .buttons a {
            text-decoration: none;
            color: white;
        }

        .buttons a:hover {
            color: #ffcc00;
        }

        .create-product-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #333;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .create-product-button:hover {
            background-color: #555;
        }

        .name {
            font-weight: bold;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .price {
            font-weight: bold;
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <nav>
        <a href="#">Home</a>
        <a href="about.php">About</a>
        <a href="#gallery">Gallery</a>
        <a href="#">Contact</a>
    </nav>
    <div class="container">
        <header>
            <img src="logo.jpeg" alt="Logo">
        </header>
        <div class="intro">
            <h1>Welcome to Our Eyeglasses Collection</h1>
            <p>Explore our latest collection of stylish eyeglasses. Find the perfect pair to suit your style and needs.</p>
        </div>
        <a href="create.php" class="create-product-button">Create Product</a>
    </div>
    <h2 id="gallery">Gallery</h2>

    <div class="gallery">
        <?php
            
            include 'config.php';

            
            $sql = "SELECT * FROM eyeglasses";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                
                while($row = $result->fetch_assoc()) {
                    echo '<div class="gallery-item">';
                    echo '<div class="name">' . $row["name"] . '</div>';
                    echo '<div class="price">Price: $' . $row["price"] . '</div>';
                    echo '<img src="' . $row["image_path"] . '" alt="' . $row["name"] . '">';
                    echo '<div class="buttons">';
                    echo '<a href="read.php?id=' . $row["id"] . '">View</a>';
                    echo '<a href="update.php?id=' . $row["id"] . '">Edit</a>';
                    echo '<a href="delete.php?id=' . $row["id"] . '" onclick="return confirm(\'Are you sure you want to delete this product?\')">Delete</a>';
                    echo '<a href="order_product.php?id=' . $row["id"] . '">Order</a>';
                    echo '</div>'; 
                    echo '</div>'; 
                }
            } else {
                echo "No products available.";
            }

            
            $conn->close();
        ?>
    </div>
</body>
</html>
