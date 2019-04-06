<?php 
	include "baza.php";

	if(isset($_POST['submit'])) {

      if(empty($_POST['login'])) {
        header("Location: aform.php");
      }else {
        $login = mysqli_escape_string($db, test_input($_POST["login"]));
      }
      if(empty($_POST['parol'])) {
        header("Location: aform.php");
      }else {
        $parol = mysqli_escape_string($db, test_input($_POST["parol"]));
      }      
    }
	  
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
	if(empty($login) and empty($parol)) {
        $query = '';
       } else {
         $query = "INSERT INTO user (`login`, `parol`) VALUES ('$login', '$parol')";
       }
       
       $result1 = @mysqli_query($db, $query);

       if($result1) {       	
        header("Location: index.php");
       } else {
        echo "Ro'yhatga olishda xatolik yuzaga keldi!";
       } 
 
	
 ?>