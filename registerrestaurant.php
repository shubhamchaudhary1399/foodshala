<?php require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: index.php');
} ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register as restaurant | FoodShala</title>
	<?php include 'includes/head.php' ?>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

  <div class="userform">
		<div class="form-heading">
			<h2>Register As Restaurant</h2>
			<h6 id="subheading">Move your restaurant online!</h6>
		</div>

		<div class="form">
			<form method="POST" action="registerrestaurant_script.php" name="registerrestaurant">
				<label for="rname">Restaurant name (required)</label><br>
				<input type="text" name="name" id="rname" placeholder="Restaurant name">
				<?php
                if(isset($_GET["m1"])){
                    echo $_GET['m1'];
                }?>

				<label for="phonenumber">Restaurant number (required)</label><br>
				<input type="tel" name="Phonenumber" maxlength="10" id="phonenumber" placeholder="Phone number">
				<?php
                if(isset($_GET["m2"])){
                  echo $_GET['m2'];
                }?>

				<label for="email">Restaurant email (required)</label><br>
				<input type="email" name="Email" id="email" placeholder="Email">
				<?php
                if(isset($_GET["m3"])){
                    echo $_GET['m3'];
                }?>

        <label for="password">Enter a password (required)</label><br>
				<input type="password" name="Password" id="password" placeholder="Password">
				<?php
                if(isset($_GET["m4"])){
                    echo $_GET['m4'];
                }?>

				<input type="checkbox" name="terms" value="agree" required=""> I agree to terms and conditions <br>
				<div class="form-group row mb-0">
          <div class="col-md-12">
              <button type="submit" class="btn btn-default menu-link float-right">
                  Submit
              </button>
          </div>
      	</div>
				<div class="form-group row mb-0">
          <div class="col-md-12">
						<a href="register.php" class="btn btn-default menu-link float-left">Register as customer</a>
          </div>
      	</div>
			</form>

		</div>
	</div>
	<br>

	<?php include 'includes/footer.php' ?>
</body>
</html>
