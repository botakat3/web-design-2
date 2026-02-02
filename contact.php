<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
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
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col">
            <img class="img-border" src="images/neonlight.jpg" alt="Hand holding a mug that says Mama Ds">
        </div>
        <div class="col contact">
            <h2>Contact</h2>
            <p>Like what you see? Get in touch to learn more.</p>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">First Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Last Name">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput3" class="form-label">Email *</label>
                <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Email">
            </div>
            <div>
                <label for="text">Message</label>
                <textarea id="text" class="form-control" aria-label="With textarea"></textarea>
            </div>
            <div>
                <button type="submit" class="btn default-btn">Send</button>
            </div>

        </div>

    </div>

</div>
<?php include 'includes/footer.php';?>

<!--Bootstrap JavaScript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script></body>
</html>