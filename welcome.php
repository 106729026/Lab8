<!doctype html>

<html lang="en">

<head>
</head>

<body>

<?php
session_start();
if(isset($_SESSION['user'])){
    echo "Welcome," .$_SESSION['user'];
}else{
    header('Location:login.html')
}
?>
</body>
</html>