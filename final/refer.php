<?php
   $conn = mysqli_connect("localhost","root","","iwp");
   $email = $_POST['em'];
   $que = "INSERT INTO refer VALUES('$email')";
   mysqli_query($conn,$que);
   header("location:index.html");

?>