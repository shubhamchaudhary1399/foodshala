<!DOCTYPE html>
<html>
<head>
	<title>Register as customer | FoodShala</title>
	<?php include 'includes/head.php' ?>
  <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

  <div class="userform">
		<div class="form-heading">
			<h2>Register As Customer</h2>
			<h6 id="subheading">Order your favourite food now!</h6>
		</div>

		<div class="form">
			<form method="POST" action="signup_script.php" name="SignUp_User">
				<div class="f_name">
					<label for="fname">First name (required)</label><br>
					<input type="text" name="firstname" id="fname" placeholder="First name" required>
				</div>
				<div class="l_name">
					<label for="lname">Last name (optional)</label><br>
					<input type="text" name="lastname" id="lname" placeholder="Last name">
				</div>
				<label for="phonenumber">Enter your phone number (required)</label><br>
				<input type="tel" name="Phonenumber" maxlength="10" id="phonenumber" placeholder="Phone number" required>
				<?php
                if(isset($_GET["m1"])){
                  echo $_GET['m1'];
                }?>

				<label for="email">Enter your email (required)</label><br>
				<input type="email" name="Email" id="email" placeholder="Email" required>
				<?php
                if(isset($_GET["m2"])){
                    echo $_GET['m2'];
                }?>

				<label for="fname">Food preference</label><br>
				<select class="taste" name="">
					<option value="">Veg</option>
					<option value="">Non Veg</option>
				</select>

				<label for="password">Enter a password (required)</label><br>
				<input type="password" name="Password" id="password" placeholder="Password" pattern=".{6,}" required>

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
						<a href="registerrestaurant.php" class="btn btn-default menu-link float-left">Register as restaurant</a>
          </div>
      	</div>
			</form>

		</div>
	</div>
	<br>

	<?php include 'includes/footer.php' ?>
</body>
</html>
