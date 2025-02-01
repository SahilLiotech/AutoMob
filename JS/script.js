$(document).ready(function () {
  //this 4 are the click events for the find section which one is located into the index.php file
  //when user click on the any find-card it redirected to the that particular page using it's ID
  $("#find-car").click(function () {
    window.location.href = "cars.php";
  });
  $("#find-bike").click(function () {
    window.location.href = "bikes.php";
  });
  $("#find-scooter").click(function () {
    window.location.href = "scooters.php";
  });
  $("#find-ev").click(function () {
    window.location.href = "ev.php";
  });

  //redirect footer icons
  $("#insta").click(function () {
    window.open("https://www.instagram.com/", "_blank");
  });
  $("#X").click(function () {
    window.open("https://www.twitter.com/", "_blank");
  });
  $("#whatsapp").click(function () {
    window.open("https://www.Whatsapp.com/", "_blank");
  });
  $("#facebook").click(function () {
    window.open("https://www.facebook.com/", "_blank");
  });
  $("#pinterest").click(function () {
    window.open("https://www.pinterest.com/", "_blank");
  });

  //first check that both fields are filled or not
  //Use Ajax For sent data to Login.php
  $(".login-modal-form").submit(function (e) {
    e.preventDefault();
    var email = $("#exampleInputEmail1").val();
    var password = $("#exampleInputPassword1").val();

    if (email === "" || password === "") {
      alert("Both email and password are required.");
    } else {
      $.ajax({
        type: "POST",
        url: "login.php",
        data: $(this).serialize(),
        dataType: "JSON",
        success: function (response) {
          if (response["success"] == false) {
            alert(response["message"]);
          } else {
            alert(response["message"]);
            location.reload();
          }
        },
      });
    }
  });

  //first check that all the fields are filled or not
  //Use Ajax For sent data to register.php
  $(".signup-form").submit(function (e) {
    e.preventDefault();
    var fname = $("#inputFname").val();
    var lname = $("#inputLname").val();
    var email = $("#inputEmail").val();
    var password = $("#inputPassword").val();
    var address = $("#inputAddress").val();
    var city = $("#inputCity").val();
    var zip = $("#inputZip").val();
    var state = $("#inputState").val();

    function isValidEmail(email) {
      return /^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}$/.test(email);
    }

    if (
      fname === "" ||
      lname === "" ||
      email === "" ||
      password === "" ||
      address === "" ||
      city === "" ||
      zip === "" ||
      state === ""
    ) {
      alert("All the fields are required.");
    } else if (!isValidEmail(email)) {
      alert("Please enter a valid email address.");
    } else {
      $.ajax({
        type: "POST",
        url: "register.php",
        data: $(this).serialize(),
        dataType: "JSON",
        success: function (response) {
          if (response["success"] == false) {
            alert(response["message"]);
          } else {
            alert(response["message"]);
            location.reload();
          }
        },
      });
    }
  });

  //first check that all the fields are filled or not
  //Use Ajax For Sent data to contact-insert.php
  $(".contact-form").submit(function (e) {
    e.preventDefault();
    var name = $("#name").val();
    var email = $("#email").val();
    var feedback = $("#feedback").val();

    if (name === "" || email === "" || feedback === "") {
      alert("All the fields are required.");
    } else {
      $.ajax({
        type: "POST",
        url: "contact-insert.php",
        data: $(this).serialize(),
        dataType: "JSON",
        success: function (response) {
          if (response["success"] == false) {
            alert(response["message"]);
          } else {
            alert(response["message"]);
            location.reload();
          }
        },
      });
    }
  });
});
