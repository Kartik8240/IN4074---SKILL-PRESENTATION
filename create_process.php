<?php
include 'config.php';

$name = $_POST['name'];
$price = $_POST['price'];
$stock = $_POST['stock'];

$image_path = "images/" . basename($_FILES["image"]["name"]);

$sql = "INSERT INTO eyeglasses (name, price, stock, image_path) VALUES ('$name', '$price', '$stock', '$image_path')";

if (mysqli_query($conn, $sql)) {
    move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
