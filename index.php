<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome PG</title>
    <?php include 'include/header_link.php'; ?>
    <link href="css/home.css" rel="stylesheet" />
</head>
<body>
    <?php include 'include/header.php'; ?>
    <div id="loading">
    </div>
    <div class="banner-container">
        <h2 class="white pb-3"> Happiness per square Foot</h2>
            <form id="search-form" class="search-form" method="GET" action="property_list.php">
             <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search for PGs, Hostels, Flats, etc." aria-label="Search for PGs, Hostels, Flats, etc." aria-describedby="search-button">
                <button type="submit" class="btn  btn-secondary">
                 <i class="fa fa-search"></i>
                </button>                   
             </form>
            </div>

    </div>
    <div class="page-container">
       <h1 class="city-heading">Popular Cities</h1>
       <div class="row">
        <div class="city-card-container col-md">
            <a href="property_list.php?city=Delhi">
                <div class ="city-card rounded-circle">
                  <img src="img\delhi.png"
                  class="city-img" alt="Delhi" />
                </div>
            </a>
        </div>
        <div class="city-card-container col-md">
            <a href="property_list.php?city=Mumbai">
                <div class ="city-card rounded-circle">
                  <img src="img/mumbai.png"
                  class="city-img" alt="Mumbai" />
                </div>
            </a>
        </div>
        <div class="city-card-container col-md">
            <a href="property_list.php?city=Bangaluru">
                <div class ="city-card rounded-circle">
                  <img src="img/bangalore.png"
                  class="city-img" alt="Bangalore" />
                </div>
            </a>
        </div>
        <div class="city-card-container col-md">
            <a href="property_list.php?city=Hyderabad">
                <div class ="city-card rounded-circle">
                  <img src="img/hyderabad.png"
                  class="city-img" alt="Hyderabad" />
                </div>
            </a>
        </div>
    </div>
    </div>
  <?php include 'include/signup_modal.php'; ?>
  <?php include 'include/login_modal.php'; ?>
  <?php include 'include/footer.php'; ?>

  
</body>
</html>