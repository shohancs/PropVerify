<?php
    session_start();
    ob_start();
    include"admin/inc/db.php";

    if (!isset($_SESSION['visited_today'])) {

        // আজকে প্রথমবার এসেছে → কাউন্ট +১ কর
        mysqli_query($db, "UPDATE total_visits SET total = total + 1");

        // মনে রাখ: আজকে এই ইউজারকে কাউন্ট করা হয়েছে (আজকের বাকি সময় আর বাড়বে না)
        $_SESSION['visited_today'] = date("Y-m-d"); // আজকের তারিখ সেভ করলাম
    }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent Buy Haven | Home</title>
    <?php include"inc/css.php"?>
  </head>

  <body>
    <?php include"inc/topheader.php" ?>

    <!-- Back to top button -->
