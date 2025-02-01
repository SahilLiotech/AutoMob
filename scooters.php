<?php
require('db.php');

$sql = "SELECT * FROM scooter";
$scooter_card = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scooters || AutoMob</title>
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/login.css" />
  <link rel="stylesheet" href="CSS/signup.css">
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>
  <?php
  include('header.php');
  ?>
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
    </div>
  </section>
  <?php
  include('footer.php');
  ?>
  <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
  <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>