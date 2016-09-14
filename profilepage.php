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
           <div class="userinf">
            <b><p class="profilename"><?php echo $username; ?></p></b>
            <div class="profilePic"></div>
            </div>
            <div class="plus">
            
            </div>
             <div class="gear" onclick="openSettings()"></div>
            <a href="logout.php" class="logout">Logout</a>
        </div>
        <div class="settings" id="settings">
            <div class="close" onclick="closeSettings()"><p class="x">X</p></div>
        <form name="settings" class="settingsForm">
            <input type="text" placeholder="Change Username">
        </form>
        
        </div>
    
    <script type="text/javascript">
        var settings = document.getElementById("settings");
        
        //function openSettings(){
            //settings.style.visibility="visible";
        //}
        //function closeSettings(){
            //settings.style.visibility = "hidden";
        //}
        
    </script>
    </body>


</html>