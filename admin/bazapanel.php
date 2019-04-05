<?php     
    /*// define variables and set to empty values
    $nameErr = $surnameErr = $adressErr = $nomerErr = "";
    $name = $surname = $adress = $nomer = "";

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (empty($_POST["name"])) {
        $nameErr = "Ism kiritilmadi!";
        
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $nameErr = "Ismda faqat harflar va probel bo`lishi mumkin"; 
        }
      }
      if (empty($_POST["surname"])) {
        $surnameErr = "Familiya kiritilmadi!";
      } else {
        $surname = test_input($_POST["surname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          $surnameErr = "Familiya faqat harflardan iborat bulishi mumkin!";
        }
      }     

      if (empty($_POST["adress"])) {
        $adressErr = "Manzilingizni kiriting";
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
    }*/
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
			<h1>Ruyhatga <span> olish </span></h1>
            <p><span class="red">*</span><span style="color:blue"> To`ldirilishi shart bo'lgan maydonlar.</span></p>       
			<form id="form" action="insert.php" method="post" autocomplete="off" enctype="multipart/form-data">
            <input type="text" name="name"  placeholder="name here">
            <span class="red"> * <?php echo $nameErr; ?></span>
            <br>			
			<input type="text" name="surname" placeholder="surname here">
            <span class="red"> * <?php echo $surnameErr; ?></span>
            <br>
            <input type="text" name="adress" placeholder="adress here">
            <span class="red"> * <?php echo $adressErr; ?></span>
            <br>
            <input type="text" name="nomer" placeholder="Phone number here">
            
            <br><br>
            <input type="date" name="datee" placeholder="Date here">
            
            <br><br>
           
            Fakultetni tanlang:<select name="yunalish">
                <option></option>
                <option value="10">KIF</option>
                <option value="2">Telekom</option>
                <option value="3">Dasturiy</option>
                <option value="4">Aloqalash</option>
                <option value="5">Radio va mobil</option>
            </select> <br><br>
            <input type="file" name="fayl" accept=".jpg, .jpeg, .png"><br>
						
			<input id="sub" type="submit" name="sub" value="Registratsiya">
		</form>
        
		</div>
   
          
    </div>
        

</body>
</html> 