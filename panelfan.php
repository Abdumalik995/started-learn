<?php 
	include "baza.php";




	 $sql = "SELECT * FROM fanlar";
       $res = mysqli_query($db, $sql);
       $fanlar = array();
       while($row = mysqli_fetch_assoc($res)) {
        $fanlar[] = $row;
       }
 ?>

 <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Control panel</title>
	<link rel="stylesheet" type="text/css" href="stylePanel.css">
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
    <th>Nomi</th>
    <th>Uqituvchi</th>    
    <th>Kurs</th>    
    <th>Soat</th>    
        
    
    
  </tr>
  
    <?php foreach ($fanlar as  $fan) { ?>         
        <tr>
                <?php foreach ($fan as $val) { ?>
                    <td><?php echo $val ?></td>
                        <?php } ?>
                    
                 
          
                  
      
        
   
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