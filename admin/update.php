<?php 
include "baza.php";

if(isset($_POST['sub'])) {
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$adress = $_POST['adress'];	
	$yunalish = $_POST['yunalish'];

	$sql = "UPDATE `talabalar` SET `name` = '$name', `surname` = '$surname', `adress` = '$adress', `yunalish_id` = '$yunalish' WHERE `id`= '$id'";

	$res = mysqli_query($db, $sql);
	if($res) {
		header("Location: index.php");
	} else {
		echo "Xatolik:";
	}
} else {
	header("Location: index.php");
}

 ?>