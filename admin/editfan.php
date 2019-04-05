<?php 
include "baza.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "SELECT * FROM fanlar WHERE id=$id";
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
                 
            <form id="form" action="update2.php" method="post" autocomplete="off">
            <input type="text" name="name"  placeholder="Fan nomi" value="<?=$row['name'];?>">
            
            <br>            
            <input type="text" name="teacher" placeholder="O`qituvchi" value="<?=$row['teacher'];?>">            
            <br>
            <input type="text" name="kurs" placeholder="Kurs" value="<?=$row['kurs'];?>">            
            <br>
            <input type="text" name="soat" placeholder="Soat" value="<?=$row['soat'];?>">            
            <br>
            
            <input style="display:none;" type="text" name="id" placeholder="id" value="<?=$row['id'];?>"><br>
                
            <input id="sub" type="submit" name="faksub" value="Yangilash">
        </form>
        
        </div>
   
          
    </div>
        

</body>
</html> 