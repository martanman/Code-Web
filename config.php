<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "login";
$server = "127.0.0.1";

mysql_connect($server,$username,$password);

mysql_select_db($database) or die( "Unable to select database");

