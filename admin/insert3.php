<?php 
include "baza.php";

if (isset($_POST['semsub'])) {
    if(empty($_POST['name'])) {
        header("Location: qushish3.php");
      } else {
        $name = mysqli_escape_string($db, test_input($_POST["name"]));
      }
      if(empty($_POST['id_talaba'])) {
        header("Location: qushish3.php");
      } else {
        $id_talaba = mysqli_escape_string($db, test_input($_POST["id_talaba"]));
      }
      if(empty($_POST['id_yunalish'])) {
        header("Location: qushish3.php");
      } else {
        $id_yunalish = mysqli_escape_string($db, test_input($_POST["id_yunalish"]));
      }
      if(empty($_POST['id_fan'])) {
        header("Location: qushish3.php");
      } else {
        $id_fan = mysqli_escape_string($db, test_input($_POST["id_fan"]));
      }
      if(empty($_POST['reyting'])) {
        header("Location: qushish3.php");
      } else {
        $reyting = mysqli_escape_string($db, test_input($_POST["reyting"]));
      }
  }
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

  if(empty($name)) {
        $query = '';
       } else {
         $query = "INSERT INTO semestr (`name`, `id_talaba`, `id_yunalish`, `id_fan`, `reyting` ) VALUES ('$name', '$id_talaba', '$id_yunalish', '$id_fan', '$reyting')";
       }
       
       $result = @mysqli_query($db, $query);

       if($result) {
        header("Location: panels.php");
       } else {
        echo "Ro'yhatga olishda xatolik yuzaga keldi!";
       } 
 ?>