<?php 
    //session_start();
    //print_r($_SESSION);
  include "baza.php";

      $queryJoin = "SELECT talaba.id AS id, talaba.name AS ISMI, talaba.surname AS Familiyasi, talaba.adress AS Manzili, talaba.img AS Img,  fak.name AS Fakulteti FROM talabalar AS talaba LEFT JOIN yunalish AS fak ON talaba.yunalish_id=fak.id ORDER BY fak.id";
      $res = mysqli_query($db, $queryJoin);
      
      $talabalar1 = array();
        while($row1 = mysqli_fetch_assoc($res)) {          
        $talabalar1[] = $row1;
      }
      $i=1;
      /*======*/
        
/*$sql = "Select * from user";
    $res = mysqli_query($db, $sql);
    $users = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $users[] = $row;
    };
        foreach ($users as $user) { 
            if(($_SESSION['login'] == $user['login']) && ($_SESSION['parol'] == $user['parol']) ) {
            
        }   
    }*/
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title>Admin Control panel</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <style type="text/css">
    * {
        box-sizing: border-box;
    }
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
    section {
        width: 79%;
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
                <h1>Asosiy ma'lumotlar</h1>
                <a href="bazapanel.php" class="add">Qushish</a><br><br>
                <table>
                    <tr>
                        <th class="small">N</th>
                        <th>Ismi</th>
                        <th>Familiyasi</th>    
                        <th>Manzili</th>
                        <th>Fakulteti</th>
                        <th>Img</th>
                        <th>Edit</th>
                        <th>Delete</th>
                  </tr>
                  
                    <?php foreach ($talabalar1 as  $talaba1) { ?>         
                      <tr>    
                        <td><?php echo $i; $i++ ?></td>
                        <td style="display: none;"><?php $talaba1['id'] ?></td>
                        <td><?php echo $talaba1['ISMI'] ?></td>  
                        <td><?php echo $talaba1['Familiyasi'] ?></td>  
                        <td><?php echo $talaba1['Manzili'] ?></td>  
                        <td><?php echo $talaba1['Fakulteti'] ?></td>  
                        <td><img src="<?php echo $talaba1['Img'] ?>"></td>  
                               
                        <td class="small"><a href="edit.php?id=<?=$talaba1['id']?>"><img src="img/edit.png"></a></td>
                        <td class="small"><a href="delete.php?id=<?=$talaba1['id']?>"><img src="img/delete.png"></a></td>
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