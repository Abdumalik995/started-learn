<?php 
    include "baza.php";

    if(isset($_POST['submit'])) {

      if(empty($_POST['login'])) {
        $loginErr = "Loginni kiriting";
        //header("Location: aform.php");
      }else {
        $login = test_input($_POST["login"]);
      }
      if(empty($_POST['parol'])) {
        $parolErr = "Parolni kiriting";
        //header("Location: aform.php");
      }else {
        $parol = md5($_POST["parol"]);
      }      
    }
      
    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
     
    $sql = "Select * from user";
    $res = mysqli_query($db, $sql);
    $users = array();
    while ($row = mysqli_fetch_assoc($res)) {
        $users[] = $row;
    };
        foreach ($users as $user) { 
            if($login == $user['login'] and $parol == $user['parol'] ) {
            header("Location: index.php");
        } else {
            $loginErr1 = "Login yoki parol xato";
            if (empty($login) and empty($parol)) {
                $loginErr1 = "";
            }
                
        } 
    }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Kirish</title>
    <link rel="stylesheet" type="text/css" href="css/astyle.css">
</head>

<body>


	 <div id="mail" style="width: 400px; margin-top: 50px; padding: 15px">
        
            <h1>Kir<span>ish</span></h1>
            <p><span class="red"><?php echo $loginErr1; ?></span></p>              
            <form id="form" action="#" method="post" autocomplete="off">
            <input type="text" name="login"  placeholder="Login here">
            <span class="red"> * <?php echo $loginErr;?></span>
            <br>            
            <input type="password" name="parol" placeholder="password here">
            <span class="red">* <?php echo $parolErr;?></span>
            <br>     
            <br>                    
            <input id="sub" type="submit" name="submit" value="Kirish">        
        </div>
        

</body>
</html> 