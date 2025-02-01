<?php
session_start();
?>

<nav class="navbar navbar-expand-lg fixed-top" id="header">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php" id="logo-container"><img src="imgs/logo-icon.png" class="logo-img" /> Auto<span>Mob</span></a>
    <button class="navbar-toggler" id="menu-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto main-nav">
        <li class="nav-item">
          <a class="nav-link" href="cars.php">Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bikes.php">Bikes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="scooters.php">Scooters</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ev.php">Electric</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact us</a>
        </li>
        <?php if (isset($_SESSION['fname'])) { ?>
          <li class="nav-item">
            <span class="nav-link u-icon" data-bs-toggle="modal" data-bs-target="#profilemodal"><?php echo $_SESSION['fname'] ?></span>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a class="btn nav-link login-btn" href="" role="button" data-bs-toggle="modal" data-bs-target="#modal">Log in</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>

<!-------------------------------------------------------------------- Login Modal ----------------------------------------------------------------------------->

<div class="modal fade" tabindex="-1" id="modal">
  <div class="modal-dialog modal-dialog-centered justify-content-center">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-center">
        <a class="navbar-brand d-flex align-items-center" href="#" id="logo-container"><img src="imgs/logo-icon.png" class="logo-img login-logo-img" /> Auto<span>Mob</span></a>
      </div>
      <div class="modal-body">
        <form class="login-modal-form" action="login.php" method="post">
          <div class="login-icon text-center">
            <img src="imgs/login-icon.png" alt="" />
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password" />
          </div>
          <button type="submit" class="btn login-form-btn">Login</button>
          <div class="signup-redirect text-center">
            <span class="login-text">Don't Have An Account? </span>
            <a href="#" class="signup-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign up</a>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>

<!----------------------------------------------------------------------- Signup Modal ----------------------------------------------------------------------------->
<div class="modal fade" id="exampleModal" tabindex="-2" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered justify-content-center">
    <div class="modal-content signup-modal-content">
      <div class="modal-header">
        <a class="navbar-brand d-flex align-items-center" href="#" id="logo-container"><img src="imgs/logo-icon.png" class="logo-img login-logo-img" /> Auto<span>Mob</span></a>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="row g-3 signup-form" action="register.php" method="post">
          <div class="col-md-6">
            <label for="inputFname" class="form-label">First Name</label>
            <input type="text" name="fname" class="form-control" id="inputFname" placeholder="Enter your first name" />
          </div>
          <div class="col-md-6">
            <label for="inputLname" class="form-label">Last Name</label>
            <input type="text" name="lname" class="form-control" id="inputLname" placeholder="Enter your last name" />
          </div>
          <div class="col-md-6">
            <label for="inputEmail" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Enter your email" />
          </div>
          <div class="col-md-6">
            <label for="inputPassword" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Enter your password" />
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Enter your address" />
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">City</label>
            <input type="text" name="city" class="form-control" id="inputCity" placeholder="Enter your city" />
          </div>
          <div class="col-md-6">
            <label for="inputZip" class="form-label">Zip</label>
            <input type="text" name="zip" class="form-control" id="inputZip" placeholder="Enter your city zip code" />
          </div>
          <div class="col-12">
            <label for="inputState" class="form-label">State</label>
            <select id="inputState" name="state" class="form-select">
              <option value="">Choose...</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Goa">GOA</option>
              <option value="Maharastra">Maharastra</option>
              <option value="Uttarpradesh">UttarPradesh</option>
            </select>
          </div>
          <div class="col-12">
            <button type="submit" class="btn signup-form-btn">
              Register
            </button>
            <div class="login-redirect text-center">
              <span class="signup-text">Already Have An Account? </span>
              <a href="" class="login-link" data-bs-toggle="modal" data-bs-target="#modal">Log in</a>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
          Close
        </button>
      </div>
    </div>
  </div>
</div>

<!--------------------------------- ProfileModal -------------------------------------->

<div class="modal fade" id="profilemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered justify-content-center">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title profile-heading" id="exampleModalLabel">User Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="login-icon text-center">
          <img src="imgs/login-icon.png" alt="" />
        </div>
        <label class="profile-headings">First Name: </label>
        <label class="profile-text fnm"><?php echo $_SESSION['fname']; ?></label><br>
        <label class="profile-headings">Last Name: </label>
        <label class="profile-text lnm"><?php echo $_SESSION['lname']; ?></label><br>
        <label class="profile-headings">Email: </label>
        <label class="profile-text"><?php echo $_SESSION['email']; ?></label><br>
        <a href="logout.php" class="logout-link"><img src="imgs/user-logout.png" alt=""> Logout</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>