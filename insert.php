<?php

$servername ="localhost";
$username = "root";
$password = "";
$database="tutorial";

$conn=mysqli_connect($servername , $username , $password,$database);
if(!$conn){
    die("sorry we failed to connect ".mysqli_connect_error ());
}

//create db
$sql ="SELECT * FROM `login`";
$res =mysqli_query($conn,$sql);
//checking for db query run scuccess;
//return number of rows
$r= MYSQLI_NUM_rows($res);
if($r>0){
    while($row=mysqli_fetch_assoc($res)){
        echo "hello ".$row['email']. " your PASSWORD is ".$row['pass'];
        echo"<br>";
    }




}


?>