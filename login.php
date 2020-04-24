<?php
session_start();
include 'dbconnection.php';
if(!isset($_POST['email']) && !isset($_POST['password'])){
    header('location:login.html');
}
else{
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users where email='$email' && password='$password'";

$result=mysqli_query($conn, $sql);
$size=mysqli_num_rows($result);
if($size==1){
      
       $_SESSION['email']=$email;
       $_SESSION['password']=$password;
       header('location:index.html');
       
}else{
    
    include 'login.html';
    echo"Wrong E-mail or Password";
}

}


?>