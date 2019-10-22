<?php
    $con = mysqli_connect("localhost","root","","iwp");
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if(isset($_POST['signup_submit'])) 
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];
        $query = "insert into details (username,email,mobilenum,password) values('$username','$email','$mobile','$password')";
        $res  = mysqli_query($con,$query);
    
    }     
?>