<?php

	$host = "localhost";

	$user = "root";

	$pass = "";

	$db = "simsimdig";

	$koneksi = mysql_connect($host,$user,$pass);

	mysql_select_db($db,$koneksi);

?>