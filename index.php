<?php
require('db.php');

$sql = "SELECT * FROM car ORDER BY RAND() LIMIT 8";
$sql1 = "SELECT * FROM bike ORDER BY RAND() LIMIT 8";
$sql2 = "SELECT * FROM scooter ORDER BY RAND() LIMIT 8";
$sql3 = "SELECT * FROM ev ORDER BY RAND() LIMIT 8";
$car_card = $conn->query($sql);
$bike_card = $conn->query($sql1);
$scooter_card = $conn->query($sql2);
$ev_card = $conn->query($sql3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>AutoMob</title>
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/login.css" />
  <link rel="stylesheet" href="CSS/signup.css">
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>
  <?php
  include('header.php');
  ?>


  <!--------------------------- Main Container ---------------------------->

  <div class="container-xxl main-div p-0">

    <!---------------------- Hero Section --------------------------------->

    <div class="row gx-4 hero align-items-center">
      <div class="col-12 col-md-7">
        <h1 class="hero-heading">Embrace the future of driving.</h1>
        <p class="hero-description">
          The Tata Nexon combines cutting-edge technology and innovative
          design, offering a thrilling driving experience that represents the
          future of automotive excellence.
        </p>
        <a href="cars.php" class="hero-btn">Know More &rarr;</a>
      </div>
      <div class="col-12 col-md-5">
        <img src="imgs/TataNexon.png" alt="Image Of Tata Nexon" class="img-fluid hero-img" />
      </div>
    </div>

    <!---------------------------- Find Section ------------------------------>

    <section class="section-find d-none d-sm-block">
      <h2 class="find-heading">What are you looking for?</h2>
      <div class="container-xxl">
        <div class="row find-container">
          <div class="col col-sm-5 col-lg find-col" id="find-car">
            <div class="find-card">
              <div class="find-card-img"><img src="imgs/car.png" alt="" /></div>
              <p class="find-img-name">Cars</p>
            </div>
          </div>
          <div class="col col-sm-5 col-lg find-col" id="find-bike">
            <div class="find-card">
              <div class="find-card-img">
                <img src="imgs/bike.png" alt="" />
              </div>
              <p class="find-img-name">Bikes</p>
            </div>
          </div>
          <div class="col col-sm-5 col-lg find-col" id="find-scooter">
            <div class="find-card">
              <div class="find-card-img">
                <img src="imgs/scooter.png" alt="" />
              </div>
              <p class="find-img-name">Scooters</p>
            </div>
          </div>
          <div class="col col-sm-5 col-lg find-col" id="find-ev">
            <div class="find-card">
              <div class="find-card-img"><img src="imgs/ev.png" alt="" /></div>
              <p class="find-img-name">Electric vehicles</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!----------------------------- Car Card Section ------------------------------>
    <section class="section-card">
      <h2 class="card-heading">Latest cars in india</h2>
      <div class="container-xxl mt-5">
        <div class="row card-container justify-content-around">
          <?php
          while ($row = mysqli_fetch_assoc($car_card)) {
          ?>
            <div class="col d-flex justify-content-center indexcard">
              <div class="card">
                <img src="<?php echo $row["car_img"] ?>" class="card-img-top EV-1" alt="" />
                <div class="card-body">
                  <h5 class="vehical-name"><?php echo $row["car_name"] ?> </h5>
                  <p class="vehical-type"><?php echo $row["car_type"] ?></p>
                  <p class="vehical-price">&#8377;<?php echo $row["car_price"] ?> <span>OnWard</span></p>
                  <a href="car_detail.php?id=<?php echo $row["car_id"]; ?>" class="btn detail-btn">View More</a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="view-link">
          <a href="cars.php" class="view-btn">View All Latest Cars &rarr;</a>
        </div>
      </div>
    </section>

    <!----------------------------- Bike Card Section ------------------------------>

    <section class="section-card">
      <h2 class="card-heading">Latest Bikes in india</h2>
      <div class="container-xxl mt-5">
        <div class="row card-container justify-content-around">
          <?php
          while ($row = mysqli_fetch_assoc($bike_card)) {
          ?>
            <div class="col d-flex justify-content-center indexcard">
              <div class="card">
                <img src="<?php echo $row["bike_img"] ?>" class="card-img-top EV-1" alt="" />
                <div class="card-body">
                  <h5 class="vehical-name"><?php echo $row["bike_name"] ?> </h5>
                  <p class="vehical-price">&#8377;<?php echo $row["bike_price"] ?> <span>OnWard</span></p>
                  <a href="bike_detail.php?id=<?php echo $row["bike_id"]; ?>" class="btn detail-btn">View More</a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="view-link">
          <a href="bikes.php" class="view-btn">View All Latest Bikes &rarr;</a>
        </div>
      </div>
    </section>

    <!----------------------------- Scooters Card Section ------------------------------>

    <section class="section-card">
      <h2 class="card-heading">Latest Scooters in india</h2>
      <div class="container-xxl mt-5">
        <div class="row card-container justify-content-around">
          <?php
          while ($row = mysqli_fetch_assoc($scooter_card)) {
          ?>
            <div class="col d-flex justify-content-center indexcard">
              <div class="card">
                <img src="<?php echo $row["scooter_img"] ?>" class="card-img-top EV-1" alt="" />
                <div class="card-body">
                  <h5 class="vehical-name"><?php echo $row["scooter_name"] ?> </h5>
                  <p class="vehical-price">&#8377;<?php echo $row["scooter_price"] ?> <span>OnWard</span></p>
                  <a href="scooter_detail.php?id=<?php echo $row["scooter_id"]; ?>" class="btn detail-btn">View More</a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="view-link">
          <a href="scooters.php" class="view-btn">View All Latest Scooters &rarr;</a>
        </div>
      </div>
    </section>

    <!----------------------------- EV Card Section ------------------------------>

    <section class="section-card">
      <h2 class="card-heading">Latest Electric Vehicles in india</h2>
      <div class="container-xxl mt-5">
        <div class="row card-container justify-content-around">
          <?php
          while ($row = mysqli_fetch_assoc($ev_card)) {
          ?>
            <div class="col d-flex justify-content-center indexcard">
              <div class="card">
                <img src="<?php echo $row["ev_img"] ?>" class="card-img-top EV-1" alt="" />
                <div class="card-body">
                  <h5 class="vehical-name"><?php echo $row["ev_name"] ?> </h5>
                  <p class="vehical-price">&#8377;<?php echo $row["ev_price"] ?> <span>OnWard</span></p>
                  <a href="ev_detail.php?id=<?php echo $row["ev_id"]; ?>" class="btn detail-btn">View More</a>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
        <div class="view-link">
          <a href="ev.php" class="view-btn">View All Latest Electric Vehicles &rarr;</a>
        </div>
      </div>
    </section>

    <!----------------------------------------- End Of Main Container --------------------------------------------------->
  </div>
  <?php
  include('footer.php');
  ?>
  <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
  <script src="JS/script.js"></script>
</body>

</html>