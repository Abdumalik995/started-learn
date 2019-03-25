<?php 
	session_start();
	$javob1 = $_GET['javob2'];
	$_SESSION['javob2'] = $javob1;
 ?>

 <h2>Savol: 3</h2>
  <p>Bir haftada necha kun bor?</p>
  <form method="get" action="natija.php">
  	<input type="text" name="javob3">
  	<input type="submit" value="javob">
  </form>