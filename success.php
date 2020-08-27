<?php require("includes/common.php");
if(isset($_SESSION['email'])){
    if(trim($_SESSION['type']) == "restaurant"){
      header('location: menu.php');
    }
}else{
      header('location: login.php');
}?>
<!DOCTYPE html>
<html>
<head>
	<title>Home | FoodShala</title>
	<?php include 'includes/head.php' ?>
</head>
<body>
	<?php include 'includes/navbar.php'; ?>

  <?php
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
      $food_id = $_GET['id'];
      $user_id = $_SESSION['user_id'];

      $query = "INSERT INTO cust_orders(cust_id, food_id) VALUES('$user_id', '$food_id')";
      mysqli_query($con, $query) or die(mysqli_error($con));

      // if(isset($_GET['rid']) && is_numeric($_GET['rid'])){
      //   $rest_id = $_GET['rid'];
      //   $query3 = "INSERT INTO rest_orders(cust_id, rest_id) VALUES('$user_id', '$rest_id')";
      //   mysqli_query($con, $query3) or die(mysqli_error($con));
      // }
      header('location: menu.php');
    }
   ?>
	<?php include 'includes/footer.php' ?>
</body>
</html>
