<!DOCTYPE>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/package.css">
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.comment{
    margin:auto;
    width:700px;
    height:700px;
}
h1{
  color:Blue;
  text-align:center;
}
input.bt1{
  border-radius:30px;
  margin-top:10px;
  width:110px;
  color:blue;
  height:30px;
  background:whitesmoke;
  border:whitesmoke;
}
.main1{
  margin-left:-300px;
  margin-bottom:auto;
width:700px;
min-height: 90px;
background-color:white;
overflow:auto;
 }
 label.ll{
  font-size:30px;
  color:khaki;
 }
 textarea{
  color:blue;
  border:2px solid blue;
  border-radius:10px;
  background:whitesmoke;
}
 form{
   text-align:center;
 }
 input.x1{
    border:2px solid blue;
    width:200px;
    height:30px;
    border-radius:20px;
    background:whitesmoke;
 }
  .com{
margin-bottom:10px;
padding-top:10px;
width:600px;
height: 40px;
float:left;
background-color:white;
border:1px solid white;
  }
  b{
    color:Blue;
  }
.pic{
  padding-top:10px;
  width:60px;
  height:50px;
  float:left;
}
.bg-img{
  background-image: url("images/goa.jpg");
  height: 55%;
  width: 100%;
  position: relative;
  margin-top: 0;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  margin-bottom:60px;
}
.day1{
    width:100%;
    height:40px;
}
.leftname{
    width:450px;
    float:left;
}
h3{
    color:black;
    text-align:center;
}
h2{
    color:black;
    text-align:center;
}
hr{
    background-color:blue;
    height:2px;
}
.desc{
    width:900px;
    float:left;
    padding-left:40px;
    border-left:2px solid red;
    margin-bottom:40px;
}
.dropbtn {
  background-color: #70b8f8;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown {
  position: relative;
  display: inline-block;
  height:190px;
  width:100px;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 140px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}
/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}
/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: whitesmoke;
color:black;}
.cart{
  margin-left: 600px;
  height: 100px;
  width: 300px;
  margin-top: 5px;
}
</style>
<script>
function cart()
{
  alert("Package has been added to your cart!");
  window.location.href = "cart2.html";
}
</script>
</head>
<body>
  <!-- Navbar -->
  <header id="header">
        <div class= "header1">
            <label class="label1">Travel buddy</label>
        </div>
            <div class = "header2">
            <ul>
            <li><a href="index.html" active>Home Page</a></li>
                <li><a href="about.html">About Us</a></li>
                <div class="dropdown">
                  <button class="dropbtn">PACKAGES</button>
                  <div class="dropdown-content">
                  <a href="goa.php">Goa</a>
                  <a href="ooty.php">Ooty</a>
                  <a href="Manali.php">Manali</a>
                  <a href="darjeeling.php">Darjeeling</a>
                  </div>
                </div>
                <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </div>
    </header>
<div class="bg-img">
</div>
<div class = "day1">
    <div class = "leftname">
    <h1>Goa<h1>
    <hr width = "90px">
    <h3>The ultimate tourist destination</h3>
    </div>
    <div class = "desc">
    <p>Goa is a land that redefines holidays, with its exquisite mix of sun, surf, and beaches. Goa has become the ultimate tourist destination. Goa is a tiny emeralds land with its natural scenic beauty, attractive beaches and temples, famous for its architecture, feast and festivals and hospitable people with a rich culture. So get swept away in Goa by the spectacular sunrises and sunsets and rejuvenate yourself.Goa is India's smallest state in terms of area and the fourth smallest in terms of population.Goa which is  Located on the west coast of India in the region known as the Konkan, it is bounded by the state of Maharashtra to the north, and by Karnataka to the east and south, while the Arabian Sea forms Goas western coast.</p>
    </div>
</div>

<div class="bottom">

<div class="bottom-images">
<img src="images/ship.jpg" class="icon">
<img src="images/train.jpg" class="icon">
<img src="images/flight.jpg" class="icon">
<img src="images/car.jpg" class="icon">
</div>
</div>

<div class = "day1">
    <div class = "leftname">
    <h2>Day 01:<h2>
    <hr width = "90px">
    </div>
    <div class = "desc">
    <h2 style="color:blue; text-align:left;">Arrive at Goa:</h2>
    <p>
    Arrive at Goa Airport and get transferred to the hotel by sharing vehicle. On arrival check in to your hotel, followed by a welcome drink. Rest of the day is at leisure. Overnight stay at the hotel.</p>
   </div>
</div>

<div class = "day1">
    <div class = "leftname">
    <h2>Day 02:<h2>
    <hr width = "90px">
    </div>
    <div class = "desc">
    <h2 style="color:blue; text-align:left;">Visit North Goa:</h2>
    <p>
    After breakfast, the day is at leisure for own activities. You can plan your schedule for sightseeing for places of North Goa Beaches (Calangute / Baga etc) or can do shopping in Panjim. Overnight stay at the hotel.</p>
</div>
</div>
<div class = "day1">
    <div class = "leftname">
    <h2>Day 03:<h2>
    <hr width = "90px">
    </div>
    <div class = "desc">
    <h2 style="color:blue; text-align:left;">Dudhsagar waterfalls:</h2>
    <p>
    After breakfast, the day is at leisure for own activities. You may opt for optional tours such as an excursion to Dudhsagar waterfalls (weather permitting, will not happen during monsoon), South Goa sightseeing, etc. Overnight stay at the hotel.</p>
    </div>
</div>
<div class = "day1">
    <div class = "leftname">
    <h2>Day 04:<h2>
    <hr width = "90px">
    </div>
    <div class = "desc">
    <h2 style="color:blue; text-align:left;">Transfer to Airport/ Railway station:</h2>
    <p>After breakfast, transfer to Goa airport for your onward journey. Tour concludes.</p>
      </div>
</div>
<div class="options">
<button value="Add To Cart" class="cart" onclick="cart()"><img src ="images/shopping.jpg" height=45px width=45px>  Add To Cart</button>&nbsp;
</div>
<div class = "comment">
<h1>We would love to hear from you!</h1>
<form action="comment_goa" method="POST">
    <label class="ll">Name</label><br>
    <input class = "x1" type="text" name="name"><br><br>
    <label class = "ll">Add a comment</label><br>
    <textarea name="comment" rows="10" cols="100" placeholder="Join the discussion"></textarea></br>
    <input class = "bt1" type="Submit" name=submit>
  </form>
  <h1>Comment Section</h1>
  <?php
$conn = mysqli_connect("localhost","root","","iwp");
$f = mysqli_query($conn,"select * from comments_goa");
echo "<hr>";
while($row = mysqli_fetch_assoc($f))
{
echo "<div class = main1>";
  echo "<div class = pic>";
  echo "<img src = userimg.jpg height=50px width=50px;>";
  echo "</div>";
  echo "<div class = com>";
      echo "Sent by<b> ".$row['name']."</b><br><br>".$row['comment'];
echo "</div>";
  echo "</div>";
  echo "<br>";
}
?>
</div>
</body>
</html>