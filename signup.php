<?php

    @include 'db/db.php';

    if(isset($_POST['submit'])){
        $fname = mysqli_real_escape_string($conn, $_POST['fname']);
        $mname = mysqli_real_escape_string($conn, $_POST['mname']);
        $lname = mysqli_real_escape_string($conn, $_POST['lname']);
        $contact = mysqli_real_escape_string($conn, $_POST['contact']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $pass = md5($_POST['password']);
        $cpass = md5($_POST['cpassword']);
        $sex = $_POST['sex'];

        $select = "SELECT * FROM user_form WHERE email='$email' && password='$pass'";

        $result = mysqli_query($conn, $select);

        if(mysqli_num_rows($result) > 0){
            $error[] = 'User already exist';
        }else{
            if($pass != $cpass){
                $error[] = 'Password not matched';
            }else{
                $insert = "INSERT INTO user_form(fname, mname, lname, contact, address, email, password, sex, user_type) VALUES('$fname','$mname','$lname','$contact','$address','$email', '$pass', '$sex', 'user')";
                mysqli_query($conn, $insert);
                header('location:login.php');
            }
        }
    };

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <link rel="stylesheet" href="css/style_log.css">
</head>
<body>
    <?php @include 'includes/header.php';?>
    <div class="form-container-l">
        <form action="" method="post">
            <h3>Sign up</h3>
            <?php
            
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    }
                }
            
            ?>
            <div class="d-flex">
                <input class="me-1" type="text" name="fname" required placeholder="First name">
                <input class="me-1" type="text" name="mname" placeholder="M. I">
                <input type="text" name="lname" required placeholder="Last name">
            </div>
            <input type="email" name="email" required placeholder="Email">
            <input type="text" name="address" required placeholder="Address">
            <input type="text" name="contact" required placeholder="Contact Number">
            <div class="d-flex">
                <input class="me-1" type="password" name="password" required placeholder="Password">
                <input type="password" name="cpassword" required placeholder="Confirm password">
            </div>
            <select name="sex" id="">
                <option value="">Sex</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
    <?php @include 'includes/foot.php';?>
</body>
</html>