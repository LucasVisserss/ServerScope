<!DOCTYPE html>
<html lang="en">

<?php
include __DIR__ . "/header.php";


?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Games & Status</title>
	<link rel="stylesheet" href="style.css" type="text/css">
	<link href="https://fonts.googleapis.com/css2?family=Reem+Kufi+Ink&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
	<link href="https://fonts.cdnfonts.com/css/minecraft-4" rel="stylesheet">
</head>
<body>

	<div class="wrapper">
	
		<!-- Top Header Code -->
		<nav>
			<div class="menu">
				<!-- logo -->
				<div class="logo">
					<img src="img/logowebsite.png">
				</div>
				
				<!-- Menu Bar Code -->
				<input type="checkbox" id="check">
				<label for="check" class="checkbtn">
					<i class="fas fa-bars"></i>
				</label>
				<ul>
					
					<li><a href="#" class="active"> Home</a></li>
					<li><a href="#">Games</a></li>
					<li><a href="#">Status</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<!-- Menu Bar Code End -->
			
			</div>
		</nav>
		<!-- Top Header Code End -->
		
		<!-- Content Code -->
		<div class="container">
			<div class="InnerDiv">
				<div class="center">
					<p class="title">What is the goal of our website?</p>
					<p class="sub_des">The goal of the website is to provide users with a platform to search and view information about different games, 
						including their status. This can include information such as whether the game is currently available to play, 
						any upcoming releases or updates, and any relevant news or reviews about the game. Additionally, 
						the website may also offer features such as the ability to purchase or download games, or to connect with other players. Overall, 
						the website aims to serve as a comprehensive and convenient resource for users 
						interested in learning about and engaging with different games.</p>
					<div class="btns">
						<button>Read more</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Content Code End -->
</div>

	
	<div class="Support">
		<div class="SupportInner">
				<h2 class="SupportTitle">Games we support</h2>
				
					<p class="SupportInfo">
					These are just a few examples of popular games on PC, and the list can change depending on time. <br>
					 These are the most popular games according to recent data, 
					but it's worth noting that the popularity of games can vary depending on region and personal preference.
				</p>
		
	
	<div class="form-container">
        <form>
            <div class="form-group">
                <label class="form-label">Popular Games we support at the moment:</label>
                <ul class="game-list">
                    <li>Minecraft</li>
                    <li>Among Us</li>
                    <li>Valorant</li>
                    <li>CS:GO</li>
                    <li>Dota 2</li>
					<li>Fortnite</li>
					<li>PUBG</li>
					<li>Apex Legends</li>
					<li>Call of Duty: Warzone</li>
					<li>World of Warcraft</li>
					<li>Grand Theft Auto V</li>
					<li>League of Legends</li>
					<li>Overwatch</li>
					<li>Rocket League</li>
                </ul>
            </div>
        </form>
    </div>

</body>
</html>