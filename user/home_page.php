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
    <div class="container">
        <div class="content">
            <h3>Hi, <span>User</span></h3>
            <h1>Welcome <span><?php echo $_SESSION['user_name'];?></span></h1>
            <p>This is a User page</p>
            <a href="../login.php" class="btn">Login</a>
            <a href="../signup.php" class="btn">Register</a>
            <a href="../logout.php" class="btn">Logout</a>
        </div>
    </div>
    <?php @include '../includes/foot.php';?>
</body>
</html>