<?php 
	include "baza.php";

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		header('Location: panelfan.php');
	}


       $sql1 = "DELETE FROM fanlar where id = $id";
       $res1 = mysqli_query($db, $sql1);
       if($res1) {
        header('Location: panelfan.php');
       } else {
        echo 'Xatolik';
       }
	
 ?>