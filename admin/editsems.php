<?php 
include "baza.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "SELECT * FROM semestr WHERE id=$id";
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
                 
            <form id="form" action="update3.php" method="post" autocomplete="off">
            <input type="text" name="name"  placeholder="Fan nomi" value="<?=$row['name'];?>">
            
            <br>            
            <input type="text" name="id_talaba" placeholder="talaba_id" value="<?=$row['id_talaba'];?>">            
            <br>
            <input type="text" name="id_yunalish" placeholder="yunalish_id" value="<?=$row['id_yunalish'];?>">            
            <br>
            <input type="text" name="id_fan" placeholder="fan_id" value="<?=$row['id_fan'];?>">            
            <br><input type="text" name="reyting" placeholder="reyting" value="<?=$row['reyting'];?>">            
            <br>
            
            <input style="display:none;" type="text" name="id" placeholder="id" value="<?=$row['id'];?>"><br>
                
            <input id="sub" type="submit" name="semsub" value="Yangilash">
        </form>
        
        </div>
   
          
    </div>
        

</body>
</html> 