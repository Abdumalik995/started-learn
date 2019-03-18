<?php 
 /*if (isset($_GET['name']) && isset($_GET['email'])) {
		echo $_GET['name'].'<br>';
		echo $_GET['email'].'<br>';
	} else {
		echo "Mavjud emas";
	}

	$a =;
	$b =;
	$amal =;
	$mat = + - * /;

	$natija = his;*/

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Forma bilan ishlash</title>
</head>
<style type="text/css">
	input {
		margin: 10px;
	}
</style>

<body>
	<!-- <form action="" method="get">
		<h2>Login</h2>
		<input type="text" name="name" placeholder="Login here..."><br>
		<input type="email" name="email"><br>
		<input type="submit" name="" value="Yubor!">
	</form> -->
	<form action="" method="post">
		<h2>Hisob</h2>
		a = <input type="number" name="aa" placeholder=""><br>
		b = <input type="number" name="bb"><br>
		<select name="sel">
			<option value="plus">+</option>
			<option value="min">-</option>
			<option value="kup">*</option>
			<option value="bul">/</option>
		</select>
		<input type="submit" name="hisob" value="Hisoblash!">
	</form>
</body>
</html>

<?php 
	if(isset($_POST['aa']) and isset($_POST['bb'])) {

		$a = $_POST['aa'];
		$b = $_POST['bb'];
		$c = $_POST['sel'];

		switch ($c) {
			case "plus":
				echo "Yig'indi ".($a + $b);
				break;
				case "min":
				echo "Ayirma ".($a - $b);
				break;
				case "kup":
				echo "Ko'paytma ".($a * $b);
				break;
				case "bul":
				echo "Bulinma ".($a / $b);
				break;
			
			default:
				echo "Qiymat tanlanmagan";
				break;
		}
	}

//post orqali yuborsak ma'lumot yashirin bo'ladi....
	// if (isset($_GET['a'])) {
	// 	echo "Qiymat Mavjud";
	// } else {
	// 	echo "Qiymat Mavjud emas";
	// }
 ?>
