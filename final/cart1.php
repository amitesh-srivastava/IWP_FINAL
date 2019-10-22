<?php
if(isset($_POST['checkout'])) {
  $conn = mysqli_connect("localhost","root","","iwp");
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 $sql = "Select funds from balance where mobile_num=0";
 $result = mysqli_query($conn,$sql);
 $res = mysqli_fetch_assoc($result);
 $fund = $res['funds'];
 $curr = $_POST["tot_amt"];
 if($fund<$curr)
 echo"<script>alert('Sorry, You have insufficient funds!');window.location.href='index.html';</script>";
 else {
   echo"
   <script>
   if(confirm('Are you sure you want to buy this package?'))
   {
    alert('Congratulations, your booking invoice will be sent to you shortly! Remaining funds:".($fund-$curr)."');window.location.href='index.html';}</script>";
    $result1 = mysqli_query($conn,"Update balance set funds = $fund-$curr where mobile_num=0");
 }
}
?>
