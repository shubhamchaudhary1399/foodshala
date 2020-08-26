<?php require("includes/common.php");

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$desc = $_POST['description'];
$desc = mysqli_real_escape_string($con, $desc);

$type = $_POST['type'];
$type = mysqli_real_escape_string($con, $type);

$price = $_POST['best_price'];
$price = mysqli_real_escape_string($con, $price);

$img = 'dummy';

if(!isset($name) || trim($name) == '')
{
  $m = "<span class='red'>Food name field cannot be empty</br></span>";
  header('location: addmenuitem.php?m1=' . $m);
}
else if (!isset($desc) || trim($desc) == '') {
  $m = "<span class='red'>Description field can not be empty.</br></span>";
  header('location: addmenuitem.php?m2=' . $m);
}
else if (!isset($price) || trim($price) == '') {
  $m = "<span class='red'>Best Price field cannot be empty</br></span>";
  header('location: addmenuitem.php?m3=' . $m);
}
else{
  $query = "INSERT INTO fooditems(rest_id, rest_name, name, description, type, img, best_price)VALUES('" . $_SESSION['rest_id'] . "','" . $_SESSION['name'] . "','" . $name . "','" . $desc . "','" . $type . "','" . $img . "','" . $price . "')";
  mysqli_query($con, $query) or die(mysqli_error($con));
  $user_id = mysqli_insert_id($con);
  header('location: index.php');
}
?>
