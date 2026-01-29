<?php
require_once("../Model/Product.php");
if($_SERVER["REQUEST_METHOD"]!="POST"){
    header("Location: ../View/Form.php");
}
if(isset($_POST["save"])){
    if(
        empty($_POST["name"]) ||
        empty($_POST["Price1"]) ||
        empty($_POST["Price2"])
    ){
         header("Location: ../View/Form.php");
    }
    else{
        $Name=$_POST["name"];
        $Buying=$_POST["Price1"];
        $Selling=$_POST["Price2"];
        $chkbx=$_POST["chk"];
        $na=[
            "name"=>$Name,
            "buying"=>$Buying,
            "selling"=>$Selling,
            "display"=>$chkbx
        ];
        if(Insert($na)){
            echo "Data Inserted";
        }
        else{
            echo "Data not Inserted";
        }
}



}

?>