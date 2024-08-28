<?php
include("server.php");
$query = "SELECT * FROM tbl_offers";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{}

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <link rel="stylesheet" href="style.css" type= "text/css">
    <!-- linked to the stylesheet style.css-->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body>
<header> 
<div class="logo"><img src="uclan.png" alt="UCLan logo"></div>
<!-- uclan logo goes to the header top left corner -->
<nav>
    <ul class="myNav"> <!-- navigation top with main pages -->
        <ul class="myNav">
            <li class="navList"><a> Student Shop</a></li>
            <li class="navList"><a href="Main page.php"> Home</a></li>
            <li class="navList"><a href="products.php" > Products</a> </li>
            <li class="navList"><a href="cart.php" > Cart</a> </li> 
            <li class="navList"><a href="form-1.php" > Login/Register</a> </li> 
            
        </ul>
    </nav> 
    </header>
    <h1>Live Offers</h1>

    <div class="grid-container">

<div><h2>Christmas Clearance</h2>
  <p>Up to 50% off on selected items</p></div>

<div> <h2>T-Shirt Sale</h2>
  <p>Buy one, get one free on all T-shirts</p></div>
  
<div>  <h2>Graduation Promo</h2>
  <p>Get 20% off on graduation merchandise</p></div>  

</div>

        
    <h1> 
        Where Opportunity creates Success
    </h1>
    <p>Every student at the University of Central Lancashire is automatically a member of the Student's Union</p>
    <p>We are here to make it better for students- inspiring you to succed and achieve your goals.</p>
    <p>Everthing you need to know about UCLan Student's Union. Your membership starts here</p>

    <h2>Together</h2>
    <video width="700" height="350" controls> <!-- mp4 video -->
        <source src="video/video.mp4" type="video/mp4">
      Your browser does not support the video tag.
      </video>

    <h2>Join our global community</h2>
    <iframe width="700" height="350"
src="https://youtube.com/embed/EI_lco-qdw8"> <!-- youtube embeded video -->
</iframe>

<footer> <!-- footer goes at the bottom of the page -->
    <div class="links">
        <h3>Useful Links</h3>
        <ul>
            <li><a href="https://www.uclansu.co.uk/organisation/6013/">Students' Union</a></li>
            
        </ul>
    </div>
    
    <div class="contact">
        <h3>Contact Us</h3>
        <p>Email: suinformation@uclan.ac.uk</p>
        <p>Phone: 01772 89 3000</p>
    </div>
    
    <div class="location">
        <h3>Our Location</h3>
        <li>
            <span></span>
            <span>University of Central Lancashire Students' Union,<br>
                Fylde Road, Preston. PR1 7BY<br><br>Registered in England
                <br>Company Number: 07623917<br><br>Registered Charity Number: 1142616
        </li>
    </div>
</footer>
</body>





  
    
</html>    