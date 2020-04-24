<?php
include 'dbconnection.php';
$f=$_FILES['file1'];
$product_name=$_POST['product_name'];
$product_price=$_POST['product_price'];
$product_stock=$_POST['product_stock'];
$product_image=$f['name'];
$product_description=$_POST['product_description'];
$category=$_POST['category'];

if(file_exists("photos/".$f['name'])){
    echo $f['name']. " named image file already exists";
}
else if($f['type']=="image/jpeg"){
    move_uploaded_file($f['tmp_name'], "photos/".$f['name']);
    
    $q="INSERT INTO products (product_name, product_price, product_stock, product_image, product_description, category) VALUES ('$product_name', $product_price, $product_stock, '$product_image', '$product_description', '$category') ";
   $flag= mysqli_query($conn, $q);
    if($flag){
        include 'addproduct.html';
        echo"Successfully Added";
        
    }
    else echo"failed";
}
else{
    echo "Image Should be in JPEG Format";
}




?>