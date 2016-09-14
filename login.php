<?php
include "config.php";
session_start();

$email = $_POST['EMAIL']; 
$password = $_POST['PASS']; 
    $password = md5($password);
    
$sql = mysql_query("SELECT * FROM users WHERE email = '".$email."' and password = '".$password."'");
$count= mysql_num_rows($sql);


if($count == 1){
    
    //get username from database
    if (!isset ($_SESSION['username'])) {
    $num = mysql_fetch_array(mysql_query("SELECT username FROM users WHERE email = '".$email."' and password = '".$password."'"));
        foreach($num as $value){
            $value = $value;
                $_SESSION['username'] = $value;
        }
    }
    if (!isset ($_SESSION['profilePic'])){
        
    }
    header("Location: profilepage.php");
}
else {
    header('Location: loginw.html#box-2');
}
?>