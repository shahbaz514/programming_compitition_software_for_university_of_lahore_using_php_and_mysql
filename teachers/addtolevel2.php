<?php
  ob_start();
  session_start();
  include '../db/db.php';

  if (!isset($_SESSION['email'])) {
    echo "<script>window.open('index.php','_self')</script>";
  }


  if (isset($_GET['level2'])) {
    $level = $_GET['level2'];
    $sql = "UPDATE `students` SET `level` = 'level2' WHERE registration = '$level'";
    $run = mysqli_query($db, $sql);
    if ($run) {
    echo "<script>window.close()</script>";
    }
  }
?>