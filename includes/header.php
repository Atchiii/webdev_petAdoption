<?php
    @include 'includes/head.php';
?>
<header class="header sticky-top">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="#"><img src="" alt="LOGO"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-3" id="navbarNav">
                <ul class="navbar-nav d-flex justify-content-between w-100">
                    <div class="collapse navbar-collapse justify-content-end ms-5" id="navbarNav" >
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Pets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">About Us</a>
                        </li>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end ms-5" id="navbarNav" >
                        <li class="nav-item">
                            <a class="nav-link active" href="./login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="./signup.php">Sign up</a>
                        </li>
                    </div>
                </ul>
            </div>
        </div>
    </nav>
</header>