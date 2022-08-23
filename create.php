<!DOCTYPE html>
<html>
<head>
    <title>Add Item info</title>
 
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
    <h1> Item info </h1>
    <legend>Add Item</legend>
 
    <form action="php_action/create.php" method="post">
        <table cellspacing="0" cellpadding="0">
           <tr>
                <th>Item Name</th>
                <td><input type="text" name="itemname" placeholder="Item Name" </td>
            </tr>     
            
            <tr>
                <th>Unit Name</th>
                <td><input type="text" name="unitname" placeholder="Unit Name" </td>
            </tr>
            <tr>
                <th>Sub Category</th>
                <td><input type="text" name="subcategory" placeholder="Sub Category" </td>
               
            </tr>
            <tr>
                <td><button type="submit">Save</button></td>
                <td><a href="index.php"><button type="button">Cancel</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>