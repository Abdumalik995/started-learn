<?php
$yil = date(Y);
$oy = date(F);
switch ($oy) {
	case 'April':
		$oy = "Aprel";
		break;
		case 'March':
		$oy = "Mart";
		break;
		case 'May':
		$oy = "May";
		break;
	
	default:
		$oy = "Qiymat mavjud emas";
		break;
}
$hafta = date(W);
$kun = date(j);
$oylar  = array('Mart','Aprel','May','Iyun');
$oylar1  = array('Mart','Aprel','May','Iyun', 12, 1.23, array('12', 11, 'mnd'));
//print_r($oylar1);
echo "Hozir ".$yil."-yil ".$oy." oyi,  yilning ".$hafta."-haftasi va ".$kun."-kuni.<br>";

if(in_array($oy, $oylar)) {
	echo "<br>Massivda ko'rsatilgan oy nomi mavjud";
} else {
	echo "<br>Oy nomi mavjud emas";
}
//echo date("d.m.Y");
?>