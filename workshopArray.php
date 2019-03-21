<?php 
$massiv = array(1,2,3,4,22);
$massiv1 = array("mackbook","hp","acer","samsung","lenovo");
$davlat = array('O`zbekiston','Turkmaniston','Rossiya','Armenia');
//echo var_dump($massiv)."<br>";
//echo var_dump($massiv1)."<br>";
//echo gettype($massiv)."<br>";
//echo "hisoblash = ", $massiv[3]+$massiv[0];
//unset($massiv[3]);
//print_r($massiv)."<br>";
 print_r($davlat);
//sort($davlat);
//rsort($davlat);
//print_r($davlat);
//print_r($massiv1)."<br>";
$poytaxt = array('Toshkent'=>'O`zbekiston', 'Ashxabod'=>'Turkmaniston', 'Moskva'=>'Rossiya', 'Yerevan'=>'Armenia');

if(in_array("Turkmaniston", $poytaxt)) {
	echo "Massivda bu qiymat mavjud";
} else {
	echo "Bunday qiymat mavjud emas";
}

//$poytaxt['London']='Angliya';
//print_r($poytaxt);
//sort($poytaxt);
//print_r($poytaxt);
//rsort($poytaxt);
//print_r($poytaxt);
//shuffle($poytaxt);
//print_r($poytaxt);
//$matn = "lorem ipsum icons awesome html code js";
//$a = explode(' ', $matn);
//print_r($a);
//$text = "lorem ipsum icons awesom htm code js";
//$b = explode('m ', $text);
//print_r($b);
//$c = 1;
//$num = array(1, 7, 3, 10);
//$nums = array(22.5, 31.2, 41.7);
//echo "massiv elementlari yigindisi ", $num[1]+round($nums[2]).'<br>';
//echo " massiv elementlari ayirmasi ", round($nums[2])-$num[1].'<br>';
//echo " massiv elementi va alohida o` zgaruvchi ayirmasi ", $num[1]-$c.'<br>';
/*
<?
 $ship = array(
 "Passenger ship" => array("Yacht","Liner","Ferry"),
 "War ship" => array("Battle-wagon","Submarine","Cruiser"),
 "Freight ship" => array("Tank vessel","Dry-cargo ship","Container
 cargo ship")
 );
 foreach($ship as $key => $type)
 {
 echo(
 "<h2>$key</h2>\n"."<ul>\n");
 foreach($type as $ship)
 {
 echo("\t<li>$ship</li>\n");
 }
 }
 echo("</ul>\n");
?>
*/
?>