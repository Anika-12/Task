<?php 
 
require_once 'php_action/db_connect.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM item WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_assoc();
 
    $connect->close();
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
        table tr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
 
<fieldset>
    <legend>Edit Product</legend>
 
    <form action="php_action/update.php" method="post">
        <table cellspacing="0" cellpadding="0">
            <tr>
                <th>Item Name</th>
                <td><input type="text" name="itemname" placeholder="Item Name" value="<?php echo $data['itemname'] ?>" /></td>
            </tr>     
            
            <tr>
                <th>Unit Name</th>
                <td><input type="text" name="unitname" placeholder="Unit Name" value="<?php echo $data['unitname'] ?>" /></td>
            </tr>
            <tr>
                <th>Sub Category</th>
                <td><input type="text" name="subcategory" placeholder="Sub Category" value="<?php echo $data['subcategory'] ?>" /></td>
               
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
 
<?php
}
?>