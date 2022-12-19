<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.cs">
	<link rel="stylesheet" type="text/css" href="mighty.css">
</head>
<body>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
	<section>
		<main>
		<div class="login">
                <h1>Log in</h1>
            </div>
		<div class="user">
			<input type="text" name="username" placeholder="User" class="inneruser">
		</div>
		<div class="password">
			<input type="password" name="password" class="pass" placeholder="Password">
		</div>
		<div class="log">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	  </main>
	</section>
  </form>
</body>
</html>