<?php require_once 'php_action/db_connect.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>TECHNICAL TASK</title>
 
    <style type="text/css">
        .manageItem {
            width: 50%;
            margin: auto;
        }
 
        table {
            width: 100%;
            margin-top: 20px;
        }
 
    </style>
 
</head>
<body>
 
<div class="manageItem">
    <a href="create.php"><button type="button">Add Item</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Unit Name </th>
                <th>Sub Category</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM item WHERE active = 1";
            $result = $connect->query($sql);
 
            if ($result !== false && $result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>".$row['itemname']." </td>
                        <td>".$row['unitname']."</td>
                        <td>".$row['subcategory']."</td>
                        <td>
                            <a href='update.php?id=".$row['id']."'><button type='button'>Update</button></a>
                            <a href='delete.php?id=".$row['id']."'><button type='button'>Delete</button></a>
                        </td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>
 
</body>
</html>