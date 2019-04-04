<?php 
/*echo "<pre>";
 print_r($_FILES);
 echo "</pre>";*/
// agar forma orqali kelgan fileda xatolik bulmasa
 if($_FILES['fayl']['error'] == 0) {
 	// fayl nomini uzgarivchiga tenglab olish
 	$faylNomi = $_FILES['fayl']['name'];
 	//fayl yuklanishi kerak bulgan serverdagi joy.
 	$papka = dirname(_FILE_)."/rasm/".$faylNomi;
 	//vaqtinchalk joy
 	$kesh = $_FILES['fayl']['tmp_name'];
 	// faylni yuklash funksiyasi
 	$a = move_uploaded_file($kesh, $papka);
 	//agar fayl yuklangan bulsa
 	if ($a) {
 		echo "Fayl yuklandi: <b>$papke</b>";
 	} else {
 		echo "Xatolik";
 	}
 }
 ?>