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
                $insert = "INSERT INTO user_form(fname, mname, lname, contact, address, email, password, sex) VALUES('$fname', '$mname','$lname','$contact','$address','$email', '$pass', '$sex')";
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
            <input type="text" name="fname" required placeholder="Enter your first name here">
            <input type="text" name="mname" placeholder="Enter your middle name here">
            <input type="text" name="lname" required placeholder="Enter your last name here">
            <input type="text" name="contact" required placeholder="Enter your contact here">
            <input type="text" name="address" required placeholder="Enter your address here">
            <input type="email" name="email" required placeholder="Enter your email here">
            <input type="password" name="password" required placeholder="Enter your password here">
            <input type="password" name="cpassword" required placeholder="Confirm your password here">
            <select name="sex" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <input type="submit" name="submit" value="register now" class="form-btn">
            <p>Already have an account?<a href="login.php"> Login here</a></p>
        </form>
    </div>
    <?php @include 'includes/foot.php';?>
</body>
</html>