<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evénement TA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="../../css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body>

    <header>
        <div class="container">
            <div class="nav_content">
                <div class="logo">
                    <a href="/">Logo</a>
                </div>

                <div class="toggle_btn">
                    <i class="fa-solid fa-bars"></i>
                </div>

                <nav class="menudrop">
                    <ul>
                        <li><a href="/">Acceuil</a></li>
                        <li><a href="/services">Services</a></li>
                        <li><a href="/portfolio">PortFolio</a></li>
                        <li><a href="/apropos">A Propos</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </nav>

                <div class="dropdown_menu menu_display">
                    <li><a href="/">Acceuil</a></li>
                    <li><a href="/services">Services</a></li>
                    <li><a href="/portfolio">PortFolio</a></li>
                    <li><a href="/apropos">A Propos</a></li>
                    <li><a href="/contact">Contact</a></li>
                </div>
            </div>
        </div>
    </header>

    <?php echo $content ?>

    <footer>
        <div class="container">
            <div class="footer_content">
                <div class="link">
                    <div class="link_item"><a href="#">À propos</a></div>
                    <div class="link_item"><a href="#">Portfolio</a></div>
                    <div class="link_item"><a href="#">Services</a></div>
                    <div class="link_item"><a href="#">Contact</a></div>
                </div>
                <div class="reseau">
                    <div class="email">
                        <p>traoreadamo@gmail.com</p>
                        <p>+225 05 85 58 98 12</p>
                    </div>
                    <div class="media">
                        <div class="icon"><a href="#"><i class="fa-brands fa-facebook"></i></a></div>
                        <div class="icon"><a href="#"><i class="fa-brands fa-whatsapp"></i></a></div>
                        <div class="icon"><a href="#"><i class="fa-brands fa-instagram"></i></a></div>
                        <div class="icon"><a href="#"><i class="fa-brands fa-pinterest"></i></a></div>
                    </div>
                    <div class="logo">Événements TA</div>
                </div>
            </div>
        </div>
        <div class="footer_down">
            <span>IVOIT AGENCE</span> © Tous Droits Reservés
        </div>
    </footer>

    <script src="../../js/main.js"></script>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        centeredSlides: true,
        slidesPerView: 3,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            340: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
            1280: {
                slidesPerView: 3,
            },
        },
    });
    </script>
</body>

</html>