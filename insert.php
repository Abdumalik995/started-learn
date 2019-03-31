<?php 
  include "baza.php";

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
    }

    
            /*echo "<h2>Sizning Ma`lumotlaringiz:</h2>";
            echo $name;
            echo "<br>";
            echo $surname;
            echo "<br>";
            echo $adress;
            echo "<br>";
            echo $nomer;
            echo "<br>";
            echo $datee;
            echo "<br>";
            echo $yunalish;*/
           
        
       $query = "INSERT INTO talabalar (`name`, `surname` , `adress` , `nomer` , `datee` , `yunalish_id`) VALUES ('$name', '$surname', '$adress', '$nomer', '$datee', '$yunalish')";
       
       //INSERT INTO  `tatu`.`talabalar` (


       $result = mysqli_query($db, $query);

       /*if($result) {
        echo "yozildi <br>";
       } else {
        echo "yozilmadi";
       }  */

  $sql = "SELECT * FROM talabalar";
       $res = mysqli_query($db, $sql);
       $talabalar = array();
       while($row = mysqli_fetch_assoc($res)) {
        $talabalar[] = $row;
       }

     /*  $sqll = "DELETE FROM talabalar where name='Abdumalik'";
       $resd = mysqli_query($db, $sqll);
       if($resd) {
        echo "uch";
       } else {
        echo "no";
       }
*/ ?>
 	<table border="1" width="800">
    		<tr>
    			<th>Id</th>
    			<th>NAME</th>
    			<th>SURNAME</th>
    			
    			<th>ADRESS</th>
    			<th>NOMER</th>
    			<th>DATEE</th>
    			<th>YUNALISH_ID</th>
    			<th>EDIT</th>
    		</tr>
    		
    		<?php foreach ($talabalar as  $talaba) { ?>    			
    		<tr>
                <?php foreach ($talaba as $val) { ?>
                    <td><?php echo $val ?></td>
                        <?php } ?>
                   	<td><a href="edit.php?id=<?=$talaba['id']?>">Edit</a></td>
                 
    			<!-- <td><?php echo $value['ismi']; ?></td>
    			<td><?php echo $value['yoshi']; ?></td>
    			<td><?php echo $value['kasbi']; ?></td> -->
    			   			
    		</tr>
    		<?php } ?>
    	
    	</table>