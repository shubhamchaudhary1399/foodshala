<?php require("includes/common.php");
if (isset($_SESSION['email'])) {
header('location: index.php');
}?>

<!DOCTYPE html>
<html>
<head>
	<title>Login as Restaurant | FoodShala</title>
	<?php include 'includes/head.php' ?>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300&display=swap" rel="stylesheet">
</head>
<body style="background: #f2f2f2;">
	<?php include 'includes/navbar.php'; ?>

  <div class="login">
		<div class="login-content">
			<div class="logo-l">
				<a href="index.php" class="links" style="color:#71a1d1;"><strong>FoodShala</strong></a>
			</div>
			<div class="form-heading">
				<h5>Login As Restaurant</h5>
			</div>
			<form action="loginrestaurant_script.php" method="POST">
				<label for="email">Email</label><br>
				<input type="email" name="Email" id="email" placeholder="Email" required="">

				<label for="password">Password</label><br>
				<input type="password" name="Password" id="password" placeholder="Password">
				<span><a href="register.php" class="links" style="padding: 4px 10px 4px 0;">Create account</a></span>
				<input type="submit" name="Submit" value="Login" onclick="" class="menu-link" style="border:none;">
				<?php
                if (isset($_SESSION['error']))
                {
                	echo $_SESSION['error'];
                }
                ?>
			</form>
      <div class="form-heading" style="margin-top: 5px;">
				<a href='login.php' class="menu-link links" style="padding: 4px 10px; font-weight: 400;">Login as customer</a>
			</div>
		</div>
	</div>

	<?php include 'includes/footer.php' ?>
</body>
</html>
