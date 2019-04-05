<?php 
	include "baza.php";

	if(isset($_POST['sub'])) {
      if(empty($_POST['name'])) {
        header("Location: bazapanel.php");
      }else {
        $name = mysqli_escape_string($db, test_input($_POST["name"]));
      }
      if(empty($_POST['surname'])) {
        header("Location: bazapanel.php");
      }else {
        $surname = mysqli_escape_string($db, test_input($_POST["surname"]));
      }
      if (empty($_POST["adress"])) {
        header("Location: bazapanel.php");
      } else {
        $adress = mysqli_escape_string($db, test_input($_POST["adress"]));
      }
      if (empty($_POST["nomer"])) {
        header("Location: bazapanel.php");
      } else {
        $nomer = test_input($_POST["nomer"]);
      }
      if (empty($_POST["datee"])) {
        header("Location: bazapanel.php");
      } else {
        $datee = test_input($_POST["datee"]);
      }
      $yunalish = $_POST['yunalish'];
    }
	    if($_FILES['fayl']['error'] == 0) {
	 	// fayl nomini uzgarivchiga tenglab olish
	 	$faylNomi = $_FILES['fayl']['name'];
	 	//fayl yuklanishi kerak bulgan serverdagi joy.
	 	$papka = dirname(_FILE_)."/rasm/".$faylNomi;
	 	//vaqtinchalk joy
	 	$kesh = $_FILES['fayl']['tmp_name'];
	 	// faylni yuklash funksiyasi
	 	$a = move_uploaded_file($kesh, $papka);	 	
 }

 /*=====Fakultetlar bulimi=================*/
 	if (isset($_POST['faksub'])) {
 		if(empty($_POST['fakname'])) {
        header("Location: qushish1.php");
      } else {
        $fakname = mysqli_escape_string($db, test_input($_POST["fakname"]));
      }
      if(empty($_POST['t_soni'])) {
        header("Location: qushish1.php");
      } else {
        $t_soni = mysqli_escape_string($db, test_input($_POST["t_soni"]));
      }
 	}

 	if(empty($fakname) and empty($t_soni)) {
        $query1 = '';
       } else {
         $query1 = "INSERT INTO yunalish (`name`, `t_soni` ) VALUES ('$fakname', '$t_soni')";
       }
       
       $result1 = @mysqli_query($db, $query1);

       if($result1) {
        header("Location: panelf.php");
       } else {
        echo "Ro'yhatga olishda xatolik yuzaga keldi!";
       } 
       /*========Fak bulim oxiri===========*/

       
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
	if(empty($name) and empty($surname)) {
        $query = '';
       } else {
         $query = "INSERT INTO talabalar (`name`, `surname` , `adress` , `nomer` , `datee` , `yunalish_id`, `img`) VALUES ('$name', '$surname', '$adress', '$nomer', '$datee', '$yunalish', '$papka')";
       }
       
       $result = @mysqli_query($db, $query);

       if($result) {
        header("Location: index.php");
       } else {
        echo "Ro'yhatga olishda xatolik yuzaga keldi!";
       } 
 ?>