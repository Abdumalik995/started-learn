<?php 
// echo "<pre>";
// print_r($_SERVER);
// echo "<pre>";
 
$matn = " PHP dasturlash tilini boshqa dasturlash tillari bilan birga ishlatish mumkin ";
echo "$matn"."<br>";
echo "belgilar soni ".strlen($matn)."<br>";
echo "so`zlar soni ".str_word_count($matn)."<br>";
echo "satrni teskarisiga o`girish ".str_replace('PHP', 'HTML', $matn).'<br>';
echo "probelni o`chirish ".trim($matn).'<br>';
echo "positionni aniqlash ".strpos($matn, 'boshqa').'<br>';
 ?>