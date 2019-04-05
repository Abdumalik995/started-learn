<?php 
	include "baza.php";




	 $sql = "SELECT * FROM semestr";
       $res = mysqli_query($db, $sql);
       $semestr = array();
       while($row = mysqli_fetch_assoc($res)) {
        $semestr[] = $row;
       }
 ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Control panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">

    /*body {
      margin:0;
      padding: 0;
    }*/
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
	<h1>Semestr reyning natijalari</h1>
	<a href="bazapanel.php" class="add">Qushish</a><br><br>
<table>
  <tr>
  	 <th class="small">N</th>
    <th>Semestr R</th>
    <th>Talaba id</th>    
    <th>Yunalish id</th>    
    <th>Fan id</th>    
    <th>Reyting</th>    
    <th>Edit</th>    
    <th>Delete</th>    
    
    
  </tr>
  
    <?php foreach ($semestr as  $sem) { ?>         
        <tr>
            <?php foreach ($sem as $val) { ?>
            <td><?php echo $val ?></td>
           	<?php } ?>    
         	<td class="small"><a href="edit.php?id=<?=$sem['id']?>"><img src="img/edit.png"></a></td>
        	<td class="small"><a href="delete.php?id=<?=$sem['id']?>"><img src="img/delete.png"></a></td>
   
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