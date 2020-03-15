<?php
  ob_start();
  session_start();
  include '../db/db.php';

  if (!isset($_SESSION['email'])) {
    echo "<script>window.open('index.php','_self')</script>";
  }


  $sql = "DELETE FROM `anwser` WHERE level = 'level2'";
  $run = mysqli_query($db, $sql);
  if ($run) {
    echo "<script>window.open('toper.php','_self')</script>";
  }
?>