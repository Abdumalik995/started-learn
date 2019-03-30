<!-- <?php     
    // define variables and set to empty values
    $nameErr = $surnameErr = $adressErr = $nomerErr = "";
    $name = $surname = $adress = $nomer = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Ism kiritilmadi";
        
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Ismda faqat harflar va probel bo`lishi mumkin"; 
        }
      }
      if (empty($_POST["surname"])) {
        $surnameErr = "Familiya kiritilmadi";
      } else {
        $surname = test_input($_POST["surname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $surnameErr = "Ismda faqat harflar va probel bo`lishi mumkin"; 
        }
      }     

      if (empty($_POST["adress"])) {
        $adress = "";
      } else {
        $adress = test_input($_POST["adress"]);
      }

      if (empty($_POST["nomer"])) {
        $nomer = "";
      } else {
        $nomer = test_input($_POST["nomer"]);
      }
      if (empty($_POST["datee"])) {
        $datee = "";
      } else {
        $datee = test_input($_POST["datee"]);
      }
      
      
    }

    function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?> -->

<!DOCTYPE html>
<html>
<head>
	<title>Contact1 php</title>
</head>
<style type="text/css">
    
	#mail {
    position: relative;
    margin: auto;
    margin-top: 30px;
    padding-top: 10px;
    padding-left: 100px;
    width: 70%;
    height: 650px;
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
    #comment {
        margin: 20px 0;
        border: 1px solid #ccc;
        padding:25px 10px;
        border-radius: 5px;
    }    
</style>
<body>

	<div id="mail">
        <div></div>
			<h1>Talk to <span> me </span></h1>
            <p><span class="red"> * </span><span style="color:blue"> To`ldirilishi shart bo'lgan maydonlar.</span></p>       
			<form id="form" action="insert.php" method="post">
            <input type="text" name="name" placeholder="name here">
            <span class="red"> * <?php echo $nameErr;?></span>
            <br>			
			<input type="text" name="surname" placeholder="surname here">
            <span class="red"> * <?php echo $surnameErr;?></span>
            <br>
            <input type="text" name="adress" placeholder="adress here">
            <span class="red">  <?php echo $adressErr;?></span>
            <br>
            <input type="text" name="nomer" placeholder="Phone number here">
            <span class="red">  <?php echo $nomerErr;?></span>
            <br><br>
            <input type="date" name="datee" placeholder="Date here">
            <span class="red">  <?php echo $dateErr;?></span>
            <br><br>
            Fakultetni tanlang:<select name="yunalish">
                <option></option>
                <option value="1">KIF</option>
                <option value="2">Telekom</option>
                <option value="3">Dasturiy</option>
                <option value="4">Aloqala</option>
                <option value="5">Radio va mobil</option>
            </select> <br>
						
			<input id="sub" type="submit" name="submit" value="SUBSCRIBE">
		</form>
        
		</div>
    <div style="width:50%; margin-left:100px">
          
    </div>
        

</body>
</html>