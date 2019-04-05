<?php 
	include "baza.php";

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	} else {
		header('Location: panelf.php');
	}


       $sql1 = "DELETE FROM yunalish where id = $id";
       $res1 = mysqli_query($db, $sql1);
       if($res1) {
        header('Location: panelf.php');
       } else {
        echo 'Xatolik';
       }
	
 ?>