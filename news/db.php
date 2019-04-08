<?php 
	 define("DBHOST", "localhost");
	 define("DBUSER", "root");
	 define("DBPASSWORD", "");
	 define("DBNAME", "kategoriya");
	 $db = @mysqli_connect(DBHOST,DBUSER,DBPASSWORD,DBNAME);

	/* if (!$db) {
	 	echo 'bazaga ulanmadi <br>';
	 	
	 } else {
	 	echo 'bazaga ulandi <br>';
	 }*/
 ?>