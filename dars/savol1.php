<?php 
session_unset();
print_r($_SESSION);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h2>Savol: 1</h2>
 	<p>O'zbekistonda nechta viloyat bor</p>
 	<form method="get" action="savol2.php">
 		<input type="text" name="javob1">
 		<input type="submit" value="javob">
 	</form>
 </body>
 </html>
