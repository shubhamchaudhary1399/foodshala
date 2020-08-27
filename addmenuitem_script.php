<?php require("includes/common.php");

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$desc = $_POST['description'];
$desc = mysqli_real_escape_string($con, $desc);

$type = $_POST['type'];
$type = mysqli_real_escape_string($con, $type);

$target_dir = "uploads/";
$target_file = basename($_FILES["img1"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$check = getimagesize($_FILES["img1"]["tmp_name"]);

$price = $_POST['best_price'];
$price = mysqli_real_escape_string($con, $price);

if(!isset($name) || trim($name) == '')
{
  $m = "<span class='red'>Food name field cannot be empty</br></span>";
  header('location: addmenuitem.php?m1=' . $m);
}
else if (!isset($desc) || trim($desc) == '') {
  $m = "<span class='red'>Description field can not be empty.</br></span>";
  header('location: addmenuitem.php?m2=' . $m);
}
else if (!isset($target_file) || trim($target_file) == '') {
  $m = "<span class='red'>Image is not selected..</br></span>";
  header('location: addmenuitem.php?i1=' . $m);
}
else if($check == false){
  $uploadOk = 0;
  $m = "<span class='red'>Please upload an image only.</br></span>";
  header('location: addmenuitem.php?i1=' . $m);
}
else if($_FILES["img1"]["size"] > 500000){
    $uploadOk = 0;
    $m = "<span class='red'>Sorry image file is too large.</br></span>";
    header('location: addmenuitem.php?i1=' . $m);
}
else if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
    $uploadOk = 0;
    $m = "<span class='red'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</br></span>";
    header('location: addmenuitem.php?i1=' . $m);
}
else if ($uploadOk == 0) {
    $uploadOk = 0;
    $m = "<span class='red'>Image File is not uploaded.</br></span>";
    header('location: addmenuitem.php?i1=' . $m);
}
else if (!isset($price) || trim($price) == '') {
  $m = "<span class='red'>Best Price field cannot be empty</br></span>";
  header('location: addmenuitem.php?m3=' . $m);
}
else{
  // $img = date('His') . '-' . $target_file;
  $img = $target_file;
  $uploadPic = $target_dir.''.$img;
  move_uploaded_file($_FILES["img1"]["tmp_name"], $uploadPic) ;
  $query = "INSERT INTO fooditems(rest_id, name, description, type, img, best_price)VALUES('" . $_SESSION['rest_id'] . "','" . $name . "','" . $desc . "','" . $type . "','" . $img . "','" . $price . "')";
  mysqli_query($con, $query) or die(mysqli_error($con));
  $user_id = mysqli_insert_id($con);
  $m = "<span class='red'>Food item has been successfully added.</br></span>";
  header('location: addmenuitem.php?m4=' . $m);
}
?>
