<?php     
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Ism kiritilmadi";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Ism faqat harflardan iborat bo`lishi mumkin"; 
        }
      }
      
      if (empty($_POST["mail"])) {
        $emailErr = "Email manzilingizni kiriting";
      } else {
        $email = test_input($_POST["mail"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Xato! Email manzil."; 
        }
      }
        
      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Xato: Website."; 
        }    
      }

      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }

      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact php</title>
</head>
<style type="text/css">
	#mail {
    position: relative;
    margin: auto;
    margin-top: 30px;
    padding-top: 10px;
    padding-left: 100px;
    width: 70%;
    height: 600px;
    /*text-align: center;*/
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
    
</style>
<body>

	<div id="mail">
			<h1>Talk to <span> me </span></h1>
            <p><span class="red"> * </span><span style="color:blue"> To`ldirilishi shart bo'lgan maydonlar.</span></p>       
			<form id="form" action="#" method="post">
            <input type="text" name="name" placeholder="full name here">
            <span class="red"> * <?php echo $nameErr;?></span>
            <br>			
			<input type="text" name="mail" placeholder="email here">
            <span class="red"> * <?php echo $emailErr;?></span>
            <br>
            <input type="text" name="website" placeholder="URL here">
            <span class="red"> * <?php echo $websiteErr;?></span>
            <br><br>
			<textarea style="height: 100px" name="comment" placeholder="Type here"></textarea><br>
            <p>Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <span class="red">* <?php echo $genderErr;?></span>
            <br></p>			
			<input id="sub" type="submit" value="SUBSCRIBE">
		</form>
        
		</div>
    <div style="width:50%; margin-left:100px">
        <?php
            echo "<h2>Sizning Ma`lumotlaringiz:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
        ?>    
    </div>
        

</body>
</html>