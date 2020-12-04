<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="./img/university-solid.png" />
    <title>Edit Profile</title>
    <link rel="stylesheet" href="./CSS File/banksample.css">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&display=swap"
      rel="stylesheet"
    />
  </head>
  <body style="font-family: 'Raleway', sans-serif">
  <?php
      if (isset($_COOKIE['userTolkien'])) {
          echo "<h1>Cookie exists" . $_COOKIE['userTolkien'] . "</h1>";

          $host = '127.0.0.1';
          $db   = 'usersdb';
          $user = 'root';
          $pass = '';
          $charset = 'utf8mb4';

          $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
          $options = [
              PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
              PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
              PDO::ATTR_EMULATE_PREPARES   => false,
          ];

          $pdo = new PDO($dsn, $user, $pass, $options);

          $stmt = $pdo->prepare("SELECT * FROM user WHERE accountNumb = :accountNumb");
          $stmt->execute(['accountNumb' => $_COOKIE['userTolkien']]);
          foreach($stmt as $row) {
              $fullname = $row['fname']." ".$row['lname'];
              $accountNumber = $row['accountNumb'];
          }
      } else {
          echo "<h1>Cookie does not exist</h1>";
          $fullname = 'no name';
          $accountNumber = '';
          // dont open anything
      }
  ?>
  <div id="SideMenu">
      <ul id="SideBarList">
        <li id="profileTab">
          <i
            class="fas fa-user-alt fa-2x text-secondary"
            style="padding-right: 7%"
          ></i
          >Profile
        </li>
        <li class="animItem"><a href="#">Edit Profile</a></li>
        <li class="animItem"><a href="#">Business</a></li>
        <li class="animItem"><a href="#">Picture Gallery</a></li>
        <li class="animItem"><a href="#">Maintenance Team</a></li>
        <li class="hiddenItem animItem"><a href="#">Home</a></li>
        <li class="hiddenItem animItem"><a href="#">Contact Us</a></li>
        <li class="hiddenItem animItem"><a href="#">About Us</a></li></ul>
    </div>
    <div id="MainContent">
      <nav class="Navbar">
        <ul>
          <li><button id="SideButton"></button></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">About Us</a></li>
          <li id="pageTitle" style="padding-right: 17%">
            <h1 class="text-center">Bank Sample</h1>
          </li>
        </ul>
      </nav>

      <div class="create-profile">
      <div class="container">
        <div class="row">
          <div class="col-md-8 m-auto">
            <h1 class="display-4 text-center" style="margin-top: 7%;">Profile Edit</h1>
            <p class="lead text-center">
              Fill in the required information, to make your Bank experience
              smoother
            </p>
            <form action="./PHP File/editSubmit.php" method="GET">
              <div class="form-group">
                  <input
                          type="text"
                          class="form-control form-control-lg"
                          placeholder="Full Name"
                          name="fullName"
                          value="<?php echo $fullname; ?>"
                          required
                  />
                <div class="form-group" style="padding-top: 2%;">
                <input
                          type="text"
                          class="form-control form-control-lg"
                          placeholder="Bank Account Number"
                          name="accountNumb"
                          value="<?php echo $accountNumber; ?>"
                          disabled
                          required
                />
              </div>
              <div class="form-group">
                <select class="form-control form-control-lg" name="currency">
                  <option value="0">Account Currency</option>
                  <option value="LBP">Lebanese Lira</option>
                  <option value="USD">US Dollar</option>
                </select>
                <small class="form-text text-muted"
                  >Select the registered currency for your main account.</small
                >
              </div>
              <div class="form-group">
                <input
                  type="number"
                  class="form-control form-control-lg"
                  placeholder="Number of Running Accounts"
                  name="numbOfAccounts"
                />
                <small class="form-text text-muted"
                  >Fill in the number of current running accounts registered
                  under your name.</small
                >
              </div>
              <!-- <div class="form-group">
                <input
                  type="number"
                  class="form-control form-control-lg"
                  placeholder="Stock Market Shares"
                  name="Shares"
                />
                <small class="form-text text-muted"
                  >Fill in the number of currently owned stock market shares.
                </small>
              </div> -->

              <div class="form-group">
                <input
                  type="text"
                  class="form-control form-control-lg"
                  placeholder="Main Branch Location"
                  name="branch"
                />
                <small class="form-text text-muted"
                  >Fill in the location of your main Bank Sample branch.
                </small>
              </div>
              <button class="btn btn-outline-warning text-dark btn-block" type="submit" style="margin-bottom: 5%;">Submit</button>
              </div>
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
    </div>
 <script>
      var SideButton = document.getElementById("SideButton");
      var MainContent = document.getElementById("MainContent");
      var SideMenu = document.getElementById("SideMenu");

      SideButton.addEventListener("click", toggleSideMain);

      function toggleSideMain() {
        if (!MainContent.className) {
          MainContent.classList.add("Shifted");
          SideMenu.classList.add("Shifted");
        } else {
          MainContent.classList.remove("Shifted");
          SideMenu.classList.remove("Shifted");
        }
      }
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4c8ff7f160.js" crossorigin="anonymous"></script>
</body>
</html>




