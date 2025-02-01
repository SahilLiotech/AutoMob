<?php
require('db.php');

if (isset($_GET['id'])) {
  $product_id = $_GET['id'];

  $sql = "SELECT * FROM ev WHERE ev_id = $product_id";
  $ev_detail = $conn->query($sql);

  if ($ev_detail->num_rows > 0) {
    $product = $ev_detail->fetch_assoc();
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo isset($product['ev_name']) ? $product['ev_name'] : 'Product Detail'; ?></title>
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/login.css">
  <link rel="stylesheet" href="CSS/signup.css">
  <link rel="stylesheet" href="CSS/main.css" />
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
</head>

<body>
  <?php
  include('header.php');
  ?>

  <div class="container">
    <div class="row row-st product-container">
      <div class="col-12 col-md mt-4">
        <img src="<?php echo $product['ev_img']; ?>" class="img-fluid product-img" width="500rem" />
      </div>
      <div class="product-detail col-12 col-md d-flex flex-column justify-content-center">
        <h2 class="product-title"><?php echo $product['ev_name']; ?></h2>
        <p class="product-text">&#8377;<?php echo $product['ev_price']; ?> <span>Onward</span></p>
      </div>
      <?php if (isset($_SESSION['email'])) { ?>
        <a href="#" class="btn btn-dark buy-btn" data-bs-toggle="modal" data-bs-target="#EV-detail-modal">Buy Now</a>
      <?php } else { ?>
        <a href="#" disabled class="btn btn-dark buy-btn" data-bs-toggle="modal" data-bs-target="#modal">Buy Now</a>
      <?php } ?>
    </div>

    <div class="row row-st feature-box">
      <h2 class="my-4">Specification</h2>
      <div class="col feature-item text-center">
        <img src="imgs/meter.png" alt="" />
        <p class="spec">Range</p>
        <p class="spec-detail"><?php echo $product['ev_range']; ?></p>
      </div>
      <div class="col feature-item text-center">
        <img src="imgs/fule.png" alt="" />
        <p class="spec">Fuel Type</p>
        <p class="spec-detail"><?php echo $product['fuel_type']; ?></p>
      </div>
      <div class="col feature-item text-center">
        <img src="imgs/Kerb.png" alt="" />
        <p class="spec">Kerb Weight</p>
        <p class="spec-detail"><?php echo $product['kerb_type']; ?></p>
      </div>
      <div class="col feature-item text-center">
        <img src="imgs/max_speed.png" alt="" />
        <p class="spec">Max Speed</p>
        <p class="spec-detail"><?php echo $product['max_speed']; ?></p>
      </div>
      <div class="col feature-item text-center">
        <img src="imgs/chargingtime.png" alt="" />
        <p class="spec">Charging Time</p>
        <p class="spec-detail"><?php echo $product['charging_time']; ?></p>
      </div>
    </div>

    <div class="row row-st description">
      <div class="col">
        <h2 class="my-4">Description</h2>
        <?php
        $content = $product['description'];

        $description = explode("\n", $content);
        foreach ($description as $desc) {
          echo '<p>' . $desc . '</p>';
        }
        ?>
      </div>
    </div>

    <div class="row procons row-st mb-4">
      <div class="col-sm-12 col-md mb-4 mb-md-0 pros">
        <h3 class="d-flex align-items-center">
          Pros<img src="imgs/correct.png" width="20rem" class="ms-2" />
        </h3>
        <ul>
          <?php
          $list = $product['pros'];

          $pros = explode("\n", $list);
          foreach ($pros as $pro) {
            echo '<li>' . $pro . '</li>';
          }
          ?>
        </ul>
      </div>

      <div class="col-sm-12 col-md cons">
        <h3 class="d-flex align-items-center">
          Cons <img src="imgs/wrong.png" alt="" width="22rem" class="ms-2" />
        </h3>
        <ul>
          <?php
          $list = $product['cons'];

          $cons = explode("\n", $list);
          foreach ($cons as $con) {
            echo '<li>' . $con . '</li>';
          }
          ?>
        </ul>
      </div>
    </div>
  </div>


  <!------------------------ Buy-detail Modal ------------------------------------------>

  <div class="modal fade" id="EV-detail-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered justify-content-center">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title modal-buy-heading" id="exampleModalLabel">Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h3 class="text-center modal-buy-subheading">EV Details</h3>
          <p class="modal-buy-detail">Scooter Name: <?php echo $product['ev_name']; ?></p>
          <p class="modal-buy-detail">Scooter Price: <?php echo $product['ev_price']; ?></p>
          <p class="modal-buy-detail">Scooter Range: <?php echo $product['ev_range']; ?></p>
          <p class="modal-buy-detail">Scooter Fuel Type: <?php echo $product['fuel_type']; ?></p>
          <p class="modal-buy-detail">Scooter Kerb Weight: <?php echo $product['kerb_type']; ?></p>
          <p class="modal-buy-detail">Scooter Max Speed: <?php echo $product['max_speed']; ?></p>
          <p class="modal-buy-detail">Scooter Charging Time: <?php echo $product['charging_time']; ?></p>

          <h3 class="text-center modal-buy-subheading">User Detail</h3>
          <p class="modal-buy-detail">Name: <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></p>
          <p class="modal-buy-detail">Email: <?php echo $_SESSION['email']; ?></p>
          <p class="modal-buy-detail">Address: <?php echo $_SESSION['address']; ?></p>
          <p class="modal-buy-detail">City: <?php echo $_SESSION['city']; ?></p>
          <p class="modal-buy-detail">Zip: <?php echo $_SESSION['zip']; ?></p>
          <p class="modal-buy-detail">State: <?php echo $_SESSION['state']; ?></p>

          <a href="#" class="confirm-buy-link ev-buy-link text-center">Confirm Buy</a>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>

  <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
  <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $(".ev-buy-link").click(function(e) {
      e.preventDefault();
      $.ajax({
        type: "GET",
        url: "insert_ev_sale.php",
        data: {
          ev_id: <?php echo $_GET['id'] ?>
        },
        dataType: "JSON",
        success: function(response) {
          if (response['success']) {
            alert(response['message'])
          } else {
            alert(response['message'])
          }
        }
      });
    });
  </script>
</body>

</html>