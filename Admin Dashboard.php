<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">


  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./CSS File/banksample.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>

  <body style="font-family: 'Raleway', sans-serif">
  <script src="./Java%20File/PermissionAdmin.js" type="text/javascript"></script>
    <?php
        include "./PHP File/users.php";
    ?>
    <div id = "MainContent">
        <nav class = "Navbar">
            <ul>
                <li><a href="BankSampleTest.html#MainContent">Home</a></li>
                <li><a href="BankSampleTest.html#contactus">Contact Us</a></li>
                <li style="padding-right: 5%;"><a href="BankSampleTest.html#containerAbout1">About Us</a></li>
                <li id="pageTitle" style="padding-right: 230px;"><h1>Bank Sample</h1></li>
            </ul>
        </nav>

    <div class="dashboard">
        <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1 class="display-4" style="margin-top: 90px;">Dashboard</h1>
            <!-- Scheduled Meetings -->
            <div>
                <h4 class="mb-2" style="text-align: left; margin-top: 30px; margin-left: 30px;">Users:</h4>
                <?php UserTable();?>
            </div>
            <div>
                <h4 class="mb-2" style="text-align: left; margin-top: 70px;">Scheduled Meetings:</h4>
                <table class="table">
                <thead>
                    <tr>
                      <th>User</th>
                      <th>Day</th>
                      <th>Time</th>
                      <th></th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    <!-- <tr>
                      <td>Rawad</td>
                      <td>12/7/2020</td>
                      <td>15:20</td>
                      <td>
                          <button class="btn btn-success">
                              Approve
                          </button>
                          <button class="btn btn-danger">
                              Delete
                          </button>
                      </td>
                    </tr>
                    <tr>
                    <td>Hadi</td>
                    <td>12/23/2020</td>
                    <td>
                        11:20
                    </td>
                    <td>
                        <button class="btn btn-success">
                            Approve
                        </button>
                        <button class="btn btn-danger">
                        Delete
                        </button>
                    </td>
                    </tr> -->
                </tbody>
                </table>
            </div>
            </div>
        </div>

        <div>
            <h4 class="mb-2" style="text-align: left; margin-top: 30px; margin-left: 30px;">Approved Meetings:</h4>
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="approvedBody">
                <!-- <tr>
                  <td>Ahmeed</td>
                  <td>12/1/2020</td>
                  <td>21:08</td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
    </div>

    

    <footer class="bg-light" style="margin-top: 175px;">
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
    
    

    <script src="./Java File/dashboardJava.js"></script>
    

</body>

</html>
 
