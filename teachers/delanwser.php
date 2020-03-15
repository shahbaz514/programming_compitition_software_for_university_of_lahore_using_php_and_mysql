<?php
  ob_start();
  session_start();
  include '../db/db.php';

  if (!isset($_SESSION['email'])) {
    echo "<script>window.open('index.php','_self')</script>";
  }

  if (isset($_GET['del'])) {
    $del = $_GET['del'];

    $sql = "DELETE FROM `anwser` WHERE id = '$del'";
    $run = mysqli_query($db, $sql);
    if ($run) {
      echo "<script>window.close()</script>";
    }
  }

?>