<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location: login.php");
    exit();
}

if(isset($_GET['file'])){

    $file = basename($_GET['file']); // security
    $path = "assets/uploads/timetable/" . $file;

    if(file_exists($path)){
        unlink($path);
    }
}

header("Location: add_timetable.php");
exit();
?>