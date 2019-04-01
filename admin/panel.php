<?php 
  include "baza.php";

    if(isset($_POST['sub'])) {
      if(empty($_POST['name'])) {
        header("Location: bazapanel.php");
      }else {
        $name = test_input($_POST["name"]);
      }
      if(empty($_POST['surname'])) {
        header("Location: bazapanel.php");
      }else {
        $surname = test_input($_POST["surname"]);
      }
      if (empty($_POST["adress"])) {
        header("Location: bazapanel.php");
      } else {
        $adress = test_input($_POST["adress"]);
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
    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Ism kiritilmadi!";
        
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Ismda faqat harflar va probel bo`lishi mumkin"; 
        }
      }
      if (empty($_POST["surname"])) {
        $surnameErr = "Familiya kiritilmadi!";
      } else {
        $surname = test_input($_POST["surname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $surnameErr = "Familiya faqat harflardan iborat bulishi mumkin!";
        }
      }     

      if (empty($_POST["adress"])) {
        $adressErr = "Manzilingizni kiriting";
      } else {
        $adress = test_input($_POST["adress"]);
      }

      if (empty($_POST["nomer"])) {
        $nomer = "";
      } else {
        $nomer = test_input($_POST["nomer"]);
      }
      if (empty($_POST["datee"])) {
        $datee = "";
      } else {
        $datee = test_input($_POST["datee"]);
      }     
      
    }*/

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

      $queryJoin = "SELECT talaba.name AS ISMI, talaba.surname AS Familiyasi, talaba.adress AS Manzili,  fak.name AS Fakulteti FROm talabalar AS talaba LEFT JOIN yunalish AS fak ON talaba.yunalish_id=fak.id ORDER BY fak.id";
      $res = mysqli_query($db, $queryJoin);
      /*if($res) {
        echo "bor";
      } else {
        echo "yuq";
      }*/
      $talabalar1 = array();
       while($row1 = mysqli_fetch_assoc($res)) {
        $talabalar1[] = $row1;
       }
       $i=1;
      /*======*/
      /* if(empty($name) and empty($surname)) {
        $query = '';
       } else {
         $query = "INSERT INTO talabalar (`name`, `surname` , `adress` , `nomer` , `datee` , `yunalish_id`) VALUES ('$name', '$surname', '$adress', '$nomer', '$datee', '$yunalish')";
       }
       
       $result = @mysqli_query($db, $query);

       if($result) {
        echo "yozildi <br>";
       } else {
        echo "yozilmadi";
       }  

  $sql = "SELECT * FROM talabalar";
       $res = mysqli_query($db, $sql);
       $talabalar = array();
       while($row = mysqli_fetch_assoc($res)) {
        $talabalar[] = $row;
       }*/

       /*$sqll = "DELETE FROM talabalar where surname =' '";
       $resd = mysqli_query($db, $sqll);
       if($resd) {
        echo "uch";
       } else {
        echo "no";
       }*/
       /*=====*/
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Control panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<!--Header qismining boshlanishi-->
<header>
	<img src="img/logo.png">
		<ul>
			<li>ADMIN</li>
		<li><a href=""><img src="img/user.png"></a></li>
		<li><a href=""><img src="img/search.png"></a></li>
		<li><a href=""><img src="img/refresh.png"></a></li>
	</ul>
		</header>
<!--header qismining tugashi-->
<!--chap blokni boshlanishi-->
<nav>
	<h1>Menyular bloki</h1>
	<ul>
		<li><a href="panel.php">Talabalar</a></li>
			<li><a href="panelf.php">Fakultetlar</a></li>
			<li><a href="panelfan.php">Fanlar</a></li>
			<li><a href="panels.php">Semstr natijalari</a></li>
			<li><a href="#">Tizimdan chiqish</a></li>
   
	</ul>
</nav>
<!--chap blokni boshlanishi-->
<section>
	<div class="content">
	<h1>Asosiy ma'lumotlar</h1>
<table>
  <tr>
  	 <th class="small">N</th>
    <th>Ismi</th>
    <th>Familiyasi</th>    
    <th>Manzili</th>
    <th>Fakulteti</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
  
    <?php foreach ($talabalar1 as  $talaba1) { ?>         
      <tr>      
        <td><?php echo $i; $i++ ?></td>
        <?php foreach ($talaba1 as $val1) { ?>
        <td>
        <?php echo $val1 ?>                      
        </td>
        <?php } ?>       
        <td class="small"><a href="edit.php?id=<?=$talaba['id']?>"><img src="img/edit.png"></a></td>
        <td class="small"><a href="delete.php?id=<?=$talaba['id']?>"><img src="img/delete.png"></a></td>
      </tr>
    <?php } ?>
    
</table>
	</div>
</section>
<!--chap blokni tugashi-->
<!--footer qismini boshlanishi-->
<footer>
Copyright © uicit.uz
</footer>
</body>
</html>