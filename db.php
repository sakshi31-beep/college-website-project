<?php
$conn = new mysqli("localhost","root","","ggp_raipur");

if($conn->connect_error){
    die("Database Connection Failed");
}
?>