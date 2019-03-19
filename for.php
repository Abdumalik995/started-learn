<?php 
$s=0;
for ($i=0; $i <= 10; $i++) {
		 $s=$s+$i; // yoki $s+=$i;
	// if ($i%2 != 0) {
	//  echo "qiymatlar = ".$i."<br>";	
	//  break;
	//  } 
	/* if ($i%2 == 0) {
	 echo "qiymatlar = ".$i."<br>";	
	 continue;
	 }*/ 
	
}
//echo "yig'indi ".$s."<br>";


// $a = 0;
// for ($i=0; $i <=100 ; $i+=1) { 
// 	if ($i%2 != 0) {
// 		$a += $i;
// 	}
// }
// echo $a."<br>";



// $p = 1;
// for ($i=2; $i <=10; $i++) { 
// 	$p*=($i+2);
// 	}
// echo $p;

// $c = 0;
// for($i=1; $i <= 9; $i++) { 
// 	$c +=$i/($i+1);
// }

// echo $c."<br>";
// $d= 0;
// for($i=2; $i<=10; $i++) { 
// 	$d+=($i-1)/$i;
// }

// echo $d."<br>";
 
	if(isset($_POST['aa']) and isset($_POST['bb'])) {

		$a = $_POST['aa'];
		$b = $_POST['bb'];
		
		if($a > $b) {
			echo $a;
		} else {
			echo $b;
		}
	
	}
	else {
		echo 'x va y qiymat kiritilmadi <br> <a href="for.php?x=5&y=6"> Namuna sifatida havolani bosing</a><br>';
	}



	 // for($b=1; $b<=30; $b++) {
	 // 	if(30%$b==0) {
	 // 		echo $b.'<br>';
	 // 	}
	 // }

	/*=======*/
	// $v = 0;
	// for($b=1; $b<=15; $b++) {
	//  	if(15%$b==0) {
	//  		$v+=$b;
	 		
	//  	}
	//  }echo $v.'<br>';
	//echo htmlspecialchars("&amp");
	echo $_SERVER['SERVER_NAME'];
	echo $_SERVER['SCRIPT_NAME'];

	
?>

