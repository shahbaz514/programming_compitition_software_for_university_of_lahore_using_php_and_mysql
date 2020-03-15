<?php
  ob_start();
  session_start();
  include '../db/db.php';
  if (!isset($_SESSION['registration'])) {
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

		<script>
		  	window.console = window.console || function(t) {};
		</script>

		  
		  
		<script>
		  	if (document.location.search.match(/type=embed/gi)) {
		    	window.parent.postMessage("resize", "*");
		  	}
		</script>
	</head>

<body translate="no">
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
if (isset($_GET['sub'])) 
{
  $sub = $_GET['sub'];
  $get_u = mysqli_query($db, "SELECT * FROM `students` WHERE registration = '".$_SESSION['registration']."'");
  $row_u = mysqli_fetch_array($get_u);

  $sql = mysqli_query($db, "SELECT * FROM `questions` WHERE id = '$sub'");
  $row = mysqli_fetch_array($sql);
  if ($row['level'] == $row_u['level']) 
  {
?>

<div class="container" style="margin-top: 75px;">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <center>
        <h3 style="margin-top: 50px;">Submit Anwser</h3>
        <form action="" method="post" enctype="multipart/form-data" class="contact-form">
            <div class="form-group">
              <textarea rows="5" disabled="" class="form-control" name="question" placeholder="Question" style="resize: none;"><?php echo $row['question']; ?></textarea>
            </div>
            <div class="form-group">
              <textarea rows="5" disabled="" class="form-control" name="lang" placeholder="Question" style="resize: none;"><?php echo $row['language']; ?></textarea>
            </div>
            <div class="form-group">
              <textarea rows="20" class="form-control" name="anwser" placeholder="Anwser" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Submit Anwser" name="subQuestion" class="btn shahbaz py-3 px-5">
            </div>
        </form>
      </center>
    </div>
    <div class="col-sm-4"></div>
  </div>
</div>

<?php
    if (isset($_POST['subQuestion'])) 
    {
      $question = mysqli_real_escape_string($db,$_POST['question']);
      $lang = mysqli_real_escape_string($db,$_POST['lang']);
      $anwser = mysqli_real_escape_string($db,$_POST['anwser']);
      $sql = mysqli_query($db, "INSERT INTO `anwser`(`question`, `anwser`, `reg`, `lang`, `level`, `submit_time`) VALUES ('".$row['question']."', '$anwser', '".$_SESSION['registration']."', '".$row['language']."', 'level2', NOW())");
      if ($sql) 
      {
        echo "<script>alert('Anwser Submited')</script>";
        echo "<script>window.open('home.php','_self')</script>";
      }
    }
  }
  else 
  {
    echo "<script>alert('You will not in this level')</script>";
    echo "<script>window.open('home.php', '_self')</script>";
  }

}
?>







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
  
  
  
  




 
</body></html>