<?php 
	include "baza.php";

	 $sql = "SELECT * FROM yunalish";
       $res = mysqli_query($db, $sql);
       $yunalish = array();
       while($row = mysqli_fetch_assoc($res)) {
        $yunalish[] = $row;
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
      background-color: #37b0ea;
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
	<?php include_once "blocks/header.php"; ?>
	<!--header qismining tugashi-->
<!--chap blokni boshlanishi-->
<div class="hero">
	<?php include_once "blocks/navblock.php"; ?>
<!--chap blokni boshlanishi-->

	<section>
	<div class="content">
	<h1>Fakultetlar</h1>
	<a href="qushish1.php" class="add">Qushish</a><br><br>
	<table>
	  <tr>
	  	 <th class="small">N</th>
	    <th>Nomi</th>
	    <th>Talabalar soni</th>    
	    <th>Edit</th>    
	    <th>Delete</th>    
	    
	    
	  </tr>
	  
	    <?php foreach ($yunalish as  $fak) { ?>         
	        <tr>
	        	<td><?php echo $i; $i++ ?></td>
	        	<td><?php echo $fak['name'] ?></td>        	
	        	<td><?php echo $fak['t_soni'] ?></td>                  
	          	<td class="small"><a href="editfak.php?id=<?=$fak['id']?>"><img src="img/edit.png"></a></td>
	        	<td class="small"><a href="deletefak.php?id=<?=$fak['id']?>"><img src="img/delete.png"></a></td>
	   
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
<?php include_once "blocks/js.php"; ?>
</body>
</html>