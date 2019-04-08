<?php 
	session_start();
	$javob2 = $_GET['javob2'];
	$_SESSION['javob2'] = $javob2;
	//print_r($_SESSION);
 ?>

 <h2>Savol: 3</h2>
  <p>Bir yilda necha oy bor?</p>
  <form method="get" action="natija.php">
  	<input type="text" name="javob3">
  	<input type="submit" value="javob">
  </form>