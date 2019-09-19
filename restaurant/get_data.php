<?php

require_once ('db.php');

if(isset($_POST['submit'])) {

    $name = $_REQUEST['name'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $msg = $_REQUEST['msg'];

    $q = "INSERT INTO contact_form (name, mobile, email, msg) VALUES ('$name', '$mobile', '$email', '$msg')";

    $e = mysqli_query($con, $q);

    if($e) {
        echo "<script>alert('your details has been submitted')</script>";
        header("Location: index.php");
    }
}



?>