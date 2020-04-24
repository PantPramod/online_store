<?php
session_start();
include 'dbconnection.php';
if(isset($_POST['id'])){
    $_SESSION['product_id']=$_POST['id'];
    $q="SELECT * from products where product_id=".$_POST['id'];
}

$result=mysqli_query($conn, $q);
$row=mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Store</title>
    <link rel="stylesheet" type="text/CSS" href="styles.css"/>
</head>
<body>
<header>
        <p>ONLINE STORE</p>
        <a href="login.html"><button id="signin">SignIn</button></a>
    </header>

<div class="main_content">
    <div class="image-box">  
       <img  class="images" src="photos/<?php echo $row['product_image']; ?>"/>
    </div>
    <form class="details" method="POST" action="createorder.php">
        <h2 class="product_name"><?php echo $row['product_name']; ?></h2>
        <p style="text-align:left" class="aaa">Rs.<?php echo $row['product_price']; ?></p>
        <p style="text-align:justify" class="bbb"><b>Description:</b><br/><?php echo $row['product_description']; ?></p>
        <input type="hidden" name="product_id" value="<?php echo $row['product_id']; ?>"/>
        <input type="hidden" name="product_name" value="<?php echo $row['product_name']; ?>"/>
        <input type="hidden" name="product_price"value="<?php echo $row['product_price']; ?>"/>
        <input type="hidden" name="product_image" value="<?php echo $row['product_image']; ?>"/>
        <input type="hidden" name="product_stock" value="<?php echo $row['product_stock']; ?>"/>
        <input type="submit" value="Confirm Order"  id="ordernow"/>
</form>
</div>
<div class="footer">

   For logout <a href="logout.php">Click here</a>

    </div>


</body>
</html>
<?php
mysqli_close($conn);
?>