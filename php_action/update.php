<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
   $itemname = $_POST['itemname'];
    $unitname = $_POST['unitname'];
    $subcategory = $_POST['subcategory'];
 
    $id = $_POST['id'];
 
    $sql = "UPDATE item SET itemname = '$itemname', unitname = '$unitname', subcategory = '$subcategory' WHERE id = {$id}";
    if($connect->query($sql) === TRUE) {
        echo "<p>Succcessfully Updated</p>";
        echo "<a href='../update.php?id=".$id."'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Erorr while updating record : ". $connect->error;
    }
 
    $connect->close();
 
}
 
?>

 
    