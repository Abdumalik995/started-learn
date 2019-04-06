<?php 
	include "baza.php";

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		header('Location: panelf.php');
	}


       $sql = "DELETE FROM semestr where id = $id";
       $res = mysqli_query($db, $sql);
       if($res) {
        header('Location: panels.php');
       } else {
        echo 'Xatolik';
       }
	
 ?>