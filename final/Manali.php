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
  background-image: url("images/manali.jpg");
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
  window.location.href = "cart4.html";
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
    <h1>Manali<h1>
    <hr width = "90px">
    <h3>The best Hill station</h3>
    </div>
    <div class = "desc">
    <p>A gift of the Himalayas to the world, Manali is a beautiful township nestled in the picturesque Beas River valley. It is a rustic enclave known for its cool climate and snow-capped mountains, offering respite to tourists escaping scorching heat of the plains. The tourism industry in Manali started booming only in the early 20th century, mainly because of its natural bounties and salubrious climate.
Once a sleepy village, the modern town cocooned in its rich cultural heritage and age-old traditions is now one of the most popular destinations of India. The place is a classic blend of peace and tranquility which makes it a haven for nature lovers and adventure enthusiasts, who want to get off the main tourist trails and experience nature up close.</p>

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
    <h2 style="color:blue; text-align:left;">Arrival At Manali:</h2>
    <p>
    Pick up on arrival at Manali Bus Stand . check in hotel .. after some rest head for local sight seeing in Manali in Individual cab . Visit Hidimba Devi Temple, Vashist Kund and other major sightseeing points in Manali over night at hotel</p>
    </div>
</div>

<div class = "day1">
    <div class = "leftname">
    <h2>Day 02:<h2>
    <hr width = "90px">
    </div>
    <div class = "desc">
    <h2 style="color:blue; text-align:left;">Manikaran Kasol</h2>
    <p>
    Full day excursion to Manikaran. Enjoy the scenic beauty, mysterious boiling water streams in the rivers, temples, enchanting Parvati Valley. Back to Manali in the evening. Take a stroll at the Mall road Manali and Manali market, Hadimba Temple.</p>
</div>
</div>
<div class = "day1">
    <div class = "leftname">
    <h2>Day 03:<h2>
    <hr width = "90px">
    </div>
    <div class = "desc">
    <h2 style="color:blue; text-align:left;">Solang Snow Point</h2>
    <p>
    Solang visit. Entire day trip where you can enjoy beautiful landscapes and visit scenic Solang Valley/Snow Point. Back to Manali and overnight stay and dinner at hotel.</p>

    </div>
</div>
<div class = "day1">
    <div class = "leftname">
    <h2>Day 04:<h2>
    <hr width = "90px">
    </div>
    <div class = "desc">
    <h2 style="color:blue; text-align:left;">Manali</h2>
    <p>Local Manali market and later drop at Manali bus stand. Tour ends and you depart with loads of memories to be cherished for long.</p>
    </div>
</div>
<div class="options">
<button value="Add To Cart" class="cart" onclick="cart()"><img src ="images/shopping.jpg" height=45px width=45px>  Add To Cart</button>&nbsp;
</div>
<div class = "comment">
<h1>We would love to hear from you!</h1>
<form action="comment_manali" method="POST">
    <label class="ll">Name</label><br>
    <input class = "x1" type="text" name="name"><br><br>
    <label class = "ll">Add a comment</label><br>
    <textarea name="comment" rows="10" cols="100" placeholder="Join the discussion"></textarea></br>
    <input class = "bt1" type="Submit" name=submit>
  </form>
  <h1>Comment Section</h1>
  <?php
$conn = mysqli_connect("localhost","root","","iwp");
$f = mysqli_query($conn,"select * from comments_manali");
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