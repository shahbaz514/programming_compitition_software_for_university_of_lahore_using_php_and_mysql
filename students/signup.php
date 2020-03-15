<?php include '../db/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Uol Sargodha Programming Compitition</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/jquery.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 50px; margin-bottom: 20px;">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
				<a href="index.php">
					<img src="../img/logo.png" style="width: 100%;">
				</a>
				<center>
					<h3 style="margin-top: 50px;">Student SignUp</h3>
            		<form action="" method="post" enctype="multipart/form-data" class="contact-form">
	              		<div class="form-group">
	                		<input type="text" class="form-control" name="name" placeholder="Name : *" required="required">
		              	</div>
		              	<div class="form-group">
		                	<input type="password" class="form-control" name="password" placeholder="Password : *" required="required">
		              	</div><div class="form-group">
                          <select class="form-control" name="department" >
                            <option>CS</option>
                          </select>
		              	</div>
	              		<div class="form-group">
                          <select class="form-control" name="program" >
                            <option>BSCS</option>
                            <option>BSSE</option>
                            <option>BSIT</option>
                            <option>MCS</option>
                            <option>MIT</option>
                          </select>
		              	</div>
	              		<div class="form-group">
                          <select class="form-control" name="semester" >
                            <option>Semester 1</option>
                            <option>Semester 2</option>
                            <option>Semester 3</option>
                            <option>Semester 4</option>
                          </select>
		              	</div>
	              		<div class="form-group">
	                		<input type="text" class="form-control" name="registration" placeholder="Registration : *" required="required">
		              	</div>
	              		<div class="form-group">
	                		<input type="text" class="form-control" name="email" placeholder="Email : *" required="required">
		              	</div>
		              	<div class="form-group">
		                	<input type="submit" value="SignUp Now" name="signup" class="btn shahbaz py-3 px-5">
		              	</div>
		            </form>

		            Have an Account? <a href="./" class="btn shahbaz btn-sm">SignIn Now</a>
				</center>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>

<?php
if (isset($_POST['signup'])) {
  	$name = mysqli_real_escape_string($db,$_POST['name']);
  	$department = mysqli_real_escape_string($db,$_POST['department']);
  	$program = mysqli_real_escape_string($db,$_POST['program']);
  	$semester = mysqli_real_escape_string($db,$_POST['semester']);
  	$registration = mysqli_real_escape_string($db,$_POST['registration']);
  	$email = mysqli_real_escape_string($db,$_POST['email']);
  	$password = mysqli_real_escape_string($db,$_POST['password']);
  	$sql = mysqli_query($db, "INSERT INTO `students`(`name`, `password`, `department`, `program`, `semester`, `registration`, `email`, `level`) VALUES ('$name', '$password', '$department', '$program', '$semester', '$registration', '$email', 'level1')");
  	if ($sql) 
  	{
  		echo "<script>alert('User Added')</script>";
    	echo "<script>window.open('index.php','_self')</script>";
  	}
  	else
  	{
  		echo "<script>alert('User Email, Registration No Already Exits')</script>";
    	echo "<script>window.open('signup.php','_self')</script>";
  	}
}
?>