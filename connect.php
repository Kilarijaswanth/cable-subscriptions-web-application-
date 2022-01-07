<?php
define('DB_SERVER',"localhost");
define('DB_USER',"root");
define('DB_DATABASE',"cab");
define('DB_PASSWORD',"");
define('DB_TYPE','mysql');

 		$con = new PDO(DB_TYPE.":host=".DB_SERVER.";dbname=".DB_DATABASE,DB_USER,DB_PASSWORD);
 ?>