<?php
include 'dbconnection.php';
$sql= "SELECT * FROM products ORDER BY category";
$result=mysqli_query($conn, $sql);
$num= mysqli_num_rows($result);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Delete Product </title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        h2{
            text-align:center;
            background:blue;
            color:white;
            padding:10px;
        }
        h3{
            text-align:center;
            color:blue;
            font-size:25px;
            padding:10px;

        }
    
        table{
            width:95vw;
            margin-left:2vw;
        }
        table tr th{
            border:1px solid black;
            padding:10px;
            text-align:center;
            background:blue;
            color:white;
        }
        table tr td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }
        body{
            text-align:center;
        }
        
      #del{
          background:red;
          color:white;
          padding:10px 20px;
          width:40%;
          margin-top:30px;
          margin-bottom:30px;
          font-size:20px;
      }
        </style>
</head>
<body>
    <h2>DigiShop</h2>
    <h3>Select Records to Delete</h3> 
    <form action="deletion.php" method="POST">
    <table>
        <tr>
        <th>Product Id.</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Product Stock</th>
        <th>Image Name</th>
        <th>Category</th>
        <th>Select</th>
        </tr>
<?php
for($i=1; $i<=$num; $i++){
  $row=mysqli_fetch_array($result);
?>
<tr>
    <td><?php echo $row['product_id']; ?></td>
    <td><?php echo $row['product_name']; ?></td>
    <td><?php echo $row['product_price']; ?></td>
    <td><?php echo $row['product_stock']; ?></td>
    <td><img src="photos/<?php echo $row['product_image']; ?>"/></td>
    <td><?php echo $row['category']; ?></td>
    <td><input type="checkbox"  value="<?php echo $row['product_id']; ?>" name="p<?php echo $i;?>"/></td>
</tr>
<?php
}
?>

    </table> 
    <input type="submit" id="del" value="delete"/>
</form>  
</body>
</html>