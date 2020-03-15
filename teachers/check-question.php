<?php
  ob_start();
  session_start();
  include '../db/db.php';

  if (!isset($_SESSION['email'])) {
    echo "<script>window.open('index.php','_self')</script>";
  }
?>
<html lang="en">
	<head>
	  	<meta charset="UTF-8">
	  	<title>UOL SARGODHA</title>
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="../css/bootstrap.min.css">
	  	<link rel="stylesheet" href="../css/style.css">
		<link rel="stylesheet" href="../css/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


		<script>
		  	window.console = window.console || function(t) {};
		</script>
		<script>
		  	if (document.location.search.match(/type=embed/gi)) {
		    	window.parent.postMessage("resize", "*");
		  	}
		</script>
	</head>
<body>
  <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="home.php" class="navbar-brand">UOL SARGODHA</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="home.php" class="active">Home</a>
        </li>
        <li>
          <a href="profile.php">Profile</a>
        </li>
        <li>
          <a href="logout.php">Logout</a>
        </li>
      </ul>
    </nav>
  </div>
</header>


<?php
if (isset($_GET['check']))
{
  $check = $_GET['check'];
  $sql = mysqli_query($db, "SELECT * FROM `anwser` WHERE id = '$check'");
  $row = mysqli_fetch_array($sql);
?>

  <div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8">
        <center>
          <h3 style="margin-top: 50px;">Check Anwser</h3>
                <form action="" method="post" enctype="multipart/form-data" class="contact-form">
                    <div class="form-group">
                      <label>Question:</label>
                      <textarea rows="10" class="form-control" disabled="disabled" style="resize: none;"><?php echo $row['question']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label>Anwser:</label>
                      <textarea style="resize: none;" rows="20" class="form-control" disabled="disabled">
                        <?php echo $row['anwser']; ?>
                      </textarea>
                    </div>
                    <div class="form-group">
                      <label>Enter Marks: *</label>
                      <input type="number" name="marks" class="form-control">
                      </textarea>
                    </div>
                    <div class="form-group">
                      <input type="submit" value="Update Result" name="update" class="btn btn-danger py-3 px-5">
                    </div>
                </form>
        </center>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>
                

<?php
if (isset($_POST['update'])) {
  $marks = $_POST['marks'];
  $up_sql = "UPDATE `anwser` SET `marks` = '$marks' WHERE `id` = '$check'";
  $run_up =mysqli_query($db, $up_sql);
  if ($run_up) {
    echo "<script>window.open('anwser.php', '_self')</script>";
  }
}

}
?>

<div class="container" style="margin-top: 75px;">
  <div class="row">
    <div class="col-sm-12">
      <div class="card hovercard">
        <iframe src="https://www.onlinegdb.com/online_c++_compiler" style="width: 100%; height: 600px;"></iframe>
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