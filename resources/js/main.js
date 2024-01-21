import AOS from 'aos';
import GLightbox from 'glightbox';
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/autoplay';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import Isotope from 'isotope-layout';
import Typed from 'typed.js';
/**
* Template Name: MyResume - v4.3.0
* Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function () {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) return [...document.querySelectorAll(el)]
        return document.querySelector(el)
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (!selectEl) return;
        if (all) return selectEl.forEach(e => e.addEventListener(type, listener))
        return selectEl.addEventListener(type, listener)
    }

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => el.addEventListener('scroll', listener)

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active')
            } else {
                navbarlink.classList.remove('active')
            }
        })
        // activate dark theme for menu
        //   if(navbarlinks[0].classList.contains('active')){
        //     select('#navbar').classList.add('navbar-transparent');
        //   } else {
        //     select('#navbar').classList.remove('navbar-transparent');
        //   }
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
        let elementPos = select(el).offsetTop
        window.scrollTo({
            top: elementPos,
            behavior: 'smooth'
        })
    }

    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active')
            } else {
                backtotop.classList.remove('active')
            }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function (e) {
        select('body').classList.toggle('mobile-nav-active')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
    })

    /**
     * Scroll with offset on links with a class name .scrollto
     */
    on('click', '.scrollto', function (e) {
        if (select(this.hash)) {
            e.preventDefault()

            let body = select('body')
            if (body.classList.contains('mobile-nav-active')) {
                body.classList.remove('mobile-nav-active')
                let navbarToggle = select('.mobile-nav-toggle')
                navbarToggle.classList.toggle('bi-list')
                navbarToggle.classList.toggle('bi-x')
            }
            scrollto(this.hash)
        }
    }, true)

    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
        if (window.location.hash && select(window.location.hash)) scrollto(window.location.hash)
    });

    /**
     * Preloader
     */
    let preloader = select('#preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove()
        });
    }

    // /**
    //  * Hero type effect
    //  */
    const typed = select('.typed')
    if (typed) {
        let typed_strings = typed.innerHTML;
        typed_strings = typed_strings.split(',')
        typed.innerHTML = '';
        new Typed('.typed', {
            strings: typed_strings,
            loop: true,
            typeSpeed: 20,
            backSpeed: 40,
            backDelay: 2000
        });
    }

    /**
     * Porfolio isotope and filter
     */
    window.addEventListener('load', () => {
        let portfolioContainer = select('.portfolio-container');
        if (portfolioContainer) {
            let portfolioIsotope = new Isotope(portfolioContainer, {
                itemSelector: '.portfolio-item'
            });

            let portfolioFilters = select('#portfolio-flters li', true);

            on('click', '#portfolio-flters li', function (e) {
                e.preventDefault();
                portfolioFilters.forEach(function (el) {
                    el.classList.remove('filter-active');
                });
                this.classList.add('filter-active');

                portfolioIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });
                portfolioIsotope.on('arrangeComplete', function () {
                    AOS.refresh()
                });
            }, true);
        }

    });

    /**
     * Initiate portfolio lightbox
     */
    //   const portfolioLightbox = GLightbox({
    //     selector: '.portfolio-lightbox'
    //   });


    const defaultSwiperConfig = {
        modules: [Autoplay, Navigation, Pagination],
        speed: 600,
        loop: true,
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },
    }


    /**
     * Initiate portfolio details lightbox
     */
    const portfolioDetailsLightbox = GLightbox({
        selector: '.portfolio-details-lightbox',
        skin: 'portfolio'
    });
    function closeActiveSlideBox() {
        portfolioDetailsLightbox.close();
    }
    document.addEventListener('click', function (event) { // btn-back is recreated for each slide so we need to use event delegation
        if (event.target.matches('.portfolio-btn-back') || event.target.closest('.portfolio-btn-back')) {
            closeActiveSlideBox();
        }
    });

    portfolioDetailsLightbox.on('open', () => {
        /**
         * Portfolio slider
         */
        const sliderrr = new Swiper(getElementSelector(portfolioDetailsLightbox.activeSlide) + ' .portfolio-details-slider', {
            ...defaultSwiperConfig,
            autoHeight: true,
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            autoplay: false
            /*{
                ...defaultSwiperConfig.autoplay,
                delay: 3000,
                disableOnInteraction: true
            }*/
        });
        setTimeout(() => {
            if (sliderrr && typeof sliderrr.el !== 'string') sliderrr.update();
        }, 2000);
    });


    /**
     * Testimonials slider
     */
    new Swiper('.testimonials-slider', {
        ...defaultSwiperConfig,
        autoplay: {
            ...defaultSwiperConfig.autoplay,
            delay: 5000
        },
    });

    /**
     * Animation on scroll
     */
    window.addEventListener('load', () => {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        })
    });

    const contactForm = document.querySelector('.php-email-form');
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        contactForm.querySelector('.loading').classList.add('d-block');

        var xhr = new XMLHttpRequest();
        xhr.open('POST', this.getAttribute('action'), true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');

        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 400) {
                // Success!
                var response = JSON.parse(xhr.responseText);
                document.querySelector('.sent-message').style.display = 'block';
                document.querySelector('.sent-message').textContent = response.message;
                document.querySelector('.error-message').style.display = 'none';
                contactForm.reset();
            } else {
                // We reached our target server, but it returned an error
                var errorResponse = JSON.parse(xhr.responseText);
                document.querySelector('.error-message').style.display = 'block';
                document.querySelector('.error-message').textContent = errorResponse.message;
                document.querySelector('.sent-message').style.display = 'none';
            }
            setTimeout(() => {
                document.querySelector('.error-message').style.display = 'none';
                document.querySelector('.sent-message').style.display = 'none';
            }, 5000);
            contactForm.querySelector('.loading').classList.remove('d-block');
        };

        xhr.onerror = function () {
            // There was a connection error of some sort
            document.querySelector('.error-message').style.display = 'block';
            document.querySelector('.error-message').textContent = 'There was an error submitting the form. Please try again.';
            setTimeout(() => {
                document.querySelector('.error-message').style.display = 'none';
                document.querySelector('.sent-message').style.display = 'none';
            }, 5000);
            contactForm.querySelector('.loading').classList.remove('d-block');
        };

        // URL encode form data for sending as post data
        var formData = new URLSearchParams(new FormData(this)).toString();
        xhr.send(formData);
    });

})()

function getElementSelector(element) {
    // If the element has an ID, use it as the selector
    if (element.id) {
        return '#' + element.id;
    }

    // Otherwise, use the tag name and class list
    let selector = element.tagName.toLowerCase();
    if (element.className) {
        selector += '.' + element.className.split(' ').join('.');
    }

    // This selector might not be unique, but it's a best effort
    return selector;
}
