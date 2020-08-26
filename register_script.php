<?php require("includes/common.php");

  $firstname = $_POST['firstname'];
  $firstname = mysqli_real_escape_string($con, $firstname);

  $lastname = $_POST['lastname'];
  $lastname = mysqli_real_escape_string($con, $lastname);

  $contact = $_POST['Phonenumber'];
  $contact = mysqli_real_escape_string($con, $contact);

  $email = $_POST['Email'];
  $email = mysqli_real_escape_string($con, $email);

  $preference = $_POST['preference'];
  $preference = mysqli_real_escape_string($con, $preference);
  echo $preference;

  $password = $_POST['Password'];
  $password = mysqli_real_escape_string($con, $password);


  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[6789][0-9]{9}$/";
  $regex_pass = "/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/";

  $query = "SELECT * FROM customers WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);

  if(!isset($firstname) || trim($firstname) == '')
  {
    $m = "<span class='red'>First Name field cannot be empty</br></span>";
    header('location: register.php?m1=' . $m);
  }
  else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</br></span>";
    header('location: register.php?m2=' . $m);
  }
  else if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</br></span>";
    header('location: register.php?m3=' . $m);
  }
  else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</br></span>";
    header('location: register.php?m3=' . $m);
  }
  else if (!preg_match($regex_pass, $password)) {
    $m = "<span class='red'>Password should be between 8-20 characters.</br></span><span class='red'>Password should follow the rule.</br></span><span class='red'>One uppercase, one lowercase, one special symbol.</br></span>";
    header('location: register.php?m4=' . $m);
  }
  else {
    $password = MD5($password);
    $query = "INSERT INTO customers(firstname, lastname, contact, email, preference, password)VALUES('" . $firstname . "','" . $lastname . "','" . $contact . "','" . $email . "','" . $preference . "','" . $password . "')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);

    $_SESSION['firstname'] = $firstname;
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    $_SESSION['type'] = 'customer';
    header('location: index.php');
  }
?>
