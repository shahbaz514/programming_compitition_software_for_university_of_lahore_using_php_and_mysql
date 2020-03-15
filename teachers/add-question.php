<?php
  ob_start();
  session_start();
  include '../db/db.php';

  if (!isset($_SESSION['email'])) {
    echo "<script>window.open('index.php','_self')</script>";
  }
  include 'inc.php';
?>


  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <center>
        <h3 style="margin-top: 50px;">Add New Question</h3>
              <form action="" method="post" enctype="multipart/form-data" class="contact-form">
                  <div class="form-group">
                    <textarea rows="10" class="form-control" name="question" placeholder="Question" style="resize: none;"></textarea>
                  </div>
                  <div class="form-group">
                    <select name="language" class="form-control">
                      <option>C++</option>
                      <option>Java</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select name="level" class="form-control">
                      <option>level1</option>
                      <option>level2</option>
                      <option>level3</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Add Question" name="addQuestion" class="btn btn-danger py-3 px-5">
                  </div>
              </form>
      </center>
    </div>
    <div class="col-sm-4"></div>
  </div>
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
<?php
if (isset($_POST['addQuestion'])) {
    $question = mysqli_real_escape_string($db,$_POST['question']);
    $language = mysqli_real_escape_string($db,$_POST['language']);
    $level = mysqli_real_escape_string($db,$_POST['level']);
    $sql = mysqli_query($db, "INSERT INTO `questions`(`question`, `language`, `level`) VALUES ('$question', '$language', '$level')");
    if ($sql) 
    {
      echo "<script>alert('Question Added')</script>";
      echo "<script>window.open('home.php','_self')</script>";
    }
}
?>