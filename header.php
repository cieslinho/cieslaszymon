<?php
/**
 * @package Ciesla Szymon
 */
?>

<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;800&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    <?php wp_head(); ?>

<body <?php body_class();?>>

    <nav class="nav">
        <div class="container">
            <div class="nav__overlay"></div>
            <div class="nav__navbar">
                <a href="/" class="nav__brand">
                    CieslaSzymon.pl
                    <span>webDeveloper</span>
                </a>




                <ul class="nav__menu">
                    <li class="nav__menu-item"><span class="nav__menu-span">1.</span><a href="/#o-mnie"
                            class="nav__menu-link">o mnie</a></li>
                    <li class="nav__menu-item"><span class="nav__menu-span">2.</span><a href="/realizacje"
                            class="nav__menu-link">realizacje</a></li>
                    <li class="nav__menu-item"><span class="nav__menu-span">3.</span><a href="/#kontakt"
                            class="nav__menu-link">kontakt</a></li>


                    <div class="nav__socials">
                        <p class="nav__socials-text">#socialMedia</p>
                        <div class="nav__socials-icons">
                            <a href="" class="nav__socials-link">
                                <i class='bx bxl-github'></i>
                            </a>
                            <a href="" class="nav__socials-link">
                                <i class='bx bxl-facebook'></i>
                            </a>
                            <a href="" class="nav__socials-link">
                                <i class='bx bxl-instagram'></i>
                            </a>
                            <a href="" class="nav__socials-link">
                                <i class='bx bxl-linkedin-square'></i>
                            </a>
                        </div>
                    </div>

                    <div class="nav__decoration"></div>
                    <div class="nav__decoration nav__decoration-second"></div>

                </ul>






                <button class="nav__btn">
                    <div class="nav__btn-box">
                        <div class="nav__btn-bars"></div>
                    </div>
                </button>

            </div>
        </div>

    </nav>