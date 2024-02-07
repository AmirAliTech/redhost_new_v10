<!-- content close -->
<a href="#" id="back-to-top"></a>
<!-- footer begin -->
<footer class="footer-light">
    <div class="container">
        <div class="row g-custom-x">
            <div class="col-lg-4 pr">
                <img src="images/site/footer_images/logo-white.png" alt="" class="w-75">
                <div class="spacer-20"></div>
                <div class="spacer-10"></div>
                <p>RedHost exclusively offers SSD hosting (including NVMe) which offers a considerably increased speed
                    compared to hosting on servers with HDDs.</p>
                <div>
                    <h5>Follow Us on</h5>
                    <div class="social-icons row">
                        <div class="col-sm-1 pr-10"><a href="#"><i class="fa fa-facebook fa-lg"></i></a></div>
                        <div class="col-sm-2"><a href="#"><i class="fa fa-twitter fa-lg"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="widget">
                            <h5>Quick Links</h5>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="ghid-de-utilizare.php">Ghid de utilizare</a></li>
                                <li><a href="date-personale.php">Date Personale</a></li>
                                <li><a href="conditii-de-utilizare.php">Conditii de utilizare</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="widget">
                            <h5>Servicii</h5>
                            <ul>
                                <li>
                                    <img src="images/site/footer_images/web-ssd1.png" alt="" class="wh-40px">
                                    <a href="gazduire-web-ssd.php">Gazduire Web SSD</a>
                                </li>
                                <li>
                                    <img src="images/site/footer_images/domain123.png" alt="" class="wh-40px">
                                    <a href="domenii.php"> Domenii</a>
                                </li>
                                <li>
                                    <img src="images/site/footer_images/reseller hosting1.png" alt="" class="wh-40px">
                                    <a href="reseller-hosting.php"> Reseller Hosting</a>
                                </li>
                                <li>
                                    <img src="images/site/footer_images/vps1.png" alt="" class="wh-40px">
                                    <a href="vps.php">Servere virtuale (VPS)</a>
                                </li>
                                <li>
                                    <img src="images/site/footer_images/dedicated-server1.png" alt="" class="wh-40px">
                                    <a href="servere-dedicate.php"> Servere Dedicate</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="widget">
                    <div class="widget mb-2 pb-0">
                        <img class="w-100" src="images/site/footer_images/redhostro.png" alt="">
                    </div>
                    <div class="widget mb-2 pb-0">
                        <img class="w-100" src="images/site/footer_images/redhostro_1.png" alt="">
                    </div>
                    <div class="spacer-10"></div>

                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <a href="index.php">
                        Copyright © 2024 By Single Solution. All rights reserved.
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer close -->
</div>


<!-- Javascript Files
    ================================================== -->
<script src="js/plugins.js"></script>
<script src="js/designesia.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://kit.fontawesome.com/5844408008.js" crossorigin="anonymous"></script>

<!-- COOKIES PLUGIN  -->
<script>
    $(document).ready(function() {
        $.cookit({
            messageColor: '#fff',
            linkColor: '#E71F31',
            buttonColor: '#E71F31',
            messageText: "This website uses <b>cookies</b> to ensure you get the best experience on our website.",
            linkText: "Learn more",
            linkUrl: "index.php",
            buttonText: "I accept",
        });
    });
</script>
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    var Swiper2 = new Swiper(".mySwiper2", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    var Swiper3 = new Swiper(".mySwiper3", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    var Swiper4 = new Swiper(".mySwiper4", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    var Swiper5 = new Swiper(".mySwiper5", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    var Swiper6 = new Swiper(".mySwiper6", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });



    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>
</body>



</html>