<?php
session_start();
include ("../includes/dataconn.php");
$amount=$_POST['amount'];
$receiver_ac=$_POST['account'];

$id = $_SESSION['id'];
$sql = "SELECT * FROM customers WHERE id='$id';";
$fetch = mysqli_query($conn, $sql);
if (!$fetch) {
    echo "Error:" . mysqli_errno($conn);
    exit;
}
$rows = mysqli_fetch_assoc($fetch);
if(!$rows){
    echo "Error:" . mysqli_errno($conn);
    exit;
}
$sql_3 = "SELECT * FROM customers WHERE savings_ac='$receiver_ac';";
$fetch2 = mysqli_query($conn, $sql_3);
if (!$fetch2) {
    echo "Error: Invalid A/C no.";
    exit;
}
$rows_1 = mysqli_fetch_assoc($fetch2);
if(!$rows_1){
    echo "Error:" . mysqli_errno($conn);
    exit;
}

// echo "Loan Amount Sanctioned.: ".$rows["sanction"]."<br/> ";
// echo "A/c no.: ".$rows["loan_ac"]."<br/> ";
// echo "Loan Balance left.: ".$rows["balance"]."<br/>";
// echo "Receiver's A/c no.: ".$rows["savings_ac"]."<br/> ";
// echo "Receiver's A/c balance.: ".$rows["savings_bal"]."<br/>";

$balance = $rows['balance'];
$receiver_id = $rows_1['id'];
$receiver_bal = $rows_1['balance'];
if($balance - $amount >= 0){
    $balance -=$amount;
    $receiver_bal +=$amount;
    $sql_1 = "INSERT INTO `transactions` (`amount`,`date_time`,`customer_id`,`receiver_id`) VALUES ('$amount',CURRENT_TIMESTAMP(),'$id','$receiver_id');";
    $query_1 = mysqli_query($conn,$sql_1);
    if(!$query_1){
        echo "Error:" . mysqli_error($conn);
        exit;
    }
    $sql_2 = "UPDATE customers SET balance = '$balance' WHERE id = '$id';";
    $sql_4 = "UPDATE customers SET balance = '$receiver_bal' WHERE id = '$receiver_id';";
    $query_2 = mysqli_query($conn,$sql_2);
    $query_4 = mysqli_query($conn,$sql_4);
    if(!$query_2){
        echo "Error:" . mysqli_error($conn);
        exit;
    }
    if(!$query_4){
        echo "Error:" . mysqli_error($conn);
        exit;
    }
    $_SESSION['confirm']=true;
    
}else{
    echo "Insufficient fund!";
    $_SESSION['confirm']=false;
}
header("Location:../confirm.php")


?>