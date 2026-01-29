<?php
$host="localhost";
$user="root";
$db="product_db";
function Connect(){
    global $host;
    global $user;
    global $db;
    $con=mysqli_connect($host,$user,"",$db);
    if(!$con){
        die("DB Connection Failed: " . mysqli_connect_error());
    }
    return  $con;
}








?>