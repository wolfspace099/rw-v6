<?php
    $dbconf2 = simplexml_load_file("sqlconfig2.xml");
    if ($dbconf2 === FALSE) {
        die("Error parsing XML file");
    }  else {
        $db2 = new PDO("mysql:host=$dbconf2->mysql_host;dbname=$dbconf2->mysql_database;charset=utf8",
            "$dbconf2->mysql_username", "$dbconf2->mysql_password")
            or die('Error connecting to mysql server');
        $salt2 = $dbconf2->mysql_salt;
	}
?>