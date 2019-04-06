<?php 
include "baza.php";

if(isset($_POST['semsub'])) {
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$id_talaba = $_POST['id_talaba'];
	$id_yunalish = $_POST['id_yunalish'];
	$id_fan = $_POST['id_fan'];
	$reyting = $_POST['reyting'];
	$sql = "UPDATE `semestr` SET `name` = '$name', `id_talaba` = '$id_talaba', `id_yunalish` = '$id_yunalish', `id_fan` = '$id_fan', `reyting` = '$reyting' WHERE `id`= '$id'";

	$res = mysqli_query($db, $sql);
	if($res) {
		header("Location: panels.php");
	} else {
		echo "Xatolik:";
	}
} else {
	header("Location: panels.php");
}
 ?>