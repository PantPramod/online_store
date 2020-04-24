<?php
include 'dbconnection.php';
if(!isset($_POST['email'])){
    header('location:index.html');
};
$user_name=$_POST['user_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile_no=$_POST['mobile_no'];
$address=$_POST['address'];


$sql1="SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($conn, $sql1);
$size=mysqli_num_rows($result);
if($size==0) {

$sql="INSERT INTO users (user_name, email, password, mobile_no, address) VALUES ('$user_name', '$email', '$password', $mobile_no, '$address')";

$flag=mysqli_query($conn, $sql);
     if($flag){
    
    
         include 'login.html';
         echo "Registered Successfully";
       }
        else{
    
         include 'signupForm.html';
         echo "Error in insertation";
     }

}
else{
    
    include 'signupForm.html';
    echo"Email Already Registered";
  
}

?>