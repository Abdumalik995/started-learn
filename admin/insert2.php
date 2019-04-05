<?php 
include "baza.php";

if (isset($_POST['fansub'])) {
    if(empty($_POST['fanname'])) {
        header("Location: qushish2.php");
      } else {
        $fanname = mysqli_escape_string($db, test_input($_POST["fanname"]));
      }
      if(empty($_POST['teacher'])) {
        header("Location: qushish2.php");
      } else {
        $teacher = mysqli_escape_string($db, test_input($_POST["teacher"]));
      }
      if(empty($_POST['kurs'])) {
        header("Location: qushish2.php");
      } else {
        $kurs = mysqli_escape_string($db, test_input($_POST["kurs"]));
      }
      if(empty($_POST['soat'])) {
        header("Location: qushish2.php");
      } else {
        $soat = mysqli_escape_string($db, test_input($_POST["soat"]));
      }
  }
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

  if(empty($fanname) and empty($teacher)) {
        $query2 = '';
       } else {
         $query2 = "INSERT INTO fanlar (`name`, `teacher`, `kurs`, `soat` ) VALUES ('$fanname', '$teacher', '$kurs', '$soat')";
       }
       
       $result2 = @mysqli_query($db, $query2);

       if($result2) {
        header("Location: panelfan.php");
       } else {
        echo "Ro'yhatga olishda xatolik yuzaga keldi!";
       } 
 ?>