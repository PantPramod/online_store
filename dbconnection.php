<?php
$servername="localhost";
$username="root";
$password="";
$db="online_store";

$conn=mysqli_connect($servername, $username, $password, $db);
if(!$conn){
    die("Error");
}

?>