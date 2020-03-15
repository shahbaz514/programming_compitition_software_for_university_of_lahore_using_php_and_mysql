<?php
  ob_start();
  session_start();
  include '../db/db.php';

  if (!isset($_SESSION['email'])) {
    echo "<script>window.open('index.php','_self')</script>";
  }

if (isset($_GET['del'])) {
  $del = $_GET['del'];
  $run_sql = mysqli_query($db,"DELETE FROM `questions` WHERE `id` = '$del'");
  if ($run_sql) {
    echo "<script>window.open('home.php','_self')</script>";
  }
}
  include 'inc.php';
?>
        <div class="row" style="margin-bottom: 30px;">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            
        <center>
          <h4 class="btn btn-danger form-control">
            Compitition Questions
          </h4>
        </center>

          </div>
          <div class="col-sm-2"></div>
        </div>

        <table class="table table-striped table-dark table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Question</th>
              <th scope="col">Language</th>
              <th scope="col">Level</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
<?php
$i = 0;
$sql = mysqli_query($db, "SELECT * FROM `questions` ORDER BY id DESC");
while ($row = mysqli_fetch_array($sql)) 
{
  $i++;
?>

    <tr>
      <td><?php echo "$i"; ?></td>
      <td><?php echo $row['question']; ?></td>
      <td><?php echo $row['language']; ?></td>
      <td><?php echo $row['level']; ?></td>
      <td>
        <a class="btn btn-danger" href="home.php?del=<?php echo($row['id']) ?>">
          Del
        </a>
      </td>
    </tr>
<?php
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