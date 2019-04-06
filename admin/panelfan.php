<?php 
	include "baza.php";

	 $sql = "SELECT * FROM fanlar";
       $res = mysqli_query($db, $sql);
       $fanlar = array();
       while($row = mysqli_fetch_assoc($res)) {
        $fanlar[] = $row;
       }
       $i = 1;
 ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Control panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">

    body {
      margin:0;
      padding: 0;
    }
    .hero {
    display: flex;
    justify-content: space-between;
    }
    nav {
      width: 21%;
    
     
    }
    
     table img {
      width: 30px;
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
<div class="hero">
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
		<h1>Fanlar</h1>
		<a href="qushish2.php" class="add">Qushish</a><br><br>
	<table>
	  <tr>
	  	 <th class="small">N</th>
	    <th>Nomi</th>
	    <th>Uqituvchi</th>    
	    <th>Kurs</th>    
	    <th>Soat</th>    
	    <th>Edit</th>    
	    <th>Delete</th>    
	        
	    
	    
	  </tr>
	  
	    <?php foreach ($fanlar as  $fan) { ?>         
	        <tr>
	        	<td><?php echo $i; $i++ ?></td>
	        	<td><?php echo $fan['name'] ?></td>
	        	<td><?php echo $fan['teacher'] ?></td>
	        	<td><?php echo $fan['kurs'] ?></td>
	        	<td><?php echo $fan['soat'] ?></td>                
	        	<td class="small"><a href="editfan.php?id=<?=$fan['id']?>"><img src="img/edit.png"></a></td>
	        	<td class="small"><a href="deletefan.php?id=<?=$fan['id']?>"><img src="img/delete.png"></a></td> 
	  		</tr>
	  	<?php } ?>
	    
	</table>
		</div>
	</section>
</div>
<!--chap blokni tugashi-->
<!--footer qismini boshlanishi-->
<footer>
Copyright © uicit.uz
</footer>
</body>
</html>