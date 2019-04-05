<?php 
include "baza.php";

if(isset($_POST['sub'])) {
	
	$id = $_POST['id'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$adress = $_POST['adress'];	
	$yunalish = $_POST['yunalish'];

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
 	}

	$sql = "UPDATE `talabalar` SET `name` = '$name', `surname` = '$surname', `adress` = '$adress', `yunalish_id` = '$yunalish', `img` = '$papka' WHERE `id`= '$id'";

	$res = mysqli_query($db, $sql);
	if($res) {
		header("Location: index.php");
	} else {
		echo "Xatolik:";
	}
} else {
	header("Location: index.php");
}


 ?>