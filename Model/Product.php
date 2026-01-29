<?php
require_once '../Model/DB.php';
function Insert($data){$conn=Connect();
$query="INSERT INTO products (name,`Buying Price`,`Selling Price`,`Status`) VALUES ('".$data["name"]."','".$data["buying"]."','".$data["selling"]."','".$data['display']."')";
$res=mysqli_query($conn,$query);
if($res){
    return true;
}
else{
    return false;
}
}
function GetAll(){
    $conn=Connect();
    $query="SELECT * FROM products WHERE Status='Yes'";
    $res=mysqli_query($conn,$query);
    $products=[];
    while($row=mysqli_fetch_assoc($res)){
        $products[]=$row;
    }
    return $products;
}





?>