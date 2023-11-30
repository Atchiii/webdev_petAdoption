<?php
    
    @include '../db/config.php';

    session_start();
    
    if(!isset($_SESSION['user_name'])){
        header('location:../login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Adoption</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php @include '../includes/header2.php';?>
      <!-- Profile Section -->
      <section id="profile" class="py-5">
        <div class="container">
          <div class="row">

            <!-- Profile Card -->
            <div class="col-md-4 d-flex align-items-center flex-column card p-3" style="max-width: 90%; width: 320px; height: 400px;">
              <img class="mr-3 rounded-circle" src="https://picsum.photos/300/200?random=3" alt="Profile Image" style="width: 150px; height: 150px;">
              <h3><?php echo $_SESSION['user_name'];?></h3>
              <p class="lead">Art Enthusiast</p>
              <p>Description here</p>
            </div>

            <!-- Details Card -->
            <div class="col-md-8">
              <div class="card">
                <div class="card-body">
                  
                  <!-- Applied for Adopt Section -->
                  <div class="mb-4">
                    <h4>Applied for Adopt</h4>
                    <hr>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Pet Name</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Viking Silver Arm Ring</td>
                            <td>$500</td>
                            <td>
                              <a href="./viewauction.html"><button class="btn btn-primary">View</button></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Roman Glass Bowl</td>
                            <td>$1000</td>
                            <td>
                              <a href="./viewauction.html"><button class="btn btn-primary">View</button></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>

                  <!-- Registered for Adopt Section -->
                  <div class="mb-4">
                    <h4>Registered for Adopt</h4>
                    <hr>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Pet Name</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Viking Silver Arm Ring</td>
                            <td>$500</td>
                            <td>
                              <a href="./viewauction.html"><button class="btn btn-primary">View</button></a>
                            </td>
                          </tr>
                          <tr>
                            <td>Roman Glass Bowl</td>
                            <td>$1000</td>
                            <td>
                              <a href="./viewauction.html"><button class="btn btn-primary">View</button></a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="./addressform.html" class="btn btn-primary">Register for Adoption</a>
                    </div>
                  </div>

                  <!-- My Address Section -->
                  <div>
                    <h4>My Address</h4>
                    <hr>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Address number</th>
                            <th>Name</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <!-- Your address rows go here -->
                          </tr>
                          <tr>
                            <!-- Another address row goes here -->
                          </tr>
                        </tbody>
                      </table>
                      <a href="./addressform.html" class="btn btn-primary">Create</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php @include '../includes/foot.php';?>
</body>
</html>