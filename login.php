<?php
include "config.php";
session_start();

$email = $_POST['EMAIL']; 
$password = $_POST['PASS']; 
    $password = md5($password);    
    
$sql = mysql_query("SELECT * FROM users WHERE email = '".$email."' and password = '".$password."'");
$count= mysql_num_rows($sql);


if($count == 1){
    if (!isset ($_SESSION['username'])) {
    $_SESSION['username'] = implode(mysql_fetch_array(mysql_query("SELECT username FROM users WHERE email = '".$email."' and password = '".$password."'")));
    }
    header("Location: profilepage.php");
}
else {
    header('Location: loginw.html#box-2');
}
?>