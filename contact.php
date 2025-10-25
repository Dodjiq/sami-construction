<?php
define('APP_INIT', true);
require_once 'header.php';
?>

<!-- Breadcrumb Section Starts -->
<section class="breadcrumb py-11 position-relative section-pattern">
  <div class="overlay"></div>
  <div class="container position-relative">
    <div class="breadcrumb-inner text-center">
      <h2 class="text-white pb-8 pt-2">Contactez-nous</h2>
    </div>
  </div>
</section>
<!-- Breadcrumb Section Ends -->

<!-- Contact Section Starts -->
<section class="contact pt-11 pb-10">
  <div class="container">
    <div class="contact-inner">
      <div class="location-map mb-8">
        <iframe height="450" class="w-100" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=fr&amp;q=+(Sami%20Constructions)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
      </div>
      <div class="contact-bottom">
        <div class="row gx-lg-5 gy-5 align-items-stretch justify-content-center">
          
          <!-- Formulaire de contact -->
          <div class="col-lg-6">
            <div class="contact-form text-center text-md-start">
              <form>
                <h5 class="orange">Obtenez un devis</h5>
                <h2 class="mb-7">Demandez votre devis gratuit</h2>
                <input type="text" placeholder="Nom complet" class="mb-3">
                <input type="email" placeholder="Adresse e-mail" class="mb-3">
                <input type="tel" placeholder="Numéro de téléphone" class="mb-3">
                <textarea class="mb-3" rows="5" placeholder="Votre message"></textarea>
                <button class="btn">
                  <img src="images/right-arrow-white.PNG" alt="arrow-icon" class="btn-arrow"> 
                  Envoyer le message
                </button>
              </form>
            </div>
          </div>

          <!-- Informations de contact -->
          <div class="col-lg-6">
            <div class="find-us-banner p-8 bg-blue text-center text-md-start text-white h-100 d-flex align-items-center">
              <div class="find-banner-inner">
                <div class="find-us-banner-title mb-6">
                  <h2 class="orange">Retrouvez-nous</h2>
                  <h4 class="text-white">Dans la vraie vie</h4>
                </div>
                <div class="find-us-banner-body">
                  <p class="mb-5">
                    Vous souhaitez visiter nos bureaux ou discuter de votre projet ? 
                    Nous sommes à votre disposition pour répondre à toutes vos questions et vous accompagner.
                  </p>
                  <ul class="list-unstyled">
                    <li class="mb-3">
                      <a href="mailto:info@sami-constructions.com">
                        <i class="fa fa-envelope-o me-3 orange" aria-hidden="true"></i>info@sami-constructions.com
                      </a>
                    </li>
                    <li class="mb-3">
                      <a href="#">
                        <i class="fa fa-map-marker me-5 orange" aria-hidden="true"></i>65 Avenue Andrée Mazoyer, 30129 Manduel, France
                      </a>
                    </li>
                    <li class="mb-3">
                      <a href="tel:+33466204683">
                        <i class="fa fa-phone me-3 orange" aria-hidden="true"></i>+33 4 66 20 46 83
                      </a>
                    </li>
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
