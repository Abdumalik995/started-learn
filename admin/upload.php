<?php 
echo "<pre>";
 print_r($_FILES);
 echo "</pre>";
// agar forma orqali kelgan fileda xatolik bulmasa
 if($_FILES['fayl']['error'] == 0) {
 	// fayl 
 	$faylNomi = $_FILES['fayl']['name'];
 	$papke = dirname(_FILE_)."/rasm/".$faylNomi;
 	$kesh = $_FILES['fayl']['tmp_name'];
 	$a = move_uploaded_file($kesh, $papke);

 	if ($a == true) {
 		echo "Fayl yuklandi: <b>$papke</b>";
 	} else {
 		echo "Xatolik";
 	}
 }
 ?>