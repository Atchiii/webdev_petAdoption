<?php
    @include 'includes/head.php';
?>

<body>
    <?php @include 'includes/header.php';?>
    <main class="d-flex justify-content-center flex-column">
        <section class="bigpic flex">
            <div class="d-flex flex-column justify-content-center" id="slo">
                <h1><span id="res">Rescue</span>, <span id="lo">Love</span>, <span id="re"> Repeat</span>:</h1>
                <h1 id="slo2">Choose Adoption and Change a Life!</h1>
            </div>
            <div id="tar">
                <img src="./img/dog (2).png" alt="" class="banner d-flex justify-content-center flex-column align-items-start text-center" id="pic">
            </div>
        </section>

        <section class="pets py-5" id="a">
            <div class="text-center mb-5 mt-4">
                <h2 id="visit">Visit our Pet house</h2>
            </div>

            <div class="container" id="magic">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row row-cols-1 row-cols-md-3 ani2">
                            <div class="col pet-s ani">
                                <img src="./img/laughing.png" alt="picture" class="animals img-fluid">
                                <h5 class="ani-h">Cats</h5>
                            </div>
                            <div class="col pet-s ani">
                                <img src="./img/happy.png" alt="picture" class="animals img-fluid">
                                <h5 class="ani-h">Dogs</h5>
                            </div>
                            <div class="col pet-s ani">
                                <img src="./img/bird.png" alt="picture" class="animals">
                                <h5 class="ani-h">Birds</h5>
                            </div>
                            <div class="col pet-s ani">
                                <img src="./img/fish.png" alt="picture" class="animals">
                                <h5 class="ani-h">Aquatic Pets</h5>
                            </div>
                            <div class="col pet-s ani">
                                <img src="./img/chameleon.png" alt="picture" class="animals">
                                <h5 class="ani-h">Reptiles</h5>
                            </div>
                            <div class="col pet-s ani">
                                <img src="./img/pet.png" alt="picture" class="animals">
                                <h5 class="ani-h">Others</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <h3>Come visit our pet house for adoption and discover the warmth and joy of finding your new furry family member. We have a diverse selection of loving animals eagerly waiting to bring happiness into your home!</h3>
                        <div class="text-center mt-5">
                            <button id="vp" class="btn btn-primary"><a id="vp" href="./signin.html">View more Pets</a></button>
                        </div>
                    </div>
                </div>
            </div>

        <section class="mb-5" id="faq">
            <div class="text-center my-5">
                <h2>Pet Adoption FAQ's</h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="qa mb-4">
                            <p><span>Q:</span> How does pet adoption work?</p>
                            <hr>
                            <p><span>A:</span> Browse our website, select a pet, fill out an adoption application, and complete the necessary process for a potential match.</p>
                        </div>
                        <div class="qa mb-4">
                            <p><span>Q:</span> What is the adoption fee and what does it cover?</p>
                            <hr>
                            <p><span>A:</span> Adoption fees vary and typically cover vaccinations, spaying/neutering, microchipping, a health check-up, and often a starter kit.</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="qa mb-4">
                            <p><span>Q:</span> Are the pets on the website healthy and up-to-date on vaccinations?</p>
                            <hr>
                            <p><span>A:</span> Yes, pets listed on our website are generally in good health, vaccinated, and have relevant health records available for review.</p>
                        </div>
                        <div class="qa mb-4">
                            <p><span>Q:</span> What if the pet doesn't adjust well to its new home?</p>
                            <hr>
                            <p><span>A:</span> Pets may need an adjustment period; we provide guidance. If challenges persist, contact us for advice or potential solutions, ensuring a successful adoption.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="text-center my-5">
                <h2>About Us</h2>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 mb-5">
                        <img src="./img/cat-dog-owner-1202354967.jpeg" alt="abts" class="abt-img img-fluid">
                    </div>

                    <div class="col-lg-6">
                        <div class="mx-2">
                            <p>At Pet Adoption, we believe that every pet deserves a loving home. Our mission is to rescue and rehabilitate animals in need, offering them a chance at a better life. We are dedicated to putting an end to the suffering of countless animals by promoting pet adoption. Through our platform, we connect caring individuals with wonderful pets seeking a forever home. Join us in our mission to provide a happy, loving environment for these deserving animals. Together, we can make a difference and give these pets the love and care they deserve.</p>
                        </div>
                        <div class="text-center mt-5">
                            <button id="gs" class="btn btn-primary"><a href="./login.html" id="gs">Register for Adoption</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php @include 'includes/foot.php';?>
</body>