<?php 
	session_start();
	$javob3 = $_GET['javob3'];
	$_SESSION['javob3'] = $javob3;
	$javob2 = $_SESSION['javob2'];
	$javob1 = $_SESSION['javob1'];

	if ($javob1 == 12 && $javob2 == 7 && $javob3 == 12) {
		echo "Javoblar to'g'ri";
	} elseif ($javob1 == 12) {
		echo "faqat savol 1 tug'ri";
	} elseif ($javob2 == 7) {
		echo "faqat savol 2 tug'ri";
	} elseif ($javob3 == 12) {
		if(empty($_GET['javob3'])) {
			echo "bush";
		} else {
		echo "faqat savol 3 tug'ri";
		}

	} else {
		echo "Javoblarda xatolik bor ";
		print_r($_SESSION);
	}
	 
 ?>