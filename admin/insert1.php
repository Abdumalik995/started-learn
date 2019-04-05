<?php 
 include "baza.php";
 
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
    
    /*===Fanlar Bulimi========*/



       /*===Fanlar Bulimi end========*/
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
 ?>