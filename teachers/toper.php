<?php
  ob_start();
  session_start();
  include '../db/db.php';

  if (!isset($_SESSION['email'])) {
    echo "<script>window.open('index.php','_self')</script>";
  }
  include 'inc.php';
?>

        <br>
        <br>
        <a href="delstdlvl1.php" class="btn btn-info">Delete Student of level1</a>
        <a href="delstdlvl2.php" class="btn btn-info">Delete Student of level2</a>
        <a href="delanwserlvl1.php" class="btn btn-info">Delete Anwsers of level1</a>
        <a href="delanwserlvl2.php" class="btn btn-info">Delete Anwsers of level2</a><br><br>
        <div class="row">
          <div class="col-sm-4"></div>
          <div class="col-sm-4">
            <form action="" method="post" enctype="multipart/form-data" class="contact-form">
                <div class="form-group">
                  <label>Select Language:</label>
                  <select name="lang" class="form-control">
                    <option>C++</option>
                    <option>Java</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Select Level:</label>
                  <select name="level" class="form-control">
                    <option>Level1</option>
                    <option>Level2</option>
                    <option>Level3</option>
                  </select>
                </div>
                <div class="form-group">
                  <input type="submit" value="Show Toper By Language" name="languageToper" class="btn btn-danger py-3 px-5">
                </div>
            </form>
          </div>
          <div class="col-sm-4"></div>
        </div>


        <table class="table table-responsive table-dark">
          <thead>
            <tr>
              <th scope="col" style="text-align: center;">#</th>
              <th scope="col" style="text-align: center;">Question</th>
              <th scope="col" style="text-align: center;">Registration No:</th>
              <th scope="col" style="text-align: center;">Marks:</th>
              <th scope="col" style="text-align: center;">Time:</th>
              <th scope="col" style="text-align: center;">Level:</th>
              <th scope="col" style="text-align: center;">Add To Level2:</th>
              <th scope="col" style="text-align: center;">Add To Level3:</th>
            </tr>
          </thead>
          <tbody>
<?php
$i = 0;
if (isset($_POST['languageToper'])) 
{
  $lang = $_POST['lang'];
  $level = $_POST['level'];
  $sql = mysqli_query($db, "SELECT * FROM `anwser` WHERE (lang = '$lang' AND level = '$level')  ORDER BY marks DESC  LIMIT 25");
  while ($row = mysqli_fetch_array($sql)) 
  {
    $i++;
?>

    <tr>
      <td style="text-align: center;"><?php echo "$i"; ?></td>
      <td style="text-align: center;"><?php echo $row['question']; ?></td>
      <td style="text-align: center;"><?php echo $row['reg']; ?></td>
      <td style="text-align: center;"><?php echo $row['marks']; ?></td>
      <td style="text-align: center;"><?php echo $row['submit_time']; ?></td>
      <td style="text-align: center;"><?php echo $row['level']; ?></td>
      <td style="text-align: center;">
        <a target="_blank" class="btn btn-danger" href="addtolevel2.php?level2=<?php echo $row['reg']; ?>">
          AddToLevel2
        </a>
      </td>
      <td style="text-align: center;">
        <a target="_blank" class="btn btn-danger" href="addtolevel3.php?level3=<?php echo $row['reg']; ?>">
          AddToLevel3
        </a>
      </td>
    </tr>
<?php
  }
}
else
{
  $sql = mysqli_query($db, "SELECT * FROM `anwser` ORDER BY marks DESC LIMIT 25");
  while ($row = mysqli_fetch_array($sql)) 
  {
    $i++;
?>

    <tr>
      <td style="text-align: center;"><?php echo "$i"; ?></td>
      <td style="text-align: center;"><?php echo $row['question']; ?></td>
      <td style="text-align: center;"><?php echo $row['reg']; ?></td>
      <td style="text-align: center;"><?php echo $row['marks']; ?></td>
      <td style="text-align: center;"><?php echo $row['submit_time']; ?></td>
      <td style="text-align: center;"><?php echo $row['level']; ?></td>
      <td style="text-align: center;">
        <a target="_blank" class="btn btn-danger" href="addtolevel2.php?level2=<?php echo $row['reg']; ?>">
          AddToLevel2
        </a>
      </td>
      <td style="text-align: center;">
        <a target="_blank" class="btn btn-danger" href="addtolevel3.php?level3=<?php echo $row['reg']; ?>">
          AddToLevel3
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