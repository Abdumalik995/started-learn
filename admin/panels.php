<?php 
	include "baza.php";




	 $sql = "SELECT * FROM semestr";
       $res = mysqli_query($db, $sql);
       $semestr = array();
       while($row = mysqli_fetch_assoc($res)) {
        $semestr[] = $row;
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
		<h1>Semestr reyning natijalari</h1>
		<a href="qushish3.php" class="add">Qushish</a><br><br>
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
	            <td><?php echo $i; $i++; ?></td>  
	            <td><?php echo $sem['name'];?></td>  
	            <td><?php echo $sem['id_talaba'];?></td>  
	            <td><?php echo $sem['id_yunalish'];?></td>  
	            <td><?php echo $sem['id_fan'];?></td>  
	            <td><?php echo $sem['reyting'];?></td>  
	         	<td class="small"><a href="editsems.php?id=<?=$sem['id']?>"><img src="img/edit.png"></a></td>
	        	<td class="small"><a href="deletesems.php?id=<?=$sem['id']?>"><img src="img/delete.png"></a></td>
	   
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