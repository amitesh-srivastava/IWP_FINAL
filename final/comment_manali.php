<?php
   $conn = mysqli_connect("localhost","root","","iwp");
   $name = $_POST['name'];
   $comment = $_POST['comment'];
   $que = "INSERT INTO comments_manali(name,comment) VALUES('$name','$comment')";
   mysqli_query($conn,$que);
   header("location:Manali.php");

?>