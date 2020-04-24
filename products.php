<?php
session_start();
include 'dbconnection.php';

$page=$_GET['page'];
if($page==1)
$q="SELECT * FROM PRODUCTS WHERE category='food'";
if($page==2)
$q="SELECT * FROM PRODUCTS WHERE category='electronics'";
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
    <h3><?php if($page==1) echo"Food";
             if($page==2) echo"Mobile and Electronics";
    
    
    ?></h3>
<div >
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
</div>

<script>
 
</script>
</body>
</html>