<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/university-solid.png" />
    <title>SignUp</title>
    <link rel="stylesheet" href="./CSS File/banksample.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
</head>

<body style="font-family: 'Raleway', sans-serif;">
  <script type="text/javascript" src="./Java%20File/PermissionLoggedIn.js"></script>
  <div id = "MainContent">
    <nav class = "Navbar">
        <ul>
            <li><a href="BankSampleTest.html#MainContent">Home</a></li>
            <li><a href="BankSampleTest.html#contactus">Contact Us</a></li>
            <li><a href="BankSampleTest.html#containerAbout1">About Us</a></li>
            <li id="pageTitle"><h1 class="text-center">Bank Sample</h1></li>
            <li><button id="signup" class="btn btn-outline-warning btn-block text-dark" style="height: 50%; width: 100%;">Sign Up</button></li>
            <li><button id="login" class="btn btn-outline-primary btn-block text-dark" style="height: 50%; width: 100%;">Log In</button></li>
        </ul>
    </nav>
        
    <div class="signUp">
        <div class="container">
          <div class="row">
            <div class="col-md-8 m-auto">
              <h1 class="display-4 text-center">Sign Up</h1>
              <form id="loginForm" action="./PHP File/insert.php" method="POST" name="myForm">
                <?php session_start()?>
                <div class="form-group">
                    <input value =
                           "<?php
                           echo isset($_SESSION['PersistName'])? $_SESSION['PersistName']:"";
                           ?>"
                           id="fname" required type="name" class="form-control form-control-lg" placeholder="Enter Your Name" name="fname" />
                  </div>
                  <div class="form-group">
                    <input value =
                           "<?php
                           echo isset($_SESSION['PersistFamilyName'])? $_SESSION['PersistFamilyName']:"";
                           ?>"
                           id="lname" required type="name" class="form-control form-control-lg" placeholder="Enter Your Family Name" name="lname" />
                  </div>
                <div class="form-group">
                  <input id="email" required  class="form-control form-control-lg" placeholder="Enter Your Email" name="email" />
                </div>
                <div class="form-group">
                  <input id="password" required type="password" class="form-control form-control-lg" placeholder="Enter Your Pasword" name="password" />
                    <p class = "text-secondary">Password should be atleast 8 characters.</p>
                </div>
                <input name="submit" disabled id="submit" type="submit" value="Submit" class="btn btn-outline-warning btn-block text-dark">
                <div></div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <footer class="bg-light">
        <div class="container">
            <div class="row">
                <div class="text-center col">
                    <h1 class="text-dark p-3 font-italic">Bank Sample Test Site</h1>
                    <div class="py-2">
                        <a href="#"><i class="fab fa-instagram fa-2x mx-2"></i></a>
                        <a href="#"><i class="fab fa-facebook fa-2x mx-2"></i></a>
                        <a href="#"><i class="fab fa-whatsapp fa-2x mx-2"></i></a>
                        <a href="#"><i class="fab fa-linkedin fa-2x mx-2"></i></a>
                    </div>
                    <p class="py-4">&copy;Copyright 2020</p>
                </div>
            </div>
        </div>
    </footer>

  <script src="./Java File/SignupForm.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/4c8ff7f160.js" crossorigin="anonymous"></script>

  <script type="text/javascript">
    let pass = document.getElementById("password");
    let submit = document.getElementById("submit");
    let notice = document.getElementById("notice");
    pass.addEventListener("input", PassValidate, true);
    function PassValidate(event) {
        console.log(pass.value);
        if (pass.value.length >= 8) {
            submit.disabled = false;
            // notice.innerHTML = " ";
        } else {
            submit.disabled = true;
            // notice.innerHTML = "The Password should be atleast 8 characters.";
        }
    }
  </script>
</body>

</html>