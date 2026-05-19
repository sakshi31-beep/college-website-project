<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

if(isset($_GET['file'])){

    $file = $_GET['file'];

    if(file_exists($file)){
        unlink($file);
    }
}

header("Location: view_tutorials.php");
exit();
?>