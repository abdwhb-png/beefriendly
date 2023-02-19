<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/b061feacad.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <title>BEE Friendly</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">BEE Friendly </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#feature" class="nav__link">Features</a>
                    </li>
                    <li class="nav__item">
                        <a href="#service" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">Contact</a>
                    </li>
                    <li class="nav__item">
                        @if(Auth::user())
                        <a href="@if(Auth::user()->type == 1) {{ route('admin.home') }} @elseif(Auth::user()->type == 2) {{ route('manager.home') }} @elseif(Auth::user()->type == 0) {{ route('home') }} @endif" class="nav__link">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="nav__link">Login</a>
                        @endif
                    </li>
                </ul>

                <i class="ri-close-line nav__close" id="nav-close"></i>
            </div>

            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-function-line"></i>
            </div>
        </nav>
    </header>

    <main class="main">
        <!------------ HOME ------------>
        <section class="home section" id="home">
            <div class="home_bg">
                <img src="{{ asset('img/bee1.avif') }}" class="home_img" />
            </div>
            <div class="home__container container grid">
                <div class="home__data">

                    <h1 class="home__data-title">
                        Explore The <br />
                        Best
                        <b>BEE Friendly <br />
                            Environment</b>
                    </h1>
                    <a href="#" class="button">Explore</a>
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                        <i class="ri-facebook-box-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                        <i class="ri-instagram-fill"></i>
                    </a>
                    <a href="https://www.linkedin.com/" target="_blank" class="home__social-link">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                </div>

            </div>
        </section>

        <!------------ ABOUT ------------>
        <section class="about section">
            <div class="about__container container grid">
                <div class="about__data">
                    <h2 class="section__title about__title">
                        More Information <br />
                        About Our Company
                    </h2>
                    <p class="about__description">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti magnam beatae autem sint! Totam fugiat perferendis
                        dignissimos sunt dolore nesciunt harum, corporis dolorum repudiandae assumenda quae corrupti quisquam maxime? Eveniet.
                    </p>
                    <a href="#" class="button">Discover our Live Sessions</a>
                </div>

                <div class="about__img">
                    <div class="about__img-overlay">
                        <img src="{{ asset('img/frelon.avif') }}" alt="" class="about__img-one" />
                    </div>

                    <div class="about__img-overlay">
                        <img src="{{ asset('img/bee3.avif') }}" alt="" class="about__img-two" />
                    </div>
                </div>
            </div>
        </section>

        <!------------ FEATURES ------------>
        <section id="feature" class="feature section">
            <div class="title-text">
                <p>FEATURES</p>
                <h1>Why choose us?</h1>
            </div>
            <div class="feature-box">
                <div class="features">
                    <h1>lorem</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-shield"></i>
                        </div>
                        <div class="feature-text">
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti magnam beatae autem sint!
                            Totam fugiat perferendis dignissimos sunt dolore nesciunt harum, corporis dolorum
                            repudiandae assumenda quae corrupti quisquam maxime? Eveniet.
                        </div>
                    </div>

                    <h1>lorem</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-handshake-o"></i>
                        </div>
                        <div class="feature-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae eos ea laborum aperiam minima
                            id fuga distinctio reiciendis ad minus, architecto voluptates repellendus nemo accusantium,
                            numquam, non qui. Debitis, possimus!
                        </div>
                    </div>
                    <h1>lorem</h1>
                    <div class="features-desc">
                        <div class="feature-icon">
                            <i class="fa fa-inr"></i>
                        </div>
                        <div class="feature-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fugiat cupiditate
                            distinctio, veniam autem nisi doloremque excepturi at officia ad, incidunt, vero consequatur
                            id rem. Debitis reprehenderit aliquid suscipit vel.
                        </div>
                    </div>
                </div>
                <div class="features-img">
                    <div class="img_box">
                        <h3>+07 years of experience</h3>
                        <img src="{{ asset('img/bee_hive.avif') }}" />
                        <div class="lay"></div>
                    </div>
                </div>
            </div>
        </section>



        <!------------ SERVICES ------------>
        <section id="service" class="service section">
            <div class="title-text">
                <p>SERVICES</p>
                <h1>We Provide Better</h1>
            </div>
            <div class="service-box">
                <div class="single-service">
                    <img src="{{ asset('img/niche.avif') }}" />
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Lorum</h3>
                        <hr />
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae fugiat cupiditate distinctio, veniam autem nisi
                            doloremque excepturi
                        </p>
                    </div>
                </div>
                <div id="a1" class="single-service">
                    <img src="{{ asset('img/rsb.png') }}" />
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>JS Course</h3>
                        <hr />
                        <p>
                            Because now Js is a very worldwide programming language , we
                            will concentrate in it and make more course .
                        </p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="{{ asset('img/apiculture.jpg') }}" />
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Web Design</h3>
                        <hr />
                        <p>
                            You will learn the concept of Web Design because it is one of
                            the basics of studying front end and web developpement .
                        </p>
                    </div>
                </div>
                <div class="single-service">
                    <img src="{{ asset('img/filet.jpg') }}" />
                    <div class="overlay"></div>
                    <div class="service-desc">
                        <h3>Team working</h3>
                        <hr />
                        <p>
                            Now the popularity of societies are working in group and devide
                            the work between staff members to reduce Time so Here you will
                            learn how to work with others in groups .
                        </p>
                    </div>
                </div>

        </section>


        <!-- CONTACT SECTION START -->
        <section class="contact" id="contact">
            <h2 class="section__title">Contact Us</h2>
            <div class="contact-container">
                <div class="form">
                    <div class="contact-info">
                        <h3 class="title">Let's get in Touch</h3>
                        <p class="contact_text">
                            If you have any problem , you can contact us using this form !
                        </p>

                        <div class="info">
                            <div class="information">
                                <i class="fa fa-map-marker"></i>
                                <p>Mahdia, Tunisia</p>
                            </div>

                            <div class="information">
                                <i class="fa fa-phone"></i>
                                <p>+216 20 526 895</p>
                            </div>
                        </div>

                        <div class="social-media">
                            <p>Connect with me :</p>
                            <div class="social-icons">
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://instagram.com/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-form">
                        <span class="circle one"></span>
                        <span class="circle two"></span>

                        <form id="myForm">
                            <h3 class="title">Contact us</h3>
                            <div class="input-container">
                                <input type="text" name="name" class="input" id="name" required
                                    placeholder="Username" />
                                <span>Username</span>
                            </div>
                            <div class="input-container">
                                <input type="email" name="email" class="input" id="email" required
                                    placeholder="E-mail" />

                                <span>Email</span>
                            </div>
                            <div class="input-container">
                                <input type="subject" name="subject" class="input" id="subject" required
                                    placeholder="Subject" />
                                <span>Subject</span>
                            </div>
                            <div class="input-container textarea">
                                <textarea name="message" class="input" id="message" required
                                    placeholder="Type your message here!!"></textarea>
                                <span>Message</span>
                            </div>
                            <input type="submit" value="Send Message" class="btn" />
                        </form>
                    </div>
                </div>
            </div>
        </section>


        <!------------ FOOTER ------------>
        <footer id="footer" class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">Coding</h3>
                        <p class="footer__description">
                            Learn Coding for one day <br />
                            & become a Coder for<br />
                            Everyday.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://www.linkedin.com/" target="_blank" class="footer__social">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">About Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Features</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">New & Blog</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan y Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Become a member</a>
                            </li>
                        </ul>
                    </div>

                    <div class="footer__data">
                        <h3 class="footer__subtitle">Support</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="#" class="footer__link">FAQs</a>
                            </li>
                            <li class="footer__item">
                                <a href="#contact" class="footer__link">Support Center</a>
                            </li>
                            <li class="footer__item">
                                <a href="#contact" class="footer__link">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">
                        &copy; 2022 | MagherbiMH. All rigths reserved.
                    </p>
                    <div class="footer__terms">
                        <a href="#" class="footer__terms-link">Terms & Agreements</a>
                        <a href="#" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!------------ SCRIPTS ------------>
        <script src="{{ asset('js/scrollreveal.min.js') }}"></script>
        <script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>