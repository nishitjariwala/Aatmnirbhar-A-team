<?php
ob_start();
if(!isset($_SESSION['user'])){
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warehouse management</title>
</head>
<body>
    Home Screen
    <a href="#">Logout</a>
</body>
</html>