<div class="navbar">
		<div class="max-width">
			<img src="img/svg/menu.svg" class="hide-lg" onclick="burger()">

			<div class="navbar-brand">
        <a class="brand-link" href="index.php">
          <span class="material-icons md-36" style="float: left;">fastfood</span>
          <span class="foodshala"><strong>FoodShala</strong></span>
        </a>
			</div>

		<?php
            if (isset($_SESSION['email'])) { ?>

            <div class="navbar-left">
				<a href="qubuser.php" class="links">Hello <?php echo $_SESSION['firstname']; ?></a>
			</div>

			<div class="navbar-right">
        <a href="fleet.php" class="links">Offers</a>
				<a href="drive.php" class="links">Rewards</a>
				<a href="aboutus.php" class="links">Help</a>
				<a class="menu-link links" href="menu.php">See Menu</a>
			</div>
		</div>
	</div>

		<div class="sidebar-navbar" style="">
			<span class="cbtn" onclick="burger()">&times;</span>
			<ul class="nav_ul">
				<li><a href="qubuser.php" class="links nav-links">
						<img src="img/svg/account_circle.svg" class="material-icon">Hi <?php echo $_SESSION['firstname']; ?></a></li>
				<li><a href="booknow.php" class="links nav-links">
						<img src="img/svg/taxi.svg" class="material-icon">Book Now</a></li>
				<li><a href="fleet.php" class="links nav-links">
						<img src="img/svg/fleet.svg" class="material-icon">Qub Fleet</a></li>
				<li><a href="aboutus.php" class="links nav-links">
						<img src="img/svg/company.svg" class="material-icon">Our Company</a></li>
				<li><a href="settings.php" class="links nav-links">
						<img src="img/svg/settings.svg" class="material-icon">Settings</a></li>
				<li><a href="logout_script.php" class="links nav-links">
						<img src="img/svg/logout.svg" class="material-icon">Logout</a></li>

			</ul>
		</div>

		<!-- ------------------------------ -->


        <?php } else {  ?>

            <div class="navbar-left">
				<a href="login.php" class="links">Login</a>
				<a href="signUp.php" class="links">Signup</a>
			</div>

			<div class="navbar-right">
				<a href="fleet.php" class="links">Offers</a>
				<a href="drive.php" class="links">Rewards</a>
				<a href="aboutus.php" class="links">Help</a>
				<a class="menu-link links" href="menu.php">See Menu</a>
			</div>
		</div>
	</div>

		<div class="sidebar-navbar" style="">
			<span class="cbtn" onclick="burger()">&times;</span>
			<ul class="nav_ul">
				<li><a href="login.php" class="links nav-links">
          <span class="material-icons material-icon">fastfood</span>
          <span class="mt-aside">Login</span></a></li>
				<li><a href="login.php" class="links nav-links">
          <span class="material-icons material-icon">fastfood</span>
          <span class="mt-aside">Login</span></a></li>
				<li><a href="login.php" class="links nav-links">
          <span class="material-icons material-icon">fastfood</span>
          <span class="mt-aside">Login</span></a></li>
				<li><a href="login.php" class="links nav-links">
          <span class="material-icons material-icon">fastfood</span>
          <span class="mt-aside">Login</span></a></li>
				<li><a href="login.php" class="links nav-links">
          <span class="material-icons material-icon">fastfood</span>
          <span class="mt-aside">Login</span></a></li>

			</ul>
		</div>


            <?php  }  ?>


	<div id="clear"></div>
