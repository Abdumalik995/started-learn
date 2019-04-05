<?php 
include "baza.php";
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}

$sql = "SELECT * FROM yunalish WHERE id=$id";
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
                 
            <form id="form" action="update1.php" method="post" autocomplete="off">
            <input type="text" name="fakname"  placeholder="Fakultetnomi" value="<?=$row['name'];?>">
            
            <br>            
            <input type="text" name="t_soni" placeholder="Talabalar soni" value="<?=$row['t_soni'];?>">
            
            <br>
            
            <input style="display:none;" type="text" name="fakid" placeholder="id" value="<?=$row['id'];?>"><br>
                
            <input id="sub" type="submit" name="faksub" value="Yangilash">
        </form>
        
        </div>
   
          
    </div>
        

</body>
</html> 