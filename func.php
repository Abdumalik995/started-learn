<?php 
	// function yuza($name=" Dasturchi") {
	// 	echo "Salom ",$name,"<br>";
	// }
	// yuza(' Anvar');
	// yuza(' Sarvar');
	// yuza(' Sardor');
	// yuza();

	// function kvadrat($a) {
	// 	return $a*$a;
	// }	

 //  echo kvadrat(5)."<br>";
 //  echo kvadrat(10)."<br>";
 //  echo kvadrat(15)."<br>";
 //  echo kvadrat(20)."<br>";

 //  function yuza1($a) {
	// 	echo 'kv = '.$a*$a.'<br>';
	// }
	// yuza1(10);

	// function qiymat($a, $b) {
	// 	$p=1;
	// 	for($i=$a; $i<$b; $i++) {
	// 		$p*=($i+2);
	// 	} 
	// 	return $p;
	// 	//yoki echo "ko`paytma= ",$p,"<br>";
	// }
	//echo "Summa ",qiymat(2, 10).'<br>';
	//echo qiymat(10, 20);
	/*------*/
	function summa($a=0, $b=0) {
		if ($a == 0 && $b == 0) {
		echo "Qiymat berilmagan";
		
		} else {
			
			$p=1;
			for($i=$a; $i<$b; $i++) {
			$p*=($i+2);
		} 
		
		return $p;
		}
		/*---*/
		
	}
	//echo "Summa ",qiymat(2, 10).'<br>';
	//echo summa();
	// $d=1;
	// function hisoblash() {
	// 	$d = 2;
	// 	$d = $d+5;
	// 	echo $d;
	// }
	// hisoblash();
	/*----*/
	$x = 75;
	$y = 25;
	function addition() {
		$x = 15;//
		$y = 10;// bunda faqat global deb berilgan qiymatlarni oladi. ^..
		$GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];// yoki $x+$y;
		// yoki1: return $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];// yoki $x+$y;

	} 
	//addition();
	//echo $z;
	//yoki1: echo addition(); return orqali berilganda. mana shunday yo'l bilan foydalanishimiz mumkin.
	/*----*/

	/*----*/
	function foo() {
		static $a = 0;
		echo $a."<br>";
		$a = $a + 1;
	}
	// foo();
	// foo();
	// foo();
	// foo();
	// foo();
	/*----*/

	/*---*/
	$f = 1;	
	function sgl() {
		$f = 0;
		echo "global o'zgaruvchi = ",$GLOBALS['f'],"<br>";
		echo "local o'zgaruvchi = ",$f,"<br>";
		

		static $f = 6;// oxirgi berilgan qiymatimizdan foydalanishimiz uchun static dan...
		echo "Static o'zgaruvchi = ".$f.'<br>';
		$f += 1;

	}
	sgl();
	/*-----==----*/

 ?>