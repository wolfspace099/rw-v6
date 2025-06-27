<?php
    $dbconf = simplexml_load_file("sqlconfig.xml");
    if ($dbconf === FALSE) {
        die("Error parsing XML file");
    }  else {
        $db = new PDO("mysql:host=$dbconf->mysql_host;dbname=$dbconf->mysql_database;charset=utf8",
            "$dbconf->mysql_username", "$dbconf->mysql_password")
            or die('Error connecting to mysql server');
        $salt = $dbconf->mysql_salt;
	}
?>