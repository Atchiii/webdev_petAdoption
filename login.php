<?php

    @include 'db/db.php';
    session_start();

    if(isset($_POST['submit'])){
       
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);
      
        $select = "SELECT * FROM user_form WHERE email='$email' && password='$pass'";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);

            if($row['user_type'] == 'admin'){

                $_SESSION['admin_name'] = $row['fname'];
                header('location:admin/dashboard.php');

            }elseif($row['user_type'] == 'user'){

                $_SESSION['user_name'] = $row['fname'];
                header('location:user/home_page.php');
            }
        }else{
            $error[] = 'Incorrect email or password';
        }
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style_log.css">
</head>
<body>
    <?php @include 'includes/header.php';?>
    <div class="form-container-l">
        <form action="" method="post">
            <h3>Login</h3>
            <?php
            
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
            
            ?>
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" name="submit" value="login now" class="form-btn">
            <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
    </div>
    <?php @include 'includes/foot.php';?>
</body>
</html>