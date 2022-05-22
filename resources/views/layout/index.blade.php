<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <header class="site-header js-site-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-lg-4 site-logo" data-aos="fade"><a href="{{route('home')}}">Бежин Луг</a></div>
                <div class="col-6 col-lg-8">


                    <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <!-- END menu-toggle -->

                    <div class="site-navbar js-site-navbar">
                        <nav role="navigation">
                            <div class="container">
                                <div class="row full-height align-items-center">
                                    <div class="col-md-6 mx-auto">
                                        <ul class="list-unstyled menu">
                                            @if (request()->routeIs('home'))
                                            <li class="active"><a href="{{route('home')}}">Главная</a></li>
                                            @else
                                            <li><a href="{{route('home')}}">Главная</a></li>
                                            @endif

                                            @if (request()->routeIs('rooms'))
                                            <li class="active"><a href="{{route('rooms')}}">Номера</a></li>
                                            @else
                                            <li><a href="{{route('rooms')}}">Номера</a></li>
                                            @endif

                                            @if (request()->routeIs('about'))
                                            <li class="active"><a href="{{route('about')}}">О нас</a></li>
                                            @else
                                            <li><a href="{{route('about')}}">О нас</a></li>
                                            @endif

                                            @if (request()->routeIs('events'))
                                            <li class="active"><a href="{{route('events')}}">События</a></li>
                                            @else
                                            <li><a href="{{route('events')}}">События</a></li>
                                            @endif

                                            @if (request()->routeIs('contact'))
                                            <li class="active"><a href="{{route('contact')}}">Контакты</a></li>
                                            @else
                                            <li><a href="{{route('contact')}}">Контакты</a></li>
                                            @endif

                                            @if (request()->routeIs('reservation'))
                                            <li class="active"><a href="{{route('reservation')}}">Бронирование</a></li>
                                            @else
                                            <li><a href="{{route('reservation')}}">Бронирование</a></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END head -->

    @yield('section')

    <section class="section bg-image overlay" style="background-image: url('images/hero_4.jpg');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
                    <h2 class="text-white font-weight-bold">Лучшее Место Для Проживания. Зарезервируйте Прямо сейчас!</h2>
                </div>
                <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
                    <a href="{{route('rooms')}}" class="btn btn-outline-white-primary py-3 text-white px-5">Зарезервируйте Сейчас</a>
                </div>
            </div>
        </div>
    </section>

    <footer class="section footer-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-4 mb-5">
                    <ul class="list-unstyled link">
                        <li><a href="{{route('about')}}">О нас</a></li>
                        <li><a href="#">Правила и условия</a></li>
                        <li><a href="#">Политика конфиденциальности</a></li>
                        <li><a href="{{route('rooms')}}">Номера</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-5">
                    <ul class="list-unstyled link">
                        <li><a href="{{route('rooms')}}">Номера и комнаты</a></li>
                        <li><a href="{{route('about')}}">О нас</a></li>
                        <li><a href="#">Связаться с нами</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-5 pr-md-5 contact-info">
                    <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
                    <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Адрес:</span> <span> ул. Виноградная, д.18, Мценск</span></p>
                    <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Телефон:</span> <span> +7 920 083-98-83</span></p>
                </div>
            </div>
            <div class="row pt-5">
                <p class="col-md-6 text-left">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Диплом Сафронова Сергея | ИС-4-356 | &copy; <script>
                        document.write(new Date().getFullYear());
                    </script></a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>

                <p class="col-md-6 text-right social">
                    <a href="#"><span class="fa fa-tripadvisor"></span></a>
                    <a href="#"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-vimeo"></span></a>
                </p>
            </div>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>


    <script src="js/aos.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>



    <script src="js/main.js"></script>
</body>

</html>