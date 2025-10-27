/*------------------------------------------------------------------
* Project:        Buildland - Construction Business HTML Templates
* Author:         HtmlDesignTemplates
* URL:            https://themeforest.net/user/htmldesigntemplates
* Created:        02/18/2025
-------------------------------------------------------------------*/

(function ($) {
    "use strict";

    $(document).ready(function () {

        /* SlickNav Responsive Menu */
        $('#responsive-menu').slicknav({
            duration: 500,
            easingOpen: 'easeInExpo',
            easingClose: 'easeOutExpo',
            closedSymbol: '<i class="arrow-indicator fa fa-angle-down"></i>',
            openedSymbol: '<i class="arrow-indicator fa fa-angle-up"></i>',
            prependTo: '#mobile-menu-wrapper',
            allowParentLinks: true,
            label: ""
        });

        /* Sticky Header */
        $(window).on('scroll', function () {
            if ($(window).scrollTop() > 10) {
                $('.header-nav-menu').addClass('navbar-sticky-in');
            } else {
                $('.header-nav-menu').removeClass('navbar-sticky-in');
            }
        });

        /* Dropdown Menu */
        var selected = $('#navbar li');
        selected.on("mouseenter", function () {
            $(this).find('ul').first().stop(true, true).delay(350).slideDown(500, 'easeInOutQuad');
        }).on("mouseleave", function () {
            $(this).find('ul').first().stop(true, true).delay(100).slideUp(150, 'easeInOutQuad');
        });

        /* Arrow Indicator for Submenus */
        if ($(window).width() > 992) {
            $(".navbar-arrow ul ul > li").has("ul").children("a").append("<i class='arrow-indicator fa fa-angle-right'></i>");
        }

        /* Slick Sliders */
        $('.bannerslider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 4000
        });

        $('.testimonial-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            dots: true,
            autoplaySpeed: 4000
        });

        $('.partner-slider').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            arrows: false,
            dots: false,
            infinite: true,
            autoplaySpeed: 4000,
            responsive: [
                { breakpoint: 1024, settings: { slidesToShow: 3, slidesToScroll: 1 } },
                { breakpoint: 600, settings: { slidesToShow: 2, slidesToScroll: 1 } },
                { breakpoint: 480, settings: { slidesToShow: 1, slidesToScroll: 1 } }
            ]
        });

        /* Counter JS */
        document.querySelectorAll(".num").forEach(valueDisplay => {
            let startValue = 0;
            let endValue = parseInt(valueDisplay.getAttribute("data-val"), 10);
            let duration = Math.max(Math.floor(2000 / endValue), 1);
            let counter = setInterval(() => {
                valueDisplay.textContent = ++startValue;
                if (startValue === endValue) clearInterval(counter);
            }, duration);
        });

        /* Lightbox Gallery */
        lightGallery(document.getElementById('lightgallery-video'), {
            plugins: [lgVideo],
            speed: 500,
            videoMaxWidth: '1000px'
        });

        /* Countdown Timer */
        document.addEventListener('DOMContentLoaded', function () {
            const days = document.getElementById('days');
            const hours = document.getElementById('hours');
            const minutes = document.getElementById('minutes');
            const seconds = document.getElementById('seconds');
            if (!days || !hours || !minutes || !seconds) return;

            const targetTime = new Date(Date.now() + (100 * 24 * 60 * 60 * 1000));
            function updateCountdown() {
                const diff = targetTime - new Date();
                days.textContent = Math.floor(diff / (1000 * 60 * 60 * 24));
                hours.textContent = ('0' + Math.floor((diff / (1000 * 60 * 60)) % 24)).slice(-2);
                minutes.textContent = ('0' + Math.floor((diff / (1000 * 60)) % 60)).slice(-2);
                seconds.textContent = ('0' + Math.floor((diff / 1000) % 60)).slice(-2);
            }
            updateCountdown();
            setInterval(updateCountdown, 1000);
        });

        /* Password Toggle */
        function setupPasswordToggle(toggleId, passwordId) {
            const togglePassword = document.querySelector(toggleId);
            const password = document.querySelector(passwordId);
            if (togglePassword && password) {
                togglePassword.addEventListener('click', function () {
                    const type = password.type === 'password' ? 'text' : 'password';
                    password.type = type;
                    this.querySelector('i').classList.toggle('fa-eye');
                    this.querySelector('i').classList.toggle('fa-eye-slash');
                });
            }
        }
        setupPasswordToggle('#togglePassword', '#password');
        setupPasswordToggle('#togglePassword1', '#password1');
    });
})(jQuery);
