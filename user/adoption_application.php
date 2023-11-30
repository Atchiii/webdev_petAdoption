<?php

    @include 'db/db.php';

    if(isset($_POST['submit'])){
        $petName = mysqli_real_escape_string($conn, $_POST['petName']);
        $mname = mysqli_real_escape_string($conn, $_POST['mname']);
        $species = mysqli_real_escape_string($conn, $_POST['species']);
        $breed = mysqli_real_escape_string($conn, $_POST['breed']);
        $sex = $_POST['sex'];
        $Fname = mysqli_real_escape_string($conn, $_POST['Fname']);
        $Lname = mysqli_real_escape_string($conn, $_POST['Lname']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $contact = mysqli_real_escape_string($conn, $_POST['contact']);
        $info = mysqli_real_escape_string($conn, $_POST['info']);
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

    <main>
    <?php @include 'includes/header.php';?>

    <form action="" method="post">
                    <div class="row mt-5">
                    <div class="col-4">
                        <div class="form-outline">
                        <input type="text" name="petName" class="form-control" />
                        <label class="form-label" for="petName"> Pet's Name</label>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-outline">
                        <input type="text" name="species" class="form-control" />
                        <label class="form-label" for="species">Species</label>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-outline">
                        <input type="text" name="breed" class="form-control" />
                        <label class="form-label" for="breed">Breed</label>
                        </div>
                    </div>
                    </div>

                    <select name="sex" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>

                <div class="row mb-2">
                    <div class="col-6">
                        <div class="form-outline">
                            <input type="text" name="Fname" class="form-control" />
                            <label class="form-label" for="Fname">First Name</label>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="form-outline">
                            <input type="text" name="Lname" class="form-control" />
                            <label class="form-label" for="Lname">Last Name</label>
                        </div>
                    </div>
                </div>

                <div class="row mb-2">
                    <div class="form-outline mb-2 col-8">
                        <input type="text" name="address" class="form-control" />
                        <label class="form-label" for="address">Address</label>
                    </div>
                    
                    <div class="form-outline mb-2 col-4 ">
                        <input type="text" name="contact" class="form-control" />
                        <label class="form-label" for="contact">Contact Number</label>
                    </div>
                </div>

                <div class="form-outline mb-5">
                    <textarea class="form-control" name="info" rows="4"></textarea>
                    <label class="form-label" for="info">Additional information</label>
                </div>

                <h2>Terms And agreements.</h2>
                <p>I hereby understand and agree that the current owner makes no representations or warranties,
                    expressed or implied, about the above-mentioned animal's temperament and is absolved from any liability 
                    for future damages or injuries caused by said animal. I also understand and agree that the current owner 
                    further gives no guarantees, expressed or implied, of the animal's suitability to the adopter and/or his family.</p>

                <div class="form-check d-flex mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="terms" checked />
                    <label class="form-check-label" for="terms"> I agree to the terms and agreements</label>
                </div>
                
                <div class="container d-flex flex-column">
                    <button type="submit"  value="register now" class="btn btn-lg btn-outline-success btn-block mb-4">Submit</button>
                    
                </div>
            
            </form>
        </section>

        <?php @include 'includes/foot.php';?>
    </main>

</body>
<script src="./vendor/bootstrap-5.0.2/js/bootstrap.min.js"></script>
</html>