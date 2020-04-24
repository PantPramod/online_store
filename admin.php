<?php
$admin_email=$_POST['admin_email'];
$admin_password=$_POST['admin_password'];

if($admin_email=="itscoding@gmail.com" && $admin_password=="mypassword"){
    header('location:adminpanel.html');
}
else{
    
    include 'admin.html';
    echo" Warning: Wrong Admin id And Password ";
}

?>