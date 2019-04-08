<?php 
$img = array('img/1.jpg', 'img/2.jpg', 'img/3.jpg', 'img/4.jpg', 'img/5.jpg', 'img/6.jpg', 'img/7.jpg', 'img/8.jpg');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Vazifa 2</title>
 	<style type="text/css">
 		
 	</style>
 </head>
 <body>
 	<h1>Images</h1>
 	<table border="1" width="300" style="float: left; margin-right: 20px">
 		<th colspan="2">PhP orqali rasm joylash</th>
 		<?php for($i=0; $i<8; $i++) { ?>
 			<tr>
 				<td><img width="300px" height="200px" src="<?php if($i%2==1) { echo $img[$i]; } ?>" alt=""></td>
 				<td><img width="300px" height="200px" src="<?php if($i%2==0) { echo $img[$i]; } ?>" alt=""></td>
 				
 			</tr>
 		<?php } ?>
 	</table>
 	
 	<table border="1" width="300">
 		<th colspan="2">PhP orqali rasm joylash 2-jadval</th>
 		<?php for($i=1; $i<8; $i++) { ?>
 			<tr>
 				<td><img width="300px" height="200px" src="img/<?php if($i%2==1) { echo $i; } ?>.jpg" alt=""></td>
 				<td><img width="300px" height="200px" src="img/<?php if($i%2==0) { echo $i; } ?>.jpg" alt=""></td>
 				 				
 			</tr>
 		<?php } ?>
 	</table>
 </body>
 </html>