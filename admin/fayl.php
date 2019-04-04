<?php 
//phpinfo(); php versiyalarini nazorat qilish

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>File php</title>

 </head>
 <body>
 	
 	<form action="upload.php" method="POST" enctype="multipart/form-data">
 		
 		<input type="file" name="fayl" accept=".jpg, .jpeg, .png"><br><br>
 		<input type="submit" name="submit" value="Faylni yuklash">
 	</form>
 </body>
 </html>