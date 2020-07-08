<?php

require_once('include/database.php');
require_once('include/bootstrap.php');
include('include/sessionCheck.php');
session_start();
if(isset($_SESSION['id'])){
    unset($_SESSION['id']);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include('sideNav.html'); ?>    
    <form action="categories.php" method="POST">
        <input type="text" name="categorie">
        <input type="submit" name="add" value="Add Categorie">
    </form>
</form>
</body>
</html>

<!-- ******************HTML FOR INPUT FIELD*********************** -->



<!-- HTML FOR DISPLAY CATEGORIES -->

<table>
<?php
    $index=1;

    $sql="select * from categories order by category_id";
    $result=$conn->query($sql);
    while(($r = $result->fetch_assoc()) != null)
    {
?>
        <tr>
            <td><?php echo $index;$index++; ?></td>
            <td><?php echo $r['category_name']?></td>
            <td> <a href='edit_category.php ? id=<?php echo $r['category_id']; ?>'> Edit </a>
            <td> <a href='delete_category.php ? id=<?php echo $r['category_id']; ?>'> Delete </a>


        
        </tr>
        
<?php
    }
    $id=$r['category_id'];

?>
</table>

<!-- PHP FOR INSERT CATEGOIE IN DATABASE -->

<?php

if(isset($_POST['add'])){
    $categorie=$_POST['categorie'];
    $sql="insert into categories (category_name) values('$categorie')";
    $result=$conn->query($sql);
    header('location:categories.php');
    
}

?>



