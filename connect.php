<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "MyProducts2022!";
 $db = "products_db";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
?>