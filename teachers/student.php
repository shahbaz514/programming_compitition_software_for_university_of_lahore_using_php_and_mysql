<?php
  ob_start();
  session_start();
  include '../db/db.php';

  if (!isset($_SESSION['email'])) {
    echo "<script>window.open('index.php','_self')</script>";
  }

  include 'inc.php';
?>
        <div class="row" style="margin-bottom: 30px;">
          <div class="col-sm-2"></div>
          <div class="col-sm-8">
            
            <center>
              <h4 class="btn btn-danger form-control">
                Student Registered
              </h4>

            </center>
            <div class="row">
              <div class="col-sm-4"></div>
              <div class="col-sm-4">
            <form action="" method="post" enctype="multipart/form-data" class="contact-form">
                <div class="form-group">
                  <label>Select Level:</label>
                  <select name="level" class="form-control">
                    <option>Level1</option>
                    <option>Level2</option>
                    <option>Level3</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" value="Show Students By Level" name="levelSearch" class="btn btn-danger py-3 px-5">
                </div>
            </form>
              </div>
              <div class="col-sm-4"></div>
            </div>
          </div>
          <div class="col-sm-2"></div>
        </div>


        <table class="table table-striped table-dark table-hover">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Departement</th>
              <th scope="col">Program</th>
              <th scope="col">Semester</th>
              <th scope="col">Registration No</th>
              <th scope="col">Level</th>
              <th scope="col">Check Anwser</th>
            </tr>
          </thead>
          <tbody>
<?php
$i = 0;
if (isset($_POST['levelSearch'])) 
{
  $level = $_POST['level'];
  $sql = mysqli_query($db, "SELECT * FROM `students` WHERE level = '$level' ORDER BY id ASC");
  while ($row = mysqli_fetch_array($sql)) 
  {
    $i++;
?>

    <tr>
      <td><?php echo "$i"; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['department']; ?></td>
      <td><?php echo $row['program']; ?></td>
      <td><?php echo $row['semester']; ?></td>
      <td><?php echo $row['registration']; ?></td>
      <td><?php echo $row['level']; ?></td>
      <td>
        <a class="btn btn-danger" href="anwser.php?reg=<?php echo $row['registration']; ?>">Anwsers</a>
      </td>
    </tr>
<?php
  }
}
else
{
  $sql = mysqli_query($db, "SELECT * FROM `students` ORDER BY id ASC");
  while ($row = mysqli_fetch_array($sql)) 
  {
    $i++;
?>

    <tr>
      <td><?php echo "$i"; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['department']; ?></td>
      <td><?php echo $row['program']; ?></td>
      <td><?php echo $row['semester']; ?></td>
      <td><?php echo $row['registration']; ?></td>
      <td><?php echo $row['level']; ?></td>
      <td>
        <a class="btn btn-danger" href="anwser.php?reg=<?php echo $row['registration']; ?>">Anwsers</a>
      </td>
    </tr>
<?php
}}
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