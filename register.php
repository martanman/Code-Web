<?php
include "config.php";
include "saltmd.php";

$username = $_POST['username'];
$email = $_POST['email'];
    $password = ($_POST['password']);
    $password = md5($password);    
    



$query = mysql_query("SELECT username FROM Users WHERE username='".$username."'");
$query2 = mysql_query("SELECT email FROM Users WHERE email='".$email."'");

$queruser = mysql_query("SELECT username FROM users WHERE email='".$email."'");


if (mysql_num_rows($query) != 0)
  {
    header('Location: usernametaken.html#box-2');        
        die("Username exists");
  }
else if(mysql_num_rows($query2) != 0){
    header('Location: emailtaken.html#box-2');    
            die("An account with that email already exists");
    
    
}
else
  {
    $query = 'INSERT INTO `Users` (`id`, `username`, `email`, `password`, `verify`) VALUES ("NULL","'.$username.'", "'.$email.'", "'.$password.'","False")';
      mysql_query($query)or trigger_error(mysql_error()."in".$query);
  }

//sends verification email
//edit in php.ini aswell
//$to = $email;
//$subject = "Please verify your account";
//$from = 'varun.sethu@codeweb.com';
//$message = file_get_contents("email.html");
//$headers = "From:".$from;
//mail($to, $subject, $message, $headers);
?>
