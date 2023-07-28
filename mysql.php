<?php

$servername ="localhost";
$username = "root";
$password = "";
$database="tutotial";

$conn=mysqli_connect($servername , $username , $password,$database);

//create db
$sql ="create database tutorial1";
$res =mysqli_query($conn,$sql);
//checking for db query run scuccess;
if($res){
    echo "DB created !!";
}
if(!$conn){
    die("sorry we failed to connect ".mysqli_connect_error ());
}
echo"connection successful!!";

?>



