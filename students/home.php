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
        <a href="cpp.php" class="btn shahbaz">Compiler</a>
        <center>
<?php
$sum = 0;
$sum_sql = mysqli_query($db, "SELECT * FROM `anwser` WHERE reg = '".$_SESSION['registration']."'");
while ($sum_row = mysqli_fetch_array($sum_sql)) 
{
  $sum += $sum_row['marks'];
}
?>          
          <h3>Total Marks = <?php echo "$sum"; ?></h3>
          <h3>Level1</h3>
        </center>
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Question</th>
              <th scope="col">Language</th>
              <th scope="col">Level</th>
              <th scope="col">Add Anwser</th>
            </tr>
          </thead>
          <tbody>
<?php
$i = 0;
$sql = mysqli_query($db, "SELECT * FROM `questions` WHERE level = 'level1' ORDER BY id DESC");
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
        <a class="btn shahbaz" href="sub-question.php?sub=<?php echo($row['id']) ?>">
          Anwser
        </a>
      </td>
    </tr>
<?php
}
?>
          </tbody>
        </table>

        <h3>Level2</h3>
        </center>
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Question</th>
              <th scope="col">Language</th>
              <th scope="col">Level</th>
              <th scope="col">Add Anwser</th>
            </tr>
          </thead>
          <tbody>
<?php
$i = 0;

$get_u = mysqli_query($db, "SELECT * FROM `students` WHERE registration = '".$_SESSION['registration']."'");
$row_u = mysqli_fetch_array($get_u);

$sql = mysqli_query($db, "SELECT * FROM `questions` WHERE level = 'level2' ORDER BY id DESC");
while ($row = mysqli_fetch_array($sql)) 
{
  if ($row['level'] == $row_u['level'])
  {
    $i++;
  
?>
    <tr>
      <td><?php echo "$i"; ?></td>
      <td><?php echo $row['question']; ?></td>
      <td><?php echo $row['language']; ?></td>
      <td><?php echo $row['level']; ?></td>
      <td>
        <a class="btn shahbaz" href="level2.php?sub=<?php echo($row['id']) ?>">
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
        <h3>Level3</h3>
        </center>
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Question</th>
              <th scope="col">Language</th>
              <th scope="col">Level</th>
              <th scope="col">Add Anwser</th>
            </tr>
          </thead>
          <tbody>
<?php
$i = 0;

$get_u = mysqli_query($db, "SELECT * FROM `students` WHERE registration = '".$_SESSION['registration']."'");
$row_u = mysqli_fetch_array($get_u);

$sql = mysqli_query($db, "SELECT * FROM `questions` WHERE level = 'level3' ORDER BY id DESC");
while ($row = mysqli_fetch_array($sql)) 
{
  if ($row['level'] == $row_u['level'])
  {
    $i++;
  
?>
    <tr>
      <td><?php echo "$i"; ?></td>
      <td><?php echo $row['question']; ?></td>
      <td><?php echo $row['language']; ?></td>
      <td><?php echo $row['level']; ?></td>
      <td>
        <a class="btn shahbaz" href="level3.php?sub=<?php echo($row['id']) ?>">
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
  
  
  
  




 
</body></html>