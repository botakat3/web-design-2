<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Apply</title>
     <link rel="icon" type="image/x-icon" href="images/mamad-favicon.png">

  <!--bootswatch-->
  <link rel="stylesheet" href="css/bootswatch.css" media="screen">
  <link rel="stylesheet" href="css/main.css" media="screen">

</head>
<body>
<?php include "includes/navigation.php"; ?>


<div class="container">
<nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Apply</li>
        </ol>
    </nav>
  <div class="row">
    <div class="col apply">
      <img class="img-border" src="images/working.jpg" alt="Cashier helping a customer">
    </div>
    <div class="col apply">
      <h2>Apply</h2>
      <p>
        Apply
        Interested in becoming a barista at Mama D's?

        Fill out the application below.

        We are proud to be an equal opportunity employer. All aspects of employment including the decision to hire and promote will be based on merit, competence, performance, and business needs. We do not discriminate on the basis of race, color, religion, marital status, age, physical or mental disability, medical condition, pregnancy, gender, sexual orientation, gender identity or expression, veteran status, or any other status protected under federal, state, or local law.



        In addition to tips, compensation for barista positions begin at minimum wage, with the intention of raising your hourly rate after your training and based on performance.</p>

    </div>

  </div>
  <form class="row g-3">
    <div class="col-md-6">
      <label for="inputfname" class="form-label" >First Name *</label>
      <input type="text" class="form-control" id="inputfname" placeholder="First Name">
    </div>
    <div class="col-md-6">
    <label for="inputlname" class="form-label">Last Name *</label>
    <input type="text" class="form-control" id="inputlname" placeholder="Last Name">
  </div>
    <div class="col-md-6">
      <label for="inputemail" class="form-label">Email *</label>
      <input type="text" class="form-control" id="inputemail" placeholder="Email">
    </div>
    <div class="col-md-6">
      <label for="inputphone" class="form-label">Phone Number *</label>
      <input type="text" class="form-control" id="inputphone" placeholder="Phone Number">
    </div>

    <div class="col-12">
      <label for="inputAddress" class="form-label">Address</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="col-12">
      <label for="inputAddress2" class="form-label">Address 2</label>
      <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="col-md-6">
      <label for="inputCity" class="form-label">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">State</label>
      <select id="inputState" class="form-select">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="col-md-2">
      <label for="inputZip" class="form-label">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>

      <button id="apply-btn" type="submit" class="btn default-btn">Submit</button>
  </form>



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<?php include 'includes/footer.php';?>
</body>
</html>