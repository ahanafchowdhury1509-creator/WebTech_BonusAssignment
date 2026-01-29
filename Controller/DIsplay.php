<?php
require_once '../Model/Product.php';
$products=GetAll();
?>
<html>
<body>
    <fieldset style="width:30px">
        <legend>DISPLAY</legend>
    <table border="1" cellspacing="0">
        <tr>
            <th>Name</th>
            <th>Profit</th>
        </tr>
        <?php 
        foreach($products as $p){
    $n=$p['Name'];
    $d=$p['Selling Price']-$p['Buying Price'];
    ?>
        <tr>
            <td><?php echo $n; ?></td>
            <td><?php  echo $d; ?></td>
            <td><a href="">delete</a></td>
            <td><a href="">edit</a></td>
        </tr>
        <?php
        }
        
        
        ?>
    </table>
    </fieldset>
</body>
