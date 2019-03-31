<?php 
	include "baza.php";


// define variables and set to empty values
    $nameErr = $surnameErr = $adressErr = $nomerErr = "";
    $name = $surname = $adress = $nomer = "";

    if (isset($_POST['submit'])) {
      if (empty($_POST["name"]) || empty($_POST['surname'])) {
      	echo "Ism va Familiya to'ldirilishi shart <br>";

        //$nameErr = "Ism kiritilmadi";
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
          echo "Ismda faqat harflar va probel bo`lishi mumkin <br>"; 
        }
      }
      if (empty($_POST["surname"])) {
        $surnameErr = "Familiya kiritilmadi";
      } else {
        $surname = test_input($_POST["surname"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
          echo "Familiya faqat harflar va probel bo`lishi mumkin <br>"; 
        }
      } 
      if (empty($_POST["jinsi"])) {
        $jinsiErr = "";
      } else {
        $jinsi = test_input($_POST["jinsi"]);
      }     

      if (empty($_POST["adress"])) {
        $adressErr = "";
      } else {
        $adress = test_input($_POST["adress"]);
      }

      if (empty($_POST["nomer"])) {
        $nomerErr = "";
      } else {
        $nomer = test_input($_POST["nomer"]);
      }
      if (empty($_POST["datee"])) {
        $dateerr = "";
      } else {
        $datee = test_input($_POST["datee"]);
      }
      if (empty($_POST["yunalish"])) {
        $yunalishErr = "";
      } else {
        $yunalish = test_input($_POST["yunalish"]);
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
           /* $name = $_POST['name'];
            $surname = $_POST['surname'];
            $nomer = $_POST['nomer'];
            $adress = $_POST['adress'];
            $datee = $_POST['datee'];
            $yunalish = $_POST['yunalish'];*/
        
       $query = "INSERT INTO talabalar (name, surname, nomer, adress, datee, yunalish_id) VALUES ('$name', 
       '$surname', '$nomer', '$adress', '$datee', '$yunalish')";

       $result = mysqli_query($db, $query);

       if($result) {
       	echo "yozildi <br>";
       } else {
       	echo "yozilmadi";
       }
       $query1 = "DELETE FROM talabalar where id='60'";
       $result1 = mysqli_query($db, $query1);

       if($result1) {
       	echo "O`chirildi 1";
       }
       else {
       	echo "no deleted";
       }
       $sql = "SELECT * FROM talabalar";
       $res = mysqli_query($db, $sql);
       $talabalar = array();
       while($row = mysqli_fetch_assoc($res)) {
       	$talabalar[] = $row;
       } 
      

 ?>
 	<table border="1" width="800">
    		<tr>
    			<th>Id</th>
    			<th>NAME</th>
    			<th>SURNAME</th>
    			<th>JINSI</th>
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