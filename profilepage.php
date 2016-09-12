<?php
session_start();
$username = $_SESSION['username'];
?>

<!DOCTYPE HTML>
<html>
    <head>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="css/profile.css">
    <meta charset="UTF-8">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet" type="text/css">
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon'/>
    </head>
    <body>
        <div class="banner">
            <p class="profilename"><?php echo $username; session_destroy(); ?></p>
        </div>
    
    
    </body>


</html>