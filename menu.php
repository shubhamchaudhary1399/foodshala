<?php require("includes/common.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Food Menu | FoodShala</title>
	<?php include 'includes/head.php' ?>
	<link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>
	<?php include 'includes/check-if-ordered.php' ?>

  <div class="container-fluid my-font">
    <div class="jumbotron" style="background: #f2f2f2;">
      <h2 style="text-align: center;">Welcome to the FoodShala. Order your favourite food now!</h2>
      <p style="text-align: center;">Order every delicious food that you want to eat from here.</p>
    </div>

		<?php
		$query = "SELECT fooditems.id as id, fooditems.name as name, fooditems.type as type, fooditems.img as img, fooditems.best_price as best_price, restaurants.id as rest_id, restaurants.name as rest_name FROM fooditems,restaurants where fooditems.rest_id = restaurants.id";
		$result = mysqli_query($con, $query)or die($mysqli_error($con));
		if(mysqli_num_rows($result) >= 1){
			$count = 1;
			while($row = mysqli_fetch_array($result)){
				if($count == 1){
					echo "<div class=\"row justify-content-center py-4\">";
				}
				$picture = "'uploads/".$row['img']."'";
				echo "<div class=\"col-lg-3 col-md-6 cd-column\"><div class=\"card my-cd\" style=\"width: 18rem;\">";
				echo "<img class=\"card-img-top\" src=". $picture. " alt=\"Card image cap\">";
				echo "<div class=\"card-body\">";
				echo "<h5 class=\"card-title\">". $row['name'] ." (". $row['type'] .")</h5>";
				echo "<p class=\"card-text\">". $row['rest_name'] ."</p></div>";
				echo "<ul class=\"list-group list-group-flush\"><li class=\"list-group-item\">₹". $row['best_price'] ."</li></ul>";
				if(!isset($_SESSION['email'])){
					echo "<a href=\"login.php\" class=\"btn btn-default food-btn\" >Order Now</a>";
				}
				else if($_SESSION['type'] == 'restaurant'){
					echo "<a href=\"#\" class=\"btn btn-default food-btn disabled\" >Order Now</a>";
				}
				else if(checkOrders($row['id'])){
					echo "<a href=\"#\" class=\"btn btn-default btn-success disabled\" >Ordered</a>";
				}
				else{
					$val = 'success.php?id='.$row['id'].'&rid='.$row['rest_id'];
					echo "<a href=". $val ." class=\"btn btn-default food-btn\" >Order Now</a>";
				}
				echo "</div></div>";
				if($count == 4){
					echo "</div>";
					$count = 1;
				}
				else{
					$count += 1;
				}
			}
		}
		?>


  </div>
</div>
	<?php include 'includes/footer.php' ?>
</body>
</html>
