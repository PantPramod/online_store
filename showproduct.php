<?php
session_start();
include 'dbconnection.php';



$q="SELECT * FROM PRODUCTS ORDER BY category";

$result= mysqli_query($conn, $q);
$size=mysqli_num_rows($result);
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


<?php
for ($i=1; $i<=$size; $i++){
    
    $row=mysqli_fetch_array($result);?>
    <div>
    <form action="detailedproduct.php" method="POST">
<div class="product">
 <button>    
<img  class="product_image" src="photos/<?php echo $row['product_image'];?>"/>
<p class="product_name"><?php echo $row['product_name'];?></p>
<p class="product_price"><?php echo $row['product_price'];?></p>
<input  type="hidden" value="<?php echo $row['product_id'];?>" name="id"/>
</button>
</div>
</form>
</div>
<?php
}

?>

<script>
 
</script>
</body>
</html>