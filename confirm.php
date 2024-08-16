<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Confirmation Page</title>
</head>

<body>
    
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="confirm">
    <?php
    if ($_SESSION['confirm']) {
    ?>
        
        <!-- <img src="img/cross-mark-button-svgrepo-com.svg" alt=""> -->
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 120 120">
                <ellipse cx="60" cy="64.5" opacity=".35" rx="48" ry="48.5"></ellipse>
                <ellipse cx="60" cy="60.5" fill="#44bf00" rx="48" ry="48.5"></ellipse>
                <polygon points="53.303,88 26.139,60.838 33.582,53.395 53.303,73.116 86.418,40 93.861,47.443" opacity=".35"></polygon>
                <g>
                    <polygon fill="#85ff5e" points="53.303,84 26.139,56.838 33.582,49.395 53.303,69.116 86.418,36 93.861,43.443"></polygon>
                </g>
            </svg>
            <h2>Transaction Successful.</h2>
       
        
    <?php
    }else{
        ?>
        <img src="img/cross-mark-button-svgrepo-com (1).svg" alt="">
        <h2>Transaction Failed</h2>
        <?php
    }
    session_destroy();
    ?>
    <br><br>
    <a href="customer.php">Click here to return to Dashboard.</a>
    </div>
    
    
    <?php
    include "includes/footer.php";
    ?>
</body>

</html>