<?php
include("includes/dataconn.php");

$sql = "SELECT * FROM `customers`";
$fetch = mysqli_query($conn, $sql);
if (!$fetch) {
    echo "Error:" . mysqli_errno($conn);
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Customers</title>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div class="container">
    <h1> <u>Customers Dashboard</u></h1><br>
    <?php
    $i=1;
    foreach ($fetch as $row) {
        
    ?>
        <div class="items">
            <div>
            <a href="transfer.php?id=<?= $row['id'] ?>">
                <h5><?=$i.") ". $row['name'] ?></h5>
            </a>
            <p><b>Email: </b><?= $row['email'] ?></p>
            <p><b>Account no.: </b><?= $row['savings_ac'] ?></p><br>
            </div>
            
            <div>
                <a  href="transfer.php?id=<?= $row['id'] ?>"><button>View</button></a>
            </div>
        </div>
        <?php
        $i=$i+1;
    }

        ?>

        
    </div>
    
    <?php
        include "includes/footer.php";
    ?>
</body>

</html>