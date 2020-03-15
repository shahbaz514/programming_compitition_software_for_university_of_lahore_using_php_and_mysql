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
  



<div class="container" style="margin-top: 75px;">
  <div class="row">
    <div class="col-sm-12">
      <div class="card hovercard">
        <iframe src="https://www.onlinegdb.com/online_c++_compiler" style="width: 100%; height: 100%;"></iframe>
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
  
  
  
  




 
</body></html>