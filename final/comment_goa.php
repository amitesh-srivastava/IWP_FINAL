<?php
   $conn = mysqli_connect("localhost","root","","iwp");
   $name = $_POST['name'];
   $comment = $_POST['comment'];
   $que = "INSERT INTO comments_goa(name,comment) VALUES('$name','$comment')";
   mysqli_query($conn,$que);
   header("location:goa.php");

?>