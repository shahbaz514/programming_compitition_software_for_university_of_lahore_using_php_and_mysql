<?php
  ob_start();
  session_start();
  include '../db/db.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Uol Sargodha Programming Compitition</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 50px;">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<img src="../img/logo.png" style="width: 100%;">
				<center>
					<h3 style="margin-top: 50px;">Teacher Login</h3>
            		<form action="" method="post" enctype="multipart/form-data" class="contact-form">
	              		<div class="form-group">
	                		<input type="email" class="form-control" name="email" placeholder="Email">
		              	</div>
		              	<div class="form-group">
		                	<input type="password" class="form-control" name="password" placeholder="Your Password">
		              	</div>
		              	<div class="form-group">
		                	<input type="submit" value="Login Now" name="login" class="btn btn-danger py-3 px-5">
		              	</div>
		            </form>
				</center>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>
<?php
if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $get_u = "SELECT * FROM teachers WHERE email = '$email' AND password = '$password'";
  $run_u = mysqli_query($db,$get_u);
  $count = mysqli_num_rows($run_u);
  if ($count > 0) {
    $_SESSION['email'] = $email;
    echo "<script>alert('Login Successfully')</script>";
    echo "<script>window.open('home.php','_self')</script>";
  }
  else{
    echo "<script>alert('Registration And Password Is Not Correct !! Try Another One !!!')</script>";
    echo "<script>window.open('index.php','_self')</script>";
  }
}

?>