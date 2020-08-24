<div class="navbar-food">
		<div class="max-width-nav">
			<img src="img/svg/menu.svg" class="hide-lg" onclick="burger()">

			<div class="nav-br-fs">
        <a class="br-fs-link" href="index.php">
          <span class="material-icons md-36" style="float: left;">fastfood</span>
          <span class="foodshala"><strong>FoodShala</strong></span>
        </a>
			</div>

		<?php
            if (isset($_SESSION['email'])) { ?>

            <div class="navbar-l">
				<a href="qubuser.php" class="links">Hello <?php echo $_SESSION['firstname']; ?></a>
			</div>

			<div class="navbar-r">
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

		<!-- ------------------------------ -->


        <?php } else {  ?>

            <div class="navbar-l">
				<a href="login.php" class="links">Login</a>
				<a href="register.php" class="links">Register</a>
			</div>

			<div class="navbar-r">
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
