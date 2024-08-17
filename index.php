

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank of Spark</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
<?php
    include "includes/header.php";
    ?>


    <div class="confirm">
        <h1 ><u>About Grip</u></h1><br>
        <p style="font-size: larger;">The Graduate Rotational Internship Program (GRIP) is the flagship program of TSF in which students, recent graduates, and professionals focus on technical skills development as well as professional profile improvement on LinkedIn.</p><br>
        <p style="font-size: larger;">Hi, my name is Nitish Gobinda Panda. I am presently, an intern at The Spark Foundation for GRIP August, 2024. This project named "The Bank of Spark" has been made in accordance to the web development task listed as "Basic Banking System" by TSF for #GRIPAUGUST2024.</p><br>
        <p style="font-size: larger;">This task involved making a database in MariaDB of 10 customers and linking it to frontend by PHP. User is made to facilitate transaction between customers using their A/c number through a dashboard.</p><br>
        <p style="font-size: larger;">The Flow of the project is as follows:</p><br>
        <p style="font-size: larger;">Home Page > View All Customers > View One Customer > Transfer Money > Confirmation Page > View All Customers</p><br>
        <a href="customer.php"><Button class="btn" style="border-style: solid;">View All Customers</Button></a>
    </div>

    <?php
    include "includes/footer.php";
    ?>
</body>

</html>