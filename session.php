<?php 
session_start();
$_SESSION['a'] = 5;
$_SESSION['b'] = 10;
print_r($_SESSION).'<br>';
//echo "yig'indi ", $_SESSION['a']+$_SESSION['b'].'<br>';
//print_r($_SESSION);
//session_unset($_SESSION['a']);// qiymatlarni o'chirish
//print_r($_SESSION);
//session_destroy()//sessionni tugatish
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<h2>Savol: 1</h2>
 	<p>O'zbekistonda nechta viloyat bor</p>
 </body>
 </html>