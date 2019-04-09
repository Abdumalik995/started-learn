<?php 
	include "db.php";




  $query = "SELECT content.name, content.anons, content.text, content.img, content.datee, content.cat_id, kategoriya.name as ism FROM content LEFT JOIN kategoriya ON content.cat_id=kategoriya.name limit 1";

  /*$queryJoin = "SELECT talaba.id AS id, talaba.name AS ISMI, talaba.surname AS Familiyasi, talaba.adress AS Manzili, talaba.img AS Img,  fak.name AS Fakulteti FROM talabalar AS talaba LEFT JOIN yunalish AS fak ON talaba.yunalish_id=fak.id ORDER BY fak.id";*/
  $result = mysqli_query($db, $query);
  
  $contents = array();
        while($row = mysqli_fetch_assoc($result)) {          
        $contents[] = $row;
      }
     
  //print_r($contents);
 ?>