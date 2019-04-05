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
</head>
<style type="text/css">
    
    #mail {
    position: relative;
    margin: auto;
    margin-top: 70px;
    padding-top: 10px;
    padding-left: 100px;
    width: 50%;
    /*height: 550px;
    text-align: center;*/
    background: #fff;
    box-shadow: 0px 0px 10px #222;
    overflow: hidden;
    }
    #mail>form>input, #mail>form>textarea {
    margin-bottom: 20px;
    width: 50%;
    height: 40px;
    background: #f2f2f7;
    font-size: 16px;
    font-weight: 500;
    padding-left: 20px;
    border: none;
    border-radius: 3px;

    }
    #mail>form>textarea {
    padding-top: 7px;
    }
    #mail>form>#sub {
    margin-top: 20px;
    margin-bottom: 70px;
    width: 170px;
    height: 45px;
    background: crimson;
    color: #fff;
    text-align: center;
    border: none;
    box-shadow: 0px 0px 10px #7b7474;
    cursor: pointer;
    }
    h1 {
        text-align: center;
    }
    h1 span {
        color: crimson;
    }
    .red {
        color: red;
    }
    input[type="radio"] {
        width: 20px !important;
        

    }
    #comment {
        margin: 20px 0;
        border: 1px solid #ccc;
        padding:25px 10px;
        border-radius: 5px;
    } 
    img {
        width: 40px;
    }   
</style>
<body>

    <div id="mail">
        <div></div>
            <h1>Ro`yxatni <span>o`zgartirish</span></h1>
                 
            <form id="form" action="update2.php" method="post" autocomplete="off">
            <input type="text" name="name"  placeholder="Fan nomi" value="<?=$row['name'];?>">
            
            <br>            
            <input type="text" name="t_soni" placeholder="O`qituvchi" value="<?=$row['teacher'];?>">            
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