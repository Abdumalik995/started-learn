<?php 
	session_start();
	$javob1 = $_GET['javob1'];
	$_SESSION['javob1'] = $javob1;
	print_r($_SESSION);
	
 ?>

 <h2>Savol: 2</h2>
  <p>Bir haftada necha kun bor?</p>
  <form method="get" action="savol3.php">
  	<input type="text" name="javob2">
  	<input type="submit" value="javob">
  </form>