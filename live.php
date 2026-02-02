<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Live Music</title>
     <link rel="icon" type="image/x-icon" href="images/mamad-favicon.png">

    <!--bootswatch-->
    <link rel="stylesheet" href="css/bootswatch.css" media="screen">
    <link rel="stylesheet" href="css/main.css" media="screen">

</head>
<body>
<?php include 'includes/navigation.php';?>

<div class="container">
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Live Music</li>
        </ol>
    </nav>


    <div class="row">
        <div class="col ">
            <iframe src="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FMamaDsCoffee%2Fvideos%2F1403607050457465%2F&show_text=false&width=267&t=0" width="387" height="596" style="overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
        </div>
        <div class="col live-music">
            <h2>Live Music</h2>

            <p>Our Wales location hosts live, local musicians on Thursday evenings from 6-8pm.</p>
            <p>Check our Facebook and Instagram for music dates, announcements, and more!</p>
            <div class="icons">
                <a href="https://www.facebook.com/MamaDsCoffee/" target="_blank"><img src="images/facebook-icon.webp" alt="Facebook icon"></a>
                <a href="https://www.instagram.com/mamadscoffee/?hl=en" target="_blank"><img src="images/instagram-icon.webp" alt="Instagram icon"></a>

            </div>
        </div>

    </div>

</div>
<?php include 'includes/footer.php';?>

<!--Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>