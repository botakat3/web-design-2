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

    <div class="container my-4">
        <h2 class="mb-3">Gallery</h2>

        <div class="row g-3">
            <!-- Column 1 -->
            <div class="col-12 col-md-4">
                <img class="img-fluid rounded mb-3" src="images/night.jpg" alt="Mama Ds at night">
                <img class="img-fluid rounded mb-3" src="images/blueberrywaffles.jpg" alt="Blueberry waffles">
            </div>

            <!-- Column 2 -->
            <div class="col-12 col-md-4">
                <img class="img-fluid rounded mb-3" src="images/owner.jpg" alt="Owner">
                <img class="img-fluid rounded mb-3" src="images/dining.jpg" alt="Dining area">
                <img class="img-fluid rounded mb-3" src="images/table.jpg" alt="Food on table">
            </div>

            <!-- Column 3 -->
            <div class="col-12 col-md-4">
                <img class="img-fluid rounded mb-3" src="images/waffles_bacon.jpg" alt="Waffles with bacon">
            </div>
        </div>
    </div>
</div>
<?php include 'includes/footer.php';?>


<!--Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>