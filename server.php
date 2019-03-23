<?php 
// echo "<pre>";
// print_r($_SERVER);
// echo "<pre>";
 
 // $mas = array("ma", "dd"); 
 // echo count($mas);
 $matn = " PHP dasturlash tilini boshqa dasturlash tillari bilan birga ishlatish mumkin ";
// echo "$matn"."<br>";
// echo "belgilar soni ".strlen($matn)."<br>";
// echo "so`zlar soni ".str_word_count($matn)."<br>";// arraydagi elementlar sonnini bilish uchun count()
 echo "satrni teskarisiga o`girish ".strrev($matn).'<br>';
 echo "satrdagi belgilarni almashtirish ".str_replace('PHP', 'HTML', $matn).'<br>';
// echo "probelni o`chirish ".trim($matn).'<br>';
// echo "positionni aniqlash ".strpos($matn, 'boshqa').'<br>';
// echo "Qatorni belgilangan qismidan qirqib olish ..berilgan qiymatgacha ..", substr($matn, 15, 4)."<br>";
// echo "Qatorni belgilangan qismidan qirqib olish ..", substr($matn, 15)."<br>";
// echo "striplashes teskari slashni uchirish uchun " ...va magic_quotes_gps yoqilgan bulishi kerak.;
// echo " kichik harflarga uzgartirish, bunda strdagi har qanday katta harflar kichik harflarga utqaziladi". strtolower($matn);
$str = 'foo   o';
$str = preg_replace('/\s\s+/', ' ', $str); // bu funksiya berilgan belgilar asosida strga uzgartirish kiritadi joy tashlash, probelni olib tashlsh vahokazo...;
//echo $str;

// select count(name) from foydalanuvchi
// select * from foydalanuvchi where adress="Tashkent"
// select * from foydalanuvchi where id<"3"
// select name, yil, narxi from salon1 where davlat="Turkiya"
// select max(soni), id, name, davlat from salon1
// select count(davlat)  from salon1 where davlat="Turkiya"
// select count(davlat), name, davlat, narxi  from salon1 where davlat="Turkiya"
// select name, davlat, narxi  from salon1 where yil>"2019-02-10"
echo floor(-1.9)."<br>";
echo floor(1.9)."<br>";
echo ceil(-1.9)."<br>";
echo ceil(1.9)."<br>";
print_r($_GET);
echo '<a href="?x=5&y=6">Bos</a><br>';
$matn1 = "<h1>Ma\'lumot 'o\'rnida'</h1><br>";
echo htmlspecialchars($matn1, ENT_COMPAT);
echo htmlspecialchars($matn1, ENT_QUOTES);
echo htmlspecialchars($matn1, ENT_NOQUOTES);
//echo stripcslashes($matn1);
/*=====*/
/*function ekub($x, $y) {
	while($x!=$y) {
		if($x>$y) {
			$x-=$y;
		} else {
			$y-=$x;
		}
	} 
	return $x;
}
echo ekub(18,24).'<br>';
echo ekub(18,72).'<br>';
echo ekub(12,42).'<br>';*/
/*====*/
/*=======*/

/*function test() {
	static $soni = 1;
	$soni++;
	echo "Funksiyaning chaqirilishlar soni = $soni <br>";


}
test();
test();
test();
test();*/
/*====*/


//echo htmlspecialchars(" & ", ENT_COMPAT);
//$tt = "mashq";
//unset($tt);
//var_dump($tt);
 ?>