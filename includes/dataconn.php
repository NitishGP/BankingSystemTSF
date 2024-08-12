<?php
$conn= mysqli_connect("127.0.0.1","root","","bankingsystem");

if(!$conn){
    echo "error:". mysqli_connect_error();
    exit;
 }
?>