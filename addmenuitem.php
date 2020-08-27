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
	<title>Restaurant Menu | FoodShala</title>
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
						<a class="nav-link text-bt active" href="addmenuitem.php">
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

			<div class="col-lg-10 col-md-9" style="padding-bottom: 20px;">
				<div class="container-fluid">
					<h4 class="text-secondary">Menu Details</h4>
					<hr>

          <div class="table-responsive">
					<table class="table table-striped" id="my-table">
        				<thead>
            				<tr>
                				<th>Name</th>
                				<th>Thumbnail</th>
                				<th>Details</th>
                				<th>Type</th>
                				<th>Price</th>
            				</tr>
        				</thead>
        				<tbody>
                  <?php
                  $user_id = $_SESSION['rest_id'];
                  $query = "SELECT name, img, description, type, best_price FROM fooditems WHERE rest_id='" . $user_id . "'";
                  $result = mysqli_query($con, $query)or die($mysqli_error($con));
                  if(mysqli_num_rows($result) >= 1){
                    while($row = mysqli_fetch_array($result)){
                      $picture = "'uploads/".$row['img']."'";
                      echo "<tr><td>". $row["name"] ."</td>";
                      echo "<td><img src=". $picture . "style='height: 50px; width: 50px;'></td>";
                      echo "<td>". $row['description'] ."</td>";
                      echo "<td>". $row['type'] ."</td>";
                      echo "<td>". $row['best_price'] ."</td>";
                      echo "</tr>";
                    }
                  }
                   ?>

        				</tbody>
    				</table>
          </div>

					<button type="button" class="btn btn-default" id="addfood">Add Item</button>
					<button type="button" class="btn btn-default" style="display: none;" id="back">Back</button>

          <?php if(isset($_GET["m1"]) || isset($_GET["m2"]) || isset($_GET["m3"]) || isset($_GET["i1"])){
            echo "<div class='alert alert-danger'><ul>";
            if(isset($_GET["m1"])){
              echo "<li>".$_GET['m1']."</li>";
            }
            if(isset($_GET["m2"])){
              echo "<li>".$_GET['m2']."</li>";
            }
            if(isset($_GET["i1"])){
              echo "<li>".$_GET['i1']."</li>";
            }
            if(isset($_GET["m3"])){
              echo "<li>".$_GET['m3']."</li>";
            }
            echo "</ul></div>";
          }?>

          <?php if(isset($_GET["m4"])){
            echo "<div class='alert alert-success'><p>".$_GET['m4']."</p></div>";
          }?>

					<form action="addmenuitem_script.php" method="post" id="formnew" style="display: none;" name="food" enctype="multipart/form-data">
						<div class="row">
							<div class="col-lg-8">
								<div class="card card-room">
									<div class="card-header">
										<h5 class="card-title">Food Item Details</h5>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="Name">Food Name</label>
													<input type="text" name="name" id="Name" value="" class="form-control">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="Description">Food Description</label>
													<textarea name="description" id="Description"  class="form-control" rows="5" cols="40" maxlength="1000"><?php echo isset($_POST["description"]) ? $_POST["description"] : ''; ?></textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="Type">Type</label>
													<select id="Type" name="type" value="{{ old('occupancy') }} "class="form-control">
														<option>Veg</option>
														<option>Non Veg</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card card-room">
									<div class="card-header">
										<div class="card-title">
											<h4>Images</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-12">
												<div class="row form-group">
													<div class="col">
														<span class="text-muted mt-icon">1.</span>
														<i class="material-icons">insert_photo</i>
														<input type="file" name="img1" class="form-control" onchange="loadImg1(event)">
														<div class="col">
															<img class="room-image" src="" id="output1">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="card card-room">
									<div class="card-header">
										<div class="card-title">
											<h4>Pricing</h4>
										</div>
									</div>
									<div class="card-body">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Best Price</label>
													<input type="number" name="best_price" class="form-control" value="<?php echo isset($_POST["best_price"]) ? $_POST["best_price"] : ''; ?>">

												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<input type="submit" name="" class="btn menu-link float-right">

							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

  <script type="text/javascript" src="js/addmenuitem.js"></script>
</body>
</html>
