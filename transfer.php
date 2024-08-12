<?php
session_start();
$id = $_GET['id'];
include("<includes/dataconn.php");

$sql = "SELECT * FROM customers WHERE id='$id';";
$fetch = mysqli_query($conn, $sql);
if (!$fetch) {
    echo "Error:" . mysqli_errno($conn);
    exit;
}
$rows = mysqli_fetch_assoc($fetch);
if (!$rows) {
    echo "Error:" . mysqli_errno($conn);
    exit;
}
$_SESSION['id'] = $rows['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Customer</title>
</head>

<body>
    <?php
    include "includes/header.php";
    ?>
    <div class="container">
        <div class="item">
            <div class="box">
                <h1><?= $rows['name'] ?></h1>
                <h3>Account No: <?= $rows['savings_ac'] ?></h3>
                <h3>Mail id: <?= $rows['email'] ?></h3>
                <h3>Current Balance: <?= $rows['balance'] ?></h3><br>

            </div>
            <!-- <a  href="transfer.php">
                <button class="btn" action>Send Money</button>
            </a> -->
            <button class="btn" id="btn" >Begin Transaction</button><br>
        </div>

        <div class="item " id="toggle">
            <form action="api/submit.php" method="post">
                <div class="inputBox">
                    <label for="">Account no.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$</label>
                    <input class="input" name="account" min="1" placeholder="A/c no." type="number"><br>
                </div>
                <div class="inputBox">
                    <label for="">Transfer amount: $</label>
                    <input class="input" name="amount" min="1" placeholder="Enter amount in $" type="number"><br>
                </div>
                <div class="inputBox">
                    <button class="btn" type="submit">Confirm Transaction</button>
                </div>
            </form>
        </div>
    </div>


    <?php
    include "includes/footer.php";
    
    ?>

    <script type="text/javascript">
        
        var btn = document.getElementById('btn');
        btn.addEventListener("click", toggle);
        function toggle(){
            var off = document.getElementById('toggle');
            if (off.style.display !== "none") {
            off.style.display = "none";
            btn.innerText = "Begin Transaction";
            
        } else {
            off.style.display = "block";
            btn.innerText = "×";
        }
        }

    </script>
</body>

</html>