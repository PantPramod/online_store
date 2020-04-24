

<?php
include 'dbconnection.php';
$size=sizeof($_POST); 

$j=1;
for($i=1; $i<=$size; $i++,$j++){
    
    $index="p".$j;
    
    if(isset($_POST[$index]))
            $b_id[$i]=$_POST[$index];
    else 
            $i--;
}
for($k=1; $k<=$size; $k++ ){
    $sql="delete from products where product_id=".$b_id[$k];
    mysqli_query($conn, $sql);
}
mysqli_close($conn);
include 'deleteform.php';
echo $size . " record deleted successfully";

?>