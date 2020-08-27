
<!DOCTYPE html>
<html>
<head>
	<title>Home | FoodShala</title>
	<?php include 'includes/head.php' ?>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" style="height: 60vh;" src="img/carousel1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 60vh;" src="img/carousel2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" style="height: 60vh;" src="img/carousel3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container py-4">
    <div class="row justify-content-center">
        <div>
            <h2 class="section-title" style="text-align: center;">We have food for everyone</h2>
            <label class="section-subtitle">FoodShala offers every famous food of each state, Order Now!</label>
        </div>
    </div>
    <div class="row justify-content-center py-4">
        <!-- <h2>Rooms for everyone</h2><br> -->
        <div class="col-lg-4 col-md-6 cd-column">
            <div class="card my-cd" style="width: 18rem;">
                <img class="card-img-top" src="img/makka.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Punjabi Tadka</h5>
                    <p class="card-text">The perfect place to get makka ki roti and sarso ka saag.</p>
                    <a href="menu.php" class="btn btn-default my-btn" target="_blank">Check Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 cd-column">
            <div class="card my-cd" style="width: 18rem;">
                <img class="card-img-top" src="img/chicken.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">UP Biryani</h5>
                    <p class="card-text">The perfect place to get litti and favourite chicken biryani.</p>
                    <a href="menu.php" class="btn btn-default my-btn" target="_blank">Check Now</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 cd-column">
            <div class="card my-cd" style="width: 18rem;">
                <img class="card-img-top" src="img/dalbati.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Rajasthani Dal Baati</h5>
                    <p class="card-text">The perfect place to get dal baati and onion kachori.</p>
                    <a href="menu.php" class="btn btn-default my-btn" target="_blank">Check Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="food-features">
	<div class="features">
		<div class="indiv-feature">
			<img src="img/svg/book.svg">
			<div class="feature-content">
				<h2 class="heading">No Minimum Order</h2>
				<p class="info" style="margin: 0;text-align: justify;">
											Order in for yourself or for the group, with no restrictions on order value
									</p>
			</div>
		</div>
		<div class="indiv-feature">
			<img src="img/svg/room.svg">
			<div class="feature-content">
				<h2 class="heading">Live Order Tracking</h2>
				<p class="info" style="margin: 0;text-align: justify;">
										 Know where your order is at all times, from the restaurant to your doorstep
									</p>
			</div>
		</div>
		<div class="indiv-feature">
			<img src="img/svg/run.svg">
			<div class="feature-content">
				<h2 class="heading">Lighting-Fast Delivery</h2>
				<p class="info" style="margin: 0;text-align: justify;">
											Experience FoodShala's superfast delivery for food delivered fresh & on time
									</p>
			</div>
		</div>
	</div>
</div>

	<?php include 'includes/footer.php' ?>
</body>
</html>
