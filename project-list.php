<?php
define('APP_INIT', true);
require_once 'header.php';
?>

<!-- Breadcrumb Section Starts -->
<section class="breadcrumb py-11 position-relative section-pattern">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="breadcrumb-inner text-center">
            <h2 class="text-white pb-8 pt-2">Nos projets</h2>
        </div>
    </div>
</section>
<!-- Breadcrumb Section Ends -->

<!-- Projects Section Start -->
<section class="project z-1 position-relative pb-10">
    <div class="container">
        <div class="project-top pb-10">
            <div class="project-top-inner text-center text-lg-start">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="section-title my-6 w-100 w-lg-75">
                            <h5 class="orange pb-2">Nos projets actuels</h5>
                            <h2>Plus de 50 ans d'expriérience au service de votre projet de vie.</h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="project-top-image">
                            <img src="images/ch (1).jpg" alt="project image" class="w-lg-100 w-75">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-bottom px-3">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="project-box1 project-box text-center position-relative">
                        <div class="overlay"></div>
                        <a href="project-list.html" class="text-white h4 antonio fw-semibold position-relative">
                            Maisons contemporaines
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-box2 project-box text-center position-relative">
                        <div class="overlay"></div>
                        <a href="project-list.html" class="text-white h4 antonio fw-semibold position-relative">
                            Maisons traditionnelles
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-box3 project-box text-center position-relative">
                        <div class="overlay"></div>
                        <a href="project-list.html" class="text-white h4 antonio fw-semibold position-relative">
                            Rénovations & extensions
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-box4 project-box text-center position-relative">
                        <div class="overlay"></div>
                        <a href="project-list.html" class="text-white h4 antonio fw-semibold position-relative">
                            Projets personnalisés
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-box5 project-box text-center position-relative">
                        <div class="overlay"></div>
                        <a href="project-list.html" class="text-white h4 antonio fw-semibold position-relative">
                            Maisons RE 2020
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-box6 project-box text-center position-relative">
                        <div class="overlay"></div>
                        <a href="project-list.html" class="text-white h4 antonio fw-semibold position-relative">
                            Maisons RT 2012
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-box7 project-box text-center position-relative">
                        <div class="overlay"></div>
                        <a href="project-list.html" class="text-white h4 antonio fw-semibold position-relative">
                            Livraisons récentes
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="project-box8 project-box text-center position-relative">
                        <div class="overlay"></div>
                        <a href="project-list.html" class="text-white h4 antonio fw-semibold position-relative">
                            Villas contemporaines
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Projects Section Ends -->

<!-- Ad Banner Section Start -->
<section class="ad-banner position-relative">
    <div class="container">
        <div class="ad-banner-inner">
            <div class="row align-items-end g-0">
                <div class="col-md-6">
                    <div class="ad-title bg-orange py-9 px-8">
                        <h3 class="text-white">
                            Prêt à construire votre maison ? Contactez-nous ! </h3>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="add-banner-button m-0 text-center py-11 px-8 position-relative">
                        <div class="overlay"></div>
                        <a class="btn position-relative" href="contact.html">
                            <img src="images/right-arrow-white.PNG" alt="arrow-icon" class="btn-arrow" />
                            Contactez-nous
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ad Banner Section Ends -->

<!-- Newsletter Section Starts -->
<section class="newsletter position-relative z-1 pt-10">
    <div class="container position-relative z-2">
        <div class="newsletter-inner p-6 bg-orange">
            <div class="row align-items-center g-xl-5">
                <div class="col-xl-6">
                    <div class="newsletter-title text-center text-lg-start">
                        <h3 class="text-white">
                            Abonnez-vous pour ne rien manquer de nos services et projets. </h3>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="newsletter-email">
                        <input
                            type="email"
                            placeholder="Votre adresse e-mail"
                            class="w-md-75 w-100 bg-white my-4" />
                        <a class="btn btn1 w-md-25 w-100">
                            <img src="images/right-arrow-white.PNG" alt="arrow-icon" class="btn-arrow" />
                            <span class="small">S’abonner</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section Ends -->

<?php require_once 'footer.php'; ?>