<?php 
	 define("DBHOST", "localhost");
	 define("DBUSER", "root");
	 define("DBPASSWORD", "");
	 define("DBNAME", "tatu");
	 $connect = @mysql_connect(DBHOST,DBUSER,DBPASSWORD,DBNAME);

	 if (!$connect) {
	 	echo 'bazaga ulanmadi';
	 	
	 } else {
	 	echo 'bazaga ulandi';
	 }
 ?>