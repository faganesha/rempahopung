<?php

    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "db_rempah";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);


?>