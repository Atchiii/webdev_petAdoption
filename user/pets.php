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
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php @include '../includes/header2.php';?>
    
    <section class="con2 d-flex justify-content-around px-3 mt-5">
        <div class="afd col-lg-6 px-5 w-100" style="max-height: 600px; overflow-y: auto; height: 100vh;">
            <!-- List of pets available for adoption -->
            <h5>Available for Adoption</h5>
            <ul id="petList" class="list-group mb-5 mt-5 d-flex flex-wrap flex-row justify-content-center">
                <!-- Sample pets for Dogs -->
                <!-- Remaining code remains unchanged -->
                <div class="card m-1">
                    <a style="text-decoration: none" href="pet_profile.php">
                        <li class="list-group-item m-1 card" id="dogs">
                            <div class="pet-card d-flex" id="dogs">
                                <img src="" alt="Dog 1" class="icon-box">
                                <div class="pet-description mt-3">
                                    <h6>Mr. Chips</h6>
                                    <p>Just a Dog</p>
                                </div>
                            </div>
                        </li>
                    </a>
                </div>

                <!-- Add more list items for other pets -->
            </ul>
        </div>
    </section>
    <?php @include '../includes/foot.php';?>
</body>
</html>