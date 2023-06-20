<?php
include_once('dbconnection.php');

$name = $_SESSION['Pass'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script defer src="script.js"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   
 
<div class="home">
    <div class="nav-bar">
        <div class="left-side">
        </div>

        <div class="right-side">

            <ul id="nav-links">
                <li ><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                <li><a href="fertilizers.php"><i class="fa fa-leaf" aria-hidden="true"></i>Crops</a>
                <li><a href="rent_machine.php"><i class="fa fa-bus" aria-hidden="true"></i>Rent machinery</a></li>
                <li><a href="cultivation.php"><i class="fa fa-asl-interpreting"></i>Cultivation &amp; Protection</a></li>
                <li><a href="contactUs.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a></li>
            </ul>

            
      
        </div>
     
       
        <a href="logout.php"><button id="login"><i class="fa fa-fw fa-user"></i>Logout</button></a><br>
     

        
        <button class="right-bar">
            <span class="bar"></span>
        </button>
       
    </div>

    
    

    <div class="mobile_nav">
        
        <ul id="mobile_nav_links">
            <li ><a href="index.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                    <li><a href="fertilizers.php"><i class="fa fa-leaf" aria-hidden="true"></i>Crops</a>
                    <li><a href="rent_machine.php"><i class="fa fa-bus" aria-hidden="true"></i>Rent machinery</a></li>
                    <li><a href="cultivation.php"><i class="fa fa-asl-interpreting"></i>Cultivation &amp; Protection</a></li>
                    <li><a href="contactUs.php"><i class="fa fa-fw fa-envelope"></i>Contact Us</a></li>
        </ul>
        <a href="logout.php"><button id="mobile_login"><i class="fa fa-fw fa-user"></i>Logout</button></a>
        <div class="mobile_footer">
           <p>Copyright&copy; 2022 AgZone. All Rights Reserved</p>
        </div>
    </div>

    <div class="hero-image">
        <video autoplay muted loop>
            <source src="Video/Banner Video.mp4" type="video/mp4">
        </video>
       
    </div><div class="hero-image">
        <video autoplay muted loop>
            <source src="Video/Banner Video.mp4" type="video/mp4">
        </video>
       
    </div>






   

    <div class="search_bar">
        <div class="search_img">
            <img src="Images/Search_img.png" alt="search_image">
        </div>
        
        <input type="text" placeholder="Quick Search" id="quick_search">
    </div>
  

</div>










<div class="sub-home">
    <div class="looking-for">
        
        <div class="card">
            <div class="img">
                <img src="Images/machine-1.jpeg">
            </div>
            <div class="description">
                <p>looking to buy a machine? <span>&nbsp;&rarr;</span></p>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="Images/machine-2.jpeg">
            </div>
            
            <div class="description">
                <p>looking to rent a machine?<span>&nbsp; &rarr;</span></p>
            </div>
        </div>
    
        <div class="card">
            <div class="img">
                <img src="Images/machine-3.jpeg">
            </div>
            <div class="description">
                <p>looking to sell a machine?<span id="arrow">&nbsp; &rarr;</span></p>
            </div>
        </div>
        
    
        <div class="card">
            <div class="img">
                <img src="Images/crops-image.jpeg">
            </div>
            <div class="description">
                <p>looking for information?<span>&nbsp; &rarr;</span></p>
            </div>
            
        </div>
        
        
    </div>
</div>


    <div class="sub-hero-image" id="sub-hero-image">

    </div>


   
   