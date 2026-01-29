<?php
?>
<html>
<fieldset style="width:50px">
    <legend>Add Product</legend>
    <form method="post" action="../Controller/FormData.php">
        <label for="">Name</label>
        <br>
        <input type="text" name="name">
        <br>
        <label for="">Buying</label>
        <br>
        <input type="text" name="Price1">
        <br>
        <label for="">Selling</label>
        <br>
        <input type="text" name="Price2">
        <hr>
        <input type="checkbox" name="chk" value="Yes">Display
        <br>
        <hr>

        <input type="submit" name="save" value="Save">
    </form>
</fieldset>
</html>