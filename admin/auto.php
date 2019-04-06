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
           $loginErr = "Login yoki parol xato";
        } 
    }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>bazap php</title>
    <link rel="stylesheet" type="text/css" href="css/astyle.css">
</head>

<body>

	 <div id="mail" style="width: 400px; margin-top: 50px; padding: 15px">
        
            <h1>Signing <span> In </span></h1>               
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