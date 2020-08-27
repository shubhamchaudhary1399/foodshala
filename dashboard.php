<?php require("includes/common.php");
if(isset($_SESSION['email'])){
    if(trim($_SESSION['type']) != "restaurant"){
      header('location: menu.php');
    }
}else{
      header('location: login.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Restaurant Dashboard | FoodShala</title>
	<?php include 'includes/head.php' ?>
  <link rel="stylesheet" type="text/css" href="css/addmenuitem.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

  <div class="container-fluid mt-3">
		<div class="row">
			<div class="col-lg-2 col-md-3">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link text-bt active" href="dashboard.php">
							<i class="material-icons">dashboard</i>
							<span class="mt-aside pl-3">Dashboard</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-bt" href="addmenuitem.php">
							<i class="material-icons">fastfood</i>
							<span class="mt-aside pl-3">Menu</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-bt" href="vieworders.php">
							<i class="material-icons">book</i>
							<span class="mt-aside pl-3">View Orders</span>
						</a>
					</li>
				</ul>
			</div>

      <?php
      $user_id = $_SESSION['rest_id'];
      $query = "SELECT count(id) FROM fooditems where fooditems.rest_id ='" . $user_id . "'";
      $result = mysqli_query($con, $query)or die($mysqli_error($con));
      $row = mysqli_fetch_array($result);

      $query2 = "SELECT count(cust_orders.id) FROM customers, fooditems, cust_orders where cust_orders.cust_id = customers.id AND cust_orders.food_id = fooditems.id AND fooditems.rest_id ='" . $user_id . "'";
      $result2 = mysqli_query($con, $query2)or die($mysqli_error($con));
      $row2 = mysqli_fetch_array($result2);

      $query3 = "SELECT sum(fooditems.best_price) FROM customers, fooditems, cust_orders where cust_orders.cust_id = customers.id AND cust_orders.food_id = fooditems.id AND fooditems.rest_id ='" . $user_id . "'";
      $result3 = mysqli_query($con, $query3)or die($mysqli_error($con));
      $row3 = mysqli_fetch_array($result3);
      ?>

      <div class="col-lg-10 col-md-9">
				<div class="container-fluid">
					<h4 class="text-secondary">Dashboard</h4>
					<hr>
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-3">
							<div class="card card-prop">
								<div class="card-body">
									<div class="row">
										<div class="col-5 col-md-4">
											<i class="material-icons icon-big text-center bg-b" >book</i>
										</div>
										<div class="col-7 align-self-center h-64">
											<div class="float-right">
												<h4 class="my-font"><?php echo $row['0']; ?></h4>
											</div>
										</div>
									</div>

									<div>
										<span>No of food items in menu</span>
									</div>
								</div>
								<div class="card-footer">
									<a href="addmenuitem.php"><span>View Details</span></a>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 mb-3">
							<div class="card card-prop">
								<div class="card-body">
									<div class="row">
										<div class="col-5 col-md-4">
											<i class="material-icons icon-big text-center bg-o" >book</i>
										</div>
										<div class="col-7 align-self-center h-64">
											<div class="float-right">
												<h4 class="my-font"><?php echo $row2['0']; ?></h4>
											</div>
										</div>
									</div>

									<div>
										<span>No of Orders</span>
									</div>
								</div>
								<div class="card-footer">
									<a href="vieworders.php"><span>View Details</span></a>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 mb-3">
							<div class="card card-prop">
								<div class="card-body">
									<div class="row">
										<div class="col-5 col-md-4">
											<i class="material-icons icon-big text-center bg-g" >book</i>
										</div>
										<div class="col-7 align-self-center h-64">
											<div class="float-right">
												<h4 class="my-font">₹<?php echo $row3['0']; ?></h4>
											</div>
										</div>
									</div>

									<div>
										<span>Total Collection</span>
									</div>
								</div>
								<div class="card-footer">
									<a href="vieworders.php"><span>View Details</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

  <script type="text/javascript" src="js/addmenuitem.js"></script>
</body>
</html>
