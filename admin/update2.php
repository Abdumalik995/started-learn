<?php 
include "baza.php";

if(isset($_POST['faksub'])) {
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$teacher = $_POST['teacher'];
	$kurs = $_POST['kurs'];
	$soat = $_POST['soat'];
	$sql = "UPDATE `fanlar` SET `name` = '$name', `teacher` = '$teacher', `kurs` = '$kurs', `soat` = '$soat' WHERE `id`= '$id'";

	$res = mysqli_query($db, $sql);
	if($res) {
		header("Location: panelfan.php");
	} else {
		echo "Xatolik:";
	}
} else {
	header("Location: panelfan.php");
}
 ?>