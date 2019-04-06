<?php 
/*echo "<pre>";
 print_r($_FILES);
echo "</pre>";*/
// agar forma orqali kelgan fileda xatolik bulmasa
 if($_FILES['fayl']['error'] == 0) {
 	// fayl nomini uzgarivchiga tenglab olish
 	$faylNomi = $_FILES['fayl']['name'];
 	//fayl yuklanishi kerak bulgan serverdagi joy.
 	$papka = dirname(_FILE_)."/../img/".$faylNomi;
 	//vaqtinchalik joy
 	$kesh = $_FILES['fayl']['tmp_name'];
 	// faylni yuklash funksiyasi
 	$a = move_uploaded_file($kesh, $papka);
 	//agar fayl yuklangan bulsa
 	if ($a) {
 		echo "Fayl yuklandi: <b>$papka</b>";
 	} else {
 		echo "Xatolik";
 	}
 }


 ?>
 