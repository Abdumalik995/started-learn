<?php 
include "baza.php";

if(isset($_POST['faksub'])) {
	
	$fakid = $_POST['fakid'];
	$fakname = $_POST['fakname'];
	$t_soni = $_POST['t_soni'];
	$sql1 = "UPDATE `yunalish` SET `name` = '$fakname', `t_soni` = '$t_soni' WHERE `id`= '$fakid'";

	$res1 = mysqli_query($db, $sql1);
	if($res1) {
		header("Location: panelf.php");
	} else {
		echo "Xatolik:";
	}
} else {
	header("Location: panelf.php");
}
 ?>