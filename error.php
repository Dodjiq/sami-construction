<?php
define('APP_INIT', true);
require_once 'header.php';
?>

<!-- Breadcrumb Section Starts -->
<section class="breadcrumb py-11 position-relative section-pattern">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="breadcrumb-inner text-center">
            <h2 class="text-white pb-8 pt-2">404 Error</h2>
        </div>
    </div>
</section>
<!-- Breadcrumb Section Ends -->

<!-- Error Section Starts -->
<section class="error pt-9 pb-11 position-relative">
    <div class="overlay bg-white bg-opacity-50"></div>
    <div class="container position-relative">
        <div class="error-inner text-center">
            <h1 class="pb-4">404</h1>
            <span class="h3 antonio fw-semibold orange m-0">Hmmm, That page does not Exist...</span>
            <p class="h5 antonio fw-semibold m-0 pt-2 mb-5">Why Not return to the home page and continue browsing?</p>
            <a href="index.html" class="btn"><img src="images/right-arrow-white.PNG" alt="arrow-icon" class="btn-arrow"> Back Home</a>
        </div>
    </div>
</section>
<!-- Error Section Ends -->

<!-- Newsletter Section Starts -->
<section class="newsletter position-relative z-1">
    <div class="container position-relative z-2">
        <div class="newsletter-inner p-6 bg-orange">
            <div class="row align-items-center g-xl-5">
                <div class="col-xl-6">
                    <div class="newsletter-title text-center text-lg-start">
                        <h3 class="text-white">Subscribe to our newsletter to receive latest news on our services.</h3>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="newsletter-email">
                        <input type="email" placeholder="Your Email Address" class="w-md-75 w-100 bg-white my-4"><a class="btn btn1 w-md-25 w-100"><img src="images/right-arrow-white.PNG" alt="arrow-icon" class="btn-arrow"> <span class="small">Subscribe</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter Section Ends -->

<?php require_once 'footer.php'; ?>