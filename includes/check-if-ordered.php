<?php
function checkOrders($item_id) {
    $user_id = $_SESSION['user_id'];
    require("common.php");

    $query = "SELECT * FROM cust_orders WHERE food_id='$item_id' AND cust_id ='$user_id'";
    $result = mysqli_query($con, $query) or die(mysqli_error($con));

    if (mysqli_num_rows($result) >= 1) {
        return 1;
    } else {
        return 0;
    }
}
?>
