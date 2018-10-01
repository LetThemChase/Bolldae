<?php

#database connection here.....
$host = "localhost";
$uname = "kevin1";
$password = "123456789";
$database = "bolldae";
$dbc = mysqli_connect($host, $uname, $password, $database) OR die('there was an error : '.mysqli_connect_error());

?>