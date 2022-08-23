<?php 
 
require_once 'db_connect.php';
 
if($_POST) {
    $itemname = $_POST['itemname'];
    $unitname = $_POST['unitname'];
    $subcategory = $_POST['subcategory'];
 
    $sql = "INSERT INTO item (itemname,  unitname, subcategory, active) VALUES ('$itemname', '$unitname', '$subcategory', 1)";
    if($connect->query($sql) === TRUE) {
        echo "<p>New Record Successfully Created</p>";
        echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $connect->connect_error;
    }
 
    $connect->close();
}
 
?>