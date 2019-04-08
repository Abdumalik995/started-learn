<?php 
    //session_start();
    include "baza.php";
   
  
    if(isset($_POST['subr'])) {

      if(empty($_POST['login'])) {
        $loginErr = "Loginni kiriting";
        //header("Location: aform.php");
      }else {
        $login = test_input($_POST["login"]);
        //$_SESSION['login'] = $login;
      }
      if(empty($_POST['parol'])) {
        $parolErr = "Parolni kiriting";
        //header("Location: aform.php");
      }else {
        $parol = md5($_POST["parol"]);
        //$_SESSION['parol'] = $parol;
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
       } elseif (empty($login)) {
           $loginErr = "Login kiriting";
       } elseif (empty($parol)) {
           $parolErr = "Parol kiriting";
       } else {
         $query = "INSERT INTO user (`login`, `parol`) VALUES ('$login', '$parol')";
       }
       
       $result1 = @mysqli_query($db, $query);

       if($result1) {           
        header("Location: admin.php");
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

</head>
<body>
    <!--Header qismining boshlanishi-->

           
            
            <div id="mail" style="width: 400px; margin-top: 50px; padding: 15px">
        
                <h1>Ruyhatdan <span> O`tish</span></h1>               
                <form id="form" action="#" method="post" autocomplete="off">
                    <input type="text" name="login"  placeholder="Login here">
                    <span class="red"> * <?php echo $loginErr;?></span>
                    <br>            
                    <input type="password" name="parol" minlength="" placeholder="password here">
                    <span class="red"> * <?php echo $parolErr;?></span>
                    <br>     
                    <br>                    
                    <input id="sub" type="submit" name="subr" value="Kirish">  
                </form>      
            </div>   
   
</body>
</html>

