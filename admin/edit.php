<?php 
include "baza.php";
if(isset($_GET['id'])) {
	$id = $_GET['id'];
}

$sql = "SELECT * FROM talabalar WHERE id=$id";
$res = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($res);

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>bazap php</title>
	<link rel="stylesheet" type="text/css" href="css/astyle.css">
</head>

<body>

	<div id="mail">
        <div></div>
			<h1>Ro`yxatni <span>o`zgartirish</span></h1>
                 
			<form id="form" action="update.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <input type="text" name="name"  placeholder="Ism" value="<?=$row['name'];?>">
            
            <br>			
			<input type="text" name="surname" placeholder="Familiya" value="<?=$row['surname'];?>">
            
            <br>
            <input type="text" name="adress" placeholder="Manzil" value="<?=$row['adress'];?>"><br>
            <br>
            <input type="text" name="yunalish" placeholder="Yunalish_id" value="<?=$row['yunalish_id'];?>">
            <br>
           	<p>
           		<input type="file" name="fayl" placeholder="" value="">
            	<img src="<?=$row['img']?>">
            	
        	</p>
            
            <input style="display:none;" type="text" name="id" placeholder="id" value="<?=$row['id'];?>"><br>
              	
			<input id="sub" type="submit" name="sub" value="SUBSCRIBE">
		</form>
        
		</div>
   
          
    </div>
        

</body>
</html> 