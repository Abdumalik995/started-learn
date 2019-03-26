<?php 
	setcookie("nomi", "45", time()+100);
	setcookie("a", "15", time()+10);
	setcookie("b", "18", time()+10);
	setcookie("c", "100", time()+26400);
	
	echo "yig'indi= ".$_COOKIE['a']+$_COOKIE['b']+$_COOKIE['c'];

	unset($_COOKIE['c']);
	echo "c ning qiymati = ",$_COOKIE['c']; 
	setcookie("Hello", "salom", time()+10);
	//setcookie("Hello", null, -1);

	
?>
<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<?php //echo "vaqtinchalik o`zgaruvchining qiymayi = ".$_COOKIE["nomi"]; ?>
	</body>
	</html>	
 