<?php 
  include "baza.php";

      $queryJoin = "SELECT talaba.id AS id, talaba.name AS ISMI, talaba.surname AS Familiyasi, talaba.adress AS Manzili,  fak.name AS Fakulteti FROM talabalar AS talaba LEFT JOIN yunalish AS fak ON talaba.yunalish_id=fak.id ORDER BY fak.id";
      $res = mysqli_query($db, $queryJoin);
      
      $talabalar1 = array();
        while($row1 = mysqli_fetch_assoc($res)) {          
        $talabalar1[] = $row1;
      }
      $i=1;
      /*======*/
        

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Admin Control panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">

    body {
      margin:0;
      padding: 0;
    }
    nav {
      width: 21%;
     
    }

  </style>
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
		<li><a href="index.php">Talabalar</a></li>
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
  <a href="bazapanel.php">Qushish</a><br><br>
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
      <td style="display: none;"><?php $talaba1['id'] ?></td>
      <td><?php echo $talaba1['ISMI'] ?></td>  
      <td><?php echo $talaba1['Familiyasi'] ?></td>  
      <td><?php echo $talaba1['Manzili'] ?></td>  
      <td><?php echo $talaba1['Fakulteti'] ?></td>  
             
        <td class="small"><a href="edit.php?id=<?=$talaba1['id']?>"><img src="img/edit.png"></a></td>
        <td class="small"><a href="delete.php?id=<?=$talaba1['id']?>"><img src="img/delete.png"></a></td>
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