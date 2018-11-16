<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles/headerstyle.css">
	<link rel="stylesheet" type="text/css" href="styles/homestyle.css">
	<link rel="stylesheet" type="text/css" href="styles/forumstyle.css">
	<link rel="stylesheet" type="text/css" href="styles/userstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="script.js"></script>
</head>
			<div class="header-wrapper">
				<div class="header-background"></div>
				<a class="header-logo" href="index.php">soomersult</a>
				<div class="header-login">
					<?php 
						if(isset($_SESSION['u_id'])) {
							$test = $_SESSION['u_uid'];
							echo '<form action="includes/logout.inc.php" method="POST">
								  <button class="buttons" type="submit" name="submit">Logout</button>
								  <a class="username" href="user.php">' . $test . '</a></form>';   
						} else {
								echo 
									'<form action="includes/login.inc.php" method="POST">
									<input type="text" name="uid" placeholder "Username/E-mail">
									<input type="password" name="pwd" placeholder "Password">
									<button class="buttons" type="submit" name="submit">Login</button>
									<a class="buttons" href="signup.php">Sign Up</a>';
								}
					?>	
				</div>
					
					<nav>
						<ul>
							<li><a href="index.php">HOT</a></li>
							<li><a href="new.php">NEW</a></li>
							<li><a href="top.php">TOP</a></li>
							<li><a href="home.php">WINS</a></li>
						</ul>
					</nav>	
					<div class="header-search">
						<div class="header-searchcontainer">
								<div class="header-searchimg"></div>
								<form>
									<input class="search" type="text" placeholder="Search">
								</form>
						</div>
					</div>
					<div id="tab-border"></div>
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
							$("a").each(function() {   
							    if (this.href == window.location.href) {
							        $(this).addClass("active");
							    }
							});
					</script>
			
		</div>
</html>
