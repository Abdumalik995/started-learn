<?php 
include "baza.php";

if(isset($_POST['faksub'])) {
	
	$id = $_POST['fanid'];
	$name = $_POST['name'];
	$teacher = $_POST['t_soni'];
	$teacher = $_POST['t_soni'];
	$sql = "UPDATE `fanlar` SET `name` = '$fakname', `t_soni` = '$t_soni' WHERE `id`= '$fakid'";

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