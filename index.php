<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
     <link rel="icon" type="image/x-icon" href="images/mamad-favicon.png">

<!--bootswatch-->
    <link rel="stylesheet" href="css/bootswatch.css" media="screen">

    <link rel="stylesheet" href="css/main.css" media="screen">

</head>
<body>
<?php include 'includes/navigation.php';?>

<div class="banner">
    <div>
        <h1>Classy Coffee &amp; Cozy Destinations</h1>
        <a href="menu.php"><button type="button" class="btn btn-lg" href="menu.php">Menu</button></a>
    </div>

</div>
<div class="container text-center">

    <div class="row">
        <div class="col">
            <img class="img-border" src="images/building.jpg" alt="Outside picture of Mama Ds at Wales">
        </div>
        <div id="story" class="col ">
            <h2><img src="images/leaves_left.webp">The Start of Our Story</h2>
            <p>When Diana Markus became an empty nester after her three children were grown and she had volunteered for every cause imaginable, she decided to take the leap and open the coffee shop she had been dreaming of for years. The first step was finding a location. She wanted a place with character. Everyone told her she had to find a location on a busy street to ensure a steady flow of customers. But Diana hated the strip mall locations and instead found a charming vintage former bank building at 104 W. Main Street in Wales that spoke to her. This was the beginning of Mama D’s Coffee in May of 2012.
            </p>
            <a href="visit.php"><button type="button" class="btn default-btn">Visit Us!</button></a>
        </div>
    </div>

    <div class="row gallery-row">
        <h2>Gallery</h2>
        <div class="col gallery">
            <img src="images/night.jpg" alt="Picture of Mama Ds at night"><img src="images/owner.jpg" alt="Picture of the owner"><img src="images/waffles_bacon.jpg" alt="Waffles with bacon on the side">
        </div>
        <div class="col gallery">
            <img src="images/blueberrywaffles.jpg" alt="Blue berry waffles"><img src="images/dining.jpg" alt="Picture of blue berry waffles"><img src="images/table.jpg" alt="Mama Ds food on table">
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>


<!--Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>