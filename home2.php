
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Vazifa 2</title>
 	<style type="text/css">
 		
 	</style>
 </head>
 <body>
 	<h1>Images</h1>
 	
 	<table border="1" width="300">
 		<th colspan="2">PhP orqali rasm joylash 2-jadval</th>
 		<?php for($i=1; $i<8; $i++) { ?>
 			<tr>
 				<td><img width="300px" height="200px" src="img/<?php if($i%2==1) { echo $i; } ?>.jpg"></td>
 				<td><img width="300px" height="200px" src="img/<?php if($i%2==0) { echo $i; } ?>.jpg"></td>
 				 				
 			</tr>
 		<?php } ?>
 	</table>
 </body>
 </html>