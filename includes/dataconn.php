<?php
$conn= mysqli_connect("127.0.0.1","root","","bankingsystem");
// $conn= mysqli_connect("sql110.infinityfree.com","if0_37116957","oQUfqg5BcwK2Vo","if0_37116957_bankingsystem");

if(!$conn){
    echo "error:". mysqli_connect_error();
    exit;
 }
?>