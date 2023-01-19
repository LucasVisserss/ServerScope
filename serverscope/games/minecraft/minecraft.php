<!DOCTYPE html>
<html>
<html lang="en">
<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Fonts -->
    <link href="https://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">

    <!-- Style sheets-->
    <link rel="stylesheet" href="Public/CSS/style.css" type="text/css">
    <link rel="stylesheet" href="Public/CSS/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="Public/CSS/typekit.css">

    <!-- include -->
    <?php include __DIR__ . "minecraft/games/minecraft/minecraft_functions.php"; 
          include __DIR__ . "minecraft/header.php";
    ?>
</div>
 
</head>

<body>
    

<div class="server_ip">
<form action="/minecraft/minecraft.php" method="get">
    <input class="mc_input box" placeholder = "Server Ip" type=title name="server_ip">
    <input type="submit" value="Check status" href="/minecraft/minecraft.php" class="mc_btn">
</form>
</div>
<button onclick="toggleOutput()">Toggle</button>



<div class="version border-gradient border-gradient-purple">
<?php

$server = getAllAvailable($status);
//Print the status
if ($status->online == true) { 
    echo("<span class='online_badge shadow'>Server is online.</span><br>");
} else {
    echo("<span class='offline_badge shadow'>Server is not online.</span><br>");
}
print("Server Ip : <span class='info_badge shadow'>".$status->ip."</span><br>");
print("Server port : <span class='info_badge shadow'>".$status->port."</span><br>");

foreach ($server as $key => $value) {
    if(isset($value) && $value != "") {
        if ($key == "motd") {
            print $key." : <br> <div class='motd'>";
            foreach ($value as $motd) {
                echo("<span class='motd_badge shadow'>".$motd."</span><br>");
            }
            print("</div>");
        } elseif ($key == "player_list") {
            print $key." : ";
            foreach ($value as $player) {
                echo $player.'<br />';
            }
        } elseif ($key == "player_uuid") {
            print $key." : ";
            foreach ($value as $uuid) {
                echo $uuid.'<br />';
            }
        } elseif ($key == "icon") {
            print($key." : <img class='image' src='".$value."'><br>");
        } else {
            print($key." : <span class='info_badge shadow'>".$value."</span><br>");
        }
    } else {
        print("<span class='no_info_badge shadow toggleOutput'> No ".$key." available</span><br>");
    }
}
?>
</div>