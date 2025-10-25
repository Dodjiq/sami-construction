<?php
define('APP_INIT', true);
require_once 'header.php';
?>

<!-- Breadcrumb Section Starts -->
<section class="breadcrumb py-11 position-relative section-pattern">
  <div class="overlay"></div>
  <div class="container position-relative">
    <div class="breadcrumb-inner text-center">
      <h2 class="text-white pb-8 pt-2">Contact Us</h2>
    </div>
  </div>
</section>
<!-- Breadcrumb Section Ends -->

<!-- Contact Section Starts -->
<section class="contact pt-11 pb-10">
  <div class="container">
    <div class="contact-inner">
      <div class="location-map mb-8">
        <iframe height="450" class="w-100" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=en&amp;q=+(mangal%20bazar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
      </div>
      <div class="contact-bottom">
        <div class="row gx-lg-5 gy-5 align-items-stretch justify-content-center">
          <div class="col-lg-6">
            <div class="contact-form text-center text-md-start">
              <form>
                <h5 class="orange">Get a quote</h5>
                <h2 class="mb-7">Rrquest a Quote</h2>
                <input type="text" placeholder="Full Name" class="mb-3">
                <input type="email" placeholder="Email Address" class="mb-3">
                <input type="tel" placeholder="Phone No." class="mb-3">
                <textarea class="mb-3" rows="5" placeholder="Message"></textarea>
                <button class="btn"><img src="images/right-arrow-white.PNG" alt="arrow-icon" class="btn-arrow"> Send Message</button>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="find-us-banner p-8 bg-blue text-center text-md-start text-white h-100 d-flex align-items-center">
              <div class="find-banner-inner">
                <div class="find-us-banner-title mb-6">
                  <h2 class="orange">Find Us</h2>
                  <h4 class="text-white">In the real world</h4>
                </div>
                <div class="find-us-banner-body">
                  <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Metus dis posuere amet tincidunt commodo, velit. Ipsum, hac nibh fermentum nisi, platea condimentum cursus velit dui. Massa volutpat odio facilisis purus sit elementum. Non, sed velit dictum quam.</p>
                  <ul class="list-unstyled">
                    <li class="mb-3"><a href=""><i class="fa fa-envelope-o me-3 orange" aria-hidden="true"></i>info@buildland.com</a></li>
                    <li class="mb-3"><a href=""><i class="fa fa-map-marker  me-5 orange" aria-hidden="true"></i>23 Fifth Avenue, New York, NY 10160</a></li>
                    <li class="mb-3"><a href=""><i class="fa fa-phone  me-3 orange" aria-hidden="true"></i>+47 123 456 7890</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Contact Section Ends -->

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