<?php require("includes/common.php");
if(isset($_SESSION['email'])){
    if(trim($_SESSION['type']) != "customer"){
      header('location: dashboard.php');
    }
}else{
      header('location: login.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<title>My Orders | FoodShala</title>
	<?php include 'includes/head.php' ?>
  <link rel="stylesheet" type="text/css" href="css/addmenuitem.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

  <div class="container-fluid mt-3">
		<div class="row">
			<div class="col-lg-12 col-md-9" style="padding-bottom: 20px;">
				<div class="container-fluid">
					<h4 class="text-secondary" style="text-align: center;">My Orders Details</h4>
					<hr>

          <div class="table-responsive">
					<table class="table table-striped" id="my-table">
        				<thead>
            				<tr>
                				<th>Restaurant Name</th>
                				<th>Food Name</th>
                				<th>Thumbnail</th>
                				<th>Type</th>
                				<th>Price</th>
            				</tr>
        				</thead>
        				<tbody>
                  <?php
                  $user_id = $_SESSION['user_id'];
                  $query = "SELECT restaurants.name as name, fooditems.name as fdname, fooditems.type as type, fooditems.img as img, fooditems.best_price as best_price FROM restaurants, fooditems, cust_orders where cust_orders.cust_id = '" . $user_id . "' AND cust_orders.food_id = fooditems.id AND fooditems.rest_id = restaurants.id";
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
