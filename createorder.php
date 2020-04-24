<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:login.html');
}
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_image=$_POST['product_image'];
$email=$_SESSION['email'];

$product_stock=$_POST['product_stock']-1;


include 'dbconnection.php';

$query="INSERT INTO orders (product_id, product_name, product_price, product_image, email) VALUES ($product_id, '$product_name', $product_price, '$product_image', '$email')";



$flag=mysqli_query($conn, $query);
$q="UPDATE products SET product_stock=$product_stock where product_id=$product_id";
$flag2=mysqli_query($conn, $q);
if ($flag){

    header('location:myorders.php');
   
    
}
 
else"failed";
 
?>