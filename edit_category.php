<?php

require_once('include/database.php');
include('include/sessionCheck.php');
$id = $_GET['id'];
?>
<?php
if(!isset($_POST['update'])){
    $sql="select * from categories where category_id='$id'";
    $result=$conn->query($sql);
    $r=$result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Category</title>
    <?php include('include/bootstrap.php'); ?>
</head>
<body>
    <?php include('include/header.php'); ?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-uppercase font-weight-bold text-center">Update</h2>
                    </div>
                    <div class="card-body">
                        <form action="include/addCategorie.inc.php" method="POST" >
                        <!-- <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" > -->
                            <!-- <input type="text" class="form-control my-2" name="name" value="<?php echo $r['category_name'] ?>" >
                            <input type="submit" class="form-control my-2 btn-primary" value="Update" name="update">  -->
                            <!-- </form> -->
                            <input type="text" class="form-control my-2" name="categorie" value="<?php echo $r['category_name'] ?>" required>
                            <input type="hidden" name="id" value="<?php echo($_GET['id']) ?>">
                            <input type="submit" class="form-control my-2 btn-primary" value="Update" name="update"> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>