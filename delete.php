<?php
include 'config.php';


if(isset($_GET['id'])) {
    $product_id = $_GET['id'];
    
    
    $sql = "DELETE FROM eyeglasses WHERE id = $product_id";

    
    if ($conn->query($sql) === TRUE) {
        
        header("Location: index.php");
        exit(); 
    } else {
        echo "Error deleting product: " . $conn->error;
    }

    
    $conn->close();
} else {
    echo "Product ID not provided";
}
?>
