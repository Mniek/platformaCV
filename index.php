<?php
	require'connect.php';


?>
<!DOCTYPE html>
<html>
	<head>
		<title>Temporary title during preparations</title>
		<link rel="stylesheet" type="text/css" href="CSS/mainStyle.css">
		<link rel="stylesheet" type="text/css" href="CSS/startStyle.css">
	</head>
	<body>
		<header>
			<div id="logoHeader">
				<h1>Hello and welcome on my super - dooper awesome site!</h1>
				<p> I am trying to be funny and You are ...</p>
				
									<button id="welcomeButton">Let me introduce myself</button>

			</div>
		</header>
		<div id="welcomeFormDiv">
			<aside id = "formHolder">
				<form action="validation.php" method="post">
					<input type="text" name="name" placeholder="Name"/><br/>
					<input type="password" name="password" placeholder="password"/><br/>
					<button id="knownUserButton" class="btn">Hello there</button>
				</form>
			</aside>

			<aside id="links-conf">
				<p><a href="PHP/configStuff/register.php">I want to be a part of it !</a></p>
				<p><a href="PHP/welcomePage.php">I want to watch as watchy watcher</a></p>
			</aside>
		</div>

	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="JS/welcomeScript.js"></script>
</html>