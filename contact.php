<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="CSS/style.css" />
  <link rel="stylesheet" href="CSS/login.css" />
  <link rel="stylesheet" href="CSS/signup.css">
  <link rel="stylesheet" href="CSS/contact.css">
  <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css" />
  <title>Contact Us || AutoMob</title>
</head>

<body>
  <?php
  include('header.php');
  ?>
  <div class="main-container">
    <div class="container-xxl main-container">
      <h3 class="info-heading text-center">Contact-Us</h3>
      <div class="row d-none d-sm-block">
        <div class="col">
          <div class="contact d-flex justify-content-around">
            <div class="com">
              <img src="imgs/email-logo.png" alt="email-logo" class="logo" />
              <p class="info-text">automob@gmail.com</p>
            </div>
            <div class="com">
              <img src="imgs/phone-logo.png" alt="phone-logo" class="logo" />
              <p class="info-text">90459 90459</p>
            </div>
            <div class="com">
              <img src="imgs/location-logo.png" alt="location-logo" class="logo" />

              <div class="info-text">
                <p>AutoMob Pvt. Ltd.</p>
                <p>101 Oak Road.</p>
                <p>Ahmedabad, Gujarat</p>
                <p>PinCode: 380004</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row form-container">
        <div class="col-12 col-lg-4 left d-flex align-items-center justify-content-center">
          <img src="imgs/Contact.png" alt="" class="img-fluid" width="300px" />
        </div>
        <div class="col right">
          <h2 class="form-heading text-center">Contact Us</h2>
          <p class="form-desc text-center">
            Any question or remark? Just write us a message
          </p>
          <form action="contact-insert.php" class="form contact-form" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" />
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email" />
            </div>
            <div class="mb-3">
              <label for="feedback" class="form-label">Feedback</label>
              <textarea name="feedback" class="form-control" id="feedback" rows="10" cols="30" placeholder="Enter Your Feedback"></textarea>
            </div>
            <button type="submit" class="btn contact-btn">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <?php
    include('footer.php');
    ?>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="JS/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="JS/script.js"></script>
</body>

</html>