<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/login.css" />
  <link rel="stylesheet" href="CSS/signup.css">
  <link rel="stylesheet" href="CSS/about.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <title>About || AutoMob</title>
</head>

<body>
  <?php
  include('header.php')
  ?>
  <section class="section-about">
    <div class="container-xxl about-container">
      <h2 class="about-heading">About Us</h2>
      <div class="row align-items-center about-content">
        <div class="col col-md-6 d-none d-md-block">
          <img src="imgs/allvehicles.png" alt="" class="about-img" />
        </div>
        <div class="col col-md-6">
          <p class="about-description">
            AutoMob is your one-stop destination for all your vehicle buying
            needs. We offer a wide range of cars, bikes, scooters, and
            electric vehicles for sale. With our user-friendly platform, you
            can browse through various vehicle options, compare prices, and
            make a well-informed decision.
          </p>
        </div>
      </div>
      <div class="row align-items-center about-content">
        <div class="col col-md-6">
          <p class="about-description">
            Our mission is to provide a seamless and convenient vehicle buying
            experience to our customers. We understand the importance of
            finding the perfect vehicle that suits your preferences and
            budget. That's why we strive to bring you a diverse selection of
            vehicles from trusted sellers across the country.
          </p>
        </div>
        <div class="col col-md-6 d-none d-md-block">
          <img src="imgs/customer-seller.png" alt="" class="about-img" />
        </div>
      </div>
      <div class="row align-items-center about-content">
        <div class="col col-md-6 d-none d-md-block">
          <img src="imgs/customer.png" alt="" class="about-img" />
        </div>
        <div class="col col-md-6">
          <p class="about-description">
            At AutoMob, we prioritize customer satisfaction. Our dedicated
            team is committed to assisting you throughout the buying process.
            If you have any questions or need guidance, feel free to reach out
            to our friendly customer support team. We are here to help you
            make the best choice and ensure a smooth transaction.
          </p>
        </div>
      </div>
      <div class="row align-items-center about-content">
        <div class="col col-md-6">
          <p class="about-description">
            Whether you're looking for a reliable car, an eco-friendly
            electric vehicle, a stylish bike, or a convenient scooter, AutoMob
            has got you covered. Start your vehicle buying journey with us
            today and experience the joy of finding your perfect ride.
          </p>
        </div>
        <div class="col col-md-6 d-none d-md-block">
          <img src="imgs/happy-customer.png" alt="" class="about-img" />
        </div>
      </div>
    </div>
  </section>
  <?php
  include('footer.php');
  ?>
  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>