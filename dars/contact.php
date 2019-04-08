<?php 
function qiymat($a) {
    $a = trim($a);
    $a = strip_tags($a);
    return $a;
}

   if ($_POST['submit']) {
    $name = $_POST['name'];
    $fam = $_POST['fio'];
    $mail = $_POST['mail'];
    $content = $_POST['text'];
    
    
    $mail = qiymat($mail);
    $content = qiymat($content);

    echo "$name","<br>";
    echo "$fam","<br>";
    echo "$mail","<br>";
    echo "$content","<br>";

    if (!empty($name)) {
        $name = qiymat($name);
    }else {
         $xatolik1 = "Ism kiritilmagan!";
    }
    if (!empty($fam)) {
        $fam = qiymat($fam);
    }else {
         $xatolik2 = "Familiya kiritilmagan!";
    }
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $xatolik3 = "Email xato";
    }
   } else {
    echo "-";
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
    margin-top: 50px;
    padding-top: 20px;
    width: 80%;
    height: 500px;
    text-align: center;
    background: #fff;
    box-shadow: 0px 0px 10px #efe8e8;
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
    margin-top: 25px;
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
</style>
<body>

	<div id="mail">
			<h3>Talk to <span>me</span></h3>
			<form id="form" action="#" method="post">
            <input type="text" name="name" placeholder="full name here">
			<input type="text" name="fio" placeholder=" here">
			<input type="email" name="mail" placeholder="email here">
			<textarea style="height: 100px" name="text" placeholder="Type here"></textarea><br>			
			<input id="sub" type="submit" name="submit" value="SUBSCRIBE">
		</form>
        
		</div>
        <h2 style="color:red"><?php echo "$xatolik1 <br>","$xatolik2", "$xatolik3"; ?></h2>

</body>
</html>