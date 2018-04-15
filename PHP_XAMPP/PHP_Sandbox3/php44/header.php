<?php
	//We need to have a session started on ALL pages
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<?php
					//Here is our login form!
					//Notice that we check if we have a SESSION variable named "u_id". The "u_id" is created in our login script in login.inc.php, and will only exist if the user is logged in!

					//If the user is logged in ("u_id" does exist), then we display the logout form
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							<button type="submit" name="submit">Logout</button>
						</form>';
					}
					//If the user is not logged in ("u_id" doesn't exist), then we display the login form
					else {
						echo '<form action="includes/login.inc.php" method="POST">
							<input type="text" name="uid" placeholder="Username/e-mail">
							<input type="password" name="pwd" placeholder="password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign up</a>';
					}
				?>
			</div>
		</div>
	</nav>
</header>
