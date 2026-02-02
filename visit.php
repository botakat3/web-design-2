<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Visit Us!</title>
  <link rel="icon" type="image/x-icon" href="images/mamad-favicon.png">



  <link rel="stylesheet" href="css/bootswatch.css">
  <link rel="stylesheet" href="css/main.css">


</head>


<body>
<?php include "includes/navigation.php"; ?>



<div class="container">
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Visit Us</li>
        </ol>
    </nav>


  <div class="row location">
    <div class="col">
      <h2>Visit Us!</h2>

    </div>

    <div id="wales" class="col location">
      <div>
        <figure>
          <img  src="images/wales_location.webp" alt="Water coloring painting of the Wales building">
          <figcation>Artwork by Callie Henderson</figcation>

        </figure>

      </div>

      <div class="location-text">
        <h2>Wales, WI</h2>
        <a href="https://maps.app.goo.gl/RrNMhp7FF8wUMgNk6" target="_blank"><h3>104 W Main Street</h3></a>
        <ul>
          <li>Mon: 6 AM - 6 PM</li>
          <li>Tue: 6 AM - 6 PM</li>
          <li>Wed: 6 AM - 6 PM</li>
          <li>Thu: 6 AM - 8 PM</li>
          <li>Fri: 6 AM - 6 PM</li>
          <li>Sat: 7 AM - 6 PM</li>
          <li>Sun: 7 AM - 4 PM</li>
        </ul>
      </div>
    </div>
    <div id="waukesha" class="col location">
      <div>
        <figure>
          <img src="images/waukesha_location.webp" alt="Watercolor paiting of the Waukesha building">
          <figcaption>
            Artwork by Callie Henderson
          </figcaption>
        </figure>

      </div>
      <div class="location-text">
        <h2>Waukesha, WI</h2>
        <a href="https://maps.app.goo.gl/ZeRVxzfYrw2XCLJe6" target="_blank"><h3>928 N Hartwell Ave</h3></a>
        <ul>
          <li>Mon - Fri: 6 AM - 6 PM</li>
          <li>Sat - Sun: 7 AM - 4 PM</li>
        </ul>
      </div>

      </div>
    </div>
  </div>





<?php include "includes/footer.php"; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>