<?php
require_once '../Model/DB.php';
function Insert($data)
{$conn=Connect();
$query="INSERT INTO products (name,'Buying Price','Selling Price','Status') VALUES ('".$data["name"]."','".$data["buying"]."','".$data["selling"]."')";
$res=mysqli_query($conn,$query);
if($res){
    return true;
}
else{
    return false;
}
}







?>