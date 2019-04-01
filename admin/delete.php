<?php 
	include "baza.php";

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		header('Location: index.php');
	}

	$sql = "DELETE FROM talabalar where id = $id";
       $res = mysqli_query($db, $sql);
       if($res) {
        header('Location: index.php');
       } else {
        echo 'Xatolik';
       }
	
 ?>