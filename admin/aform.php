<?php 
    include "baza.php";

    if(isset($_POST['subr'])) {

      if(empty($_POST['login'])) {
        $loginErr = "Loginni kiriting";
        //header("Location: aform.php");
      }else {
        $login = test_input($_POST["login"]);
      }
      if(empty($_POST['parol'])) {
        
        //header("Location: aform.php");
      }else {
        $parol = md5((($_POST["parol"])));
      }      
    }
      
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
    if(empty($login) and empty($parol)) {
        $query = '';
       } else {
         $query = "INSERT INTO user (`login`, `parol`) VALUES ('$login', '$parol')";
       }
       
       $result1 = @mysqli_query($db, $query);

       if($result1) {           
        header("Location: index.php");
       } else {
        //echo "Ro'yhatga olishda xatolik yuzaga keldi!";
       } 
    $sql = "Select * from user";
    $res = mysqli_query($db, $sql);
    $users = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $users[] = $row;
    };
        foreach ($users as $user) { 
            if($login == $user['login']) {
            $loginErr = "Bunday login mavjud";
        }   
    }

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Admin Control panel</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/astyle.css">

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
            <h1>Kirish</h1>
            
            <div id="mail" style="width: 400px; margin-top: 50px; padding: 15px">
        
            <h1>Demo <span> Ver </span></h1>               
            <form id="form" action="#" method="post" autocomplete="off">
            <input type="text" name="login"  placeholder="Login here">
            <span class="red"> * <?php echo $loginErr;?></span>
            <br>            
            <input type="password" name="parol" placeholder="password here">
            <span class="red"></span>
            <br>     
            <br>                    
            <input id="sub" type="submit" name="subr" value="Kirish">        
        </div>
   
          
    </div>
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

