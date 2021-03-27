<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $con = mysqli_connect("localhost","root","","recipe") or die("Error");

    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    $result = mysqli_query($con,$query) or die("Failed to query database");

    $row = mysqli_fetch_array($result);

    if ($row['username'] == $username && $row['password'] == $password) {
        $message="Login as Administrator is successful!!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location:CRUD.html");
    }else {
        $message="Login as Administrator is Failed!!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location: login.php");
    }
?>