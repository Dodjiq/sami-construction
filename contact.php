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
      <div class="contact-bottom">
        <div class="row gx-lg-5 gy-5 align-items-stretch justify-content-center">

          <!-- Formulaire de contact -->
          <!-- Formulaire de contact -->
          <div class="col-lg-6">
            <div class="contact-form text-center text-md-start">
              <!-- Zone de notification toast (en haut à droite) -->
              <div id="toast" class="toast-notification"></div>

              <!-- Message d’erreur ou de succès -->
              <div id="form-message" class="mb-4" style="display:none;"></div>

              <form id="contact-form">
                <h5 class="orange">Obtenez un devis</h5>
                <h2 class="mb-7">Demandez votre devis gratuit</h2>
                <input type="text" name="nom" placeholder="Nom complet" class="mb-3" required>
                <input type="email" name="email" placeholder="Adresse e-mail" class="mb-3" required>
                <input type="tel" name="telephone" placeholder="Numéro de téléphone" class="mb-3">
                <textarea name="message" rows="5" placeholder="Votre message" class="mb-3" required></textarea>

                <button type="submit" class="btn" id="submit-btn">
                  <span id="btn-text">Envoyer le message</span>
                  <span id="spinner" class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true" style="display: none;"></span>
                  <img src="images/right-arrow-white.PNG" alt="arrow-icon" class="btn-arrow ms-2">
                </button>
              </form>
            </div>
          </div>
        
          <script>
            document.getElementById('contact-form').addEventListener('submit', async function(e) {
              e.preventDefault();

              const form = e.target;
              const formData = new FormData(form);
              const messageDiv = document.getElementById('form-message');
              const submitBtn = document.getElementById('submit-btn');
              const btnText = document.getElementById('btn-text');
              const spinner = document.getElementById('spinner');
              const toast = document.getElementById('toast');

              // Réinitialiser état précédent
              messageDiv.style.display = 'none';
              toast.className = 'toast-notification';

              // Activer spinner
              btnText.textContent = 'Envoi en cours...';
              spinner.style.display = 'inline-block';
              submitBtn.disabled = true;

              try {
                const response = await fetch('mail.php', {
                  method: 'POST',
                  body: formData
                });

                const result = await response.json();

                if (result.success) {
                  // Toast succès
                  toast.textContent = `Message envoyé ! Réponse attendue à : ${result.email}`;
                  toast.classList.add('toast-success', 'show');

                  // Masquer après 3s
                  setTimeout(() => {
                    toast.classList.remove('show');
                  }, 3000);

                  form.reset();
                } else {
                  // Toast erreur
                  toast.textContent = result.error;
                  toast.classList.add('toast-error', 'show');

                  setTimeout(() => {
                    toast.classList.remove('show');
                  }, 4000);
                }
              } catch (err) {
                toast.textContent = 'Erreur réseau. Veuillez réessayer.';
                toast.classList.add('toast-error', 'show');
                setTimeout(() => toast.classList.remove('show'), 4000);
              } finally {
                btnText.textContent = 'Envoyer le message';
                spinner.style.display = 'none';
                submitBtn.disabled = false;
              }
            });
          </script>

          <!-- CSS minimal pour le spinner (si Bootstrap ne le charge pas déjà) -->
          <style>
            .spinner-border {
              width: 1rem;
              height: 1rem;
            }

            .toast-notification {
              position: fixed;
              top: 1rem;
              right: 1rem;
              padding: 1rem 1.5rem;
              border-radius: 0.5rem;
              color: white;
              font-weight: 500;
              z-index: 9999;
              opacity: 0;
              transform: translateY(-20px);
              transition: opacity 0.3s ease, transform 0.3s ease;
              max-width: 300px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            }

            .toast-notification.show {
              opacity: 1;
              transform: translateY(0);
            }

            .toast-success {
              background-color: #28a745;
            }

            .toast-error {
              background-color: #dc3545;
            }
          </style>

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
      <div class="location-map mb-8" style="margin-top: 60px;;">
        <iframe height="450" class="w-100" src="https://maps.google.com/maps?width=100%25&amp;height=400&amp;hl=fr&amp;q=+(Sami%20Constructions)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
      </div>
    </div>

  </div>
</section>
<!-- Contact Section Ends -->



<?php require_once 'footer.php'; ?>