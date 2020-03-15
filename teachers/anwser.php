<?php
  ob_start();
  session_start();
  include '../db/db.php';

  if (!isset($_SESSION['email'])) {
    echo "<script>window.open('index.php','_self')</script>";
  }
  include 'inc.php';
  ?>

        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Question</th>
              <th scope="col">Registration No:</th>
              <th scope="col">Marks:</th>
              <th scope="col">Time:</th>
              <th scope="col">Level:</th>
              <th scope="col">Check Anwser:</th>
              <th scope="col">Delete:</th>
            </tr>
          </thead>
          <tbody>
<?php
$i = 0;
if (isset($_GET['reg'])) {
  $reg = $_GET['reg'];
  $sql = mysqli_query($db, "SELECT * FROM `anwser` WHERE reg = '$reg' ORDER BY submit_time DESC");
  while ($row = mysqli_fetch_array($sql)) 
  {
    $i++;
?>

    <tr>
      <td><?php echo "$i"; ?></td>
      <td><?php echo $row['question']; ?></td>
      <td><?php echo $row['reg']; ?></td>
      <td><?php echo $row['marks']; ?></td>
      <td><?php echo $row['submit_time']; ?></td>
      <td><?php echo $row['level']; ?></td>
      <td>
        <a class="btn btn-danger" href="check-question.php?check=<?php echo($row['id']) ?>">
          Anwser
        </a>
      </td>
      <td>
        <a class="btn btn-danger" onclick="location.reload();" target="_blank" href="delanwser.php?del=<?php echo($row['id']) ?>">
          Delete
        </a>
      </td>
    </tr>
<?php
  }
}
else
{
  $sql = mysqli_query($db, "SELECT * FROM `anwser` ORDER BY id ASC");
  while ($row = mysqli_fetch_array($sql)) 
  {
    $i++;
?>

    <tr>
      <td><?php echo "$i"; ?></td>
      <td><?php echo $row['question']; ?></td>
      <td><?php echo $row['reg']; ?></td>
      <td><?php echo $row['marks']; ?></td>
      <td><?php echo $row['submit_time']; ?></td>
      <td><?php echo $row['level']; ?></td>
      <td>
        <a class="btn btn-danger" href="check-question.php?check=<?php echo($row['id']) ?>">
          Anwser
        </a>
      </td>
    </tr>
<?php
  }
}
?>
          </tbody>
        </table>


      </div>
    </div>
  </div>
</div>




<!-- Footer -->
<footer class="page-footer font-small teal pt-4" style="background: #003300; padding: 16px; color: #ffffff;">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="http://uol.edu.pk/" style="color: yellow;"> UOL SGD</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.min.js"></script>
</body>
</html>