<?php 
	 
	 $db = new PDO('mysql:host=localhost; dbname=bbms','root','');
	 if($db)
	 {
	 	 "connect";
	 }
	 else {
	 	 "not connect";
	 }

?>