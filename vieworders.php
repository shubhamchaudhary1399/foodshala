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
	<title>View Orders | FoodShala</title>
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
						<a class="nav-link text-bt" href="dashboard.php">
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
						<a class="nav-link text-bt active" href="vieworders.php">
							<i class="material-icons">book</i>
							<span class="mt-aside pl-3">View Orders</span>
						</a>
					</li>
				</ul>
			</div>

			<div class="col-lg-10 col-md-9" style="padding-bottom: 20px;">
				<div class="container-fluid">
					<h4 class="text-secondary">Orders Details</h4>
					<hr>

          <div class="table-responsive">
					<table class="table table-striped" id="my-table">
        				<thead>
            				<tr>
                				<th>Customer Name</th>
                				<th>Food Name</th>
                				<th>Thumbnail</th>
                				<th>Type</th>
                				<th>Price</th>
            				</tr>
        				</thead>
        				<tbody>
                  <?php
                  $user_id = $_SESSION['rest_id'];
                  $query = "SELECT customers.firstname as name, fooditems.name as fdname, fooditems.type as type, fooditems.img as img, fooditems.best_price as best_price FROM customers, fooditems, cust_orders where cust_orders.cust_id = customers.id AND cust_orders.food_id = fooditems.id AND fooditems.rest_id ='" . $user_id . "'";
              		$result = mysqli_query($con, $query)or die($mysqli_error($con));
              		if(mysqli_num_rows($result) >= 1){
                    while($row = mysqli_fetch_array($result)){
                      $picture = "'uploads/".$row['img']."'";
                      echo "<tr><td>". $row["name"] ."</td>";
                      echo "<td>". $row['fdname'] ."</td>";
                      echo "<td><img src=". $picture . "style='height: 50px; width: 50px;'></td>";
                      echo "<td>". $row['type'] ."</td>";
                      echo "<td>". $row['best_price'] ."</td>";
                      echo "</tr>";
                  }
                }
                   ?>

        				</tbody>
    				</table>
            </div>

				</div>
			</div>
		</div>
	</div>


  <script type="text/javascript" src="js/addmenuitem.js"></script>
</body>
</html>
