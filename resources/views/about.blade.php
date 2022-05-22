@extends('layout.index')

@section('title', 'О нас')

@section('section')
<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">О нас</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>&bullet;</li>
                    <li>О нас</li>
                </ul>
            </div>
        </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
        <div class="mouse-icon">
            <span class="mouse-wheel"></span>
        </div>
    </a>
</section>
<!-- END section -->

<section class="py-5 bg-light" id="next">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                <figure class="img-absolute">
                    <img src="images/food-1.jpg" alt="Free Website Template by Templateux" class="img-fluid">
                </figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                <h2 class="heading">Приветствуем!</h2>
                <p class="mb-4">Мотель «Бежин луг» с садом и террасой расположен в поселке Головлево. Расстояние до города Орел составляет 37 км.
                    К услугам гостей ресторан, круглосуточная стойка регистрации, банкомат и бесплатный Wi-Fi. За дополнительную плату предоставляется частная парковка.</p>
                <p><a href="{{route('about')}}" class="btn btn-primary text-white py-2 mr-3">Подробнее</a> <span class="mr-3 font-family-serif"><em>или</em></span> <a href="https://vimeo.com/channels/staffpicks/93951774" data-fancybox class="text-uppercase letter-spacing-1">Видео</a></p>
            </div>

        </div>
    </div>
</section>

<div class="container section">

    <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7 mb-5">
            <h2 class="heading" data-aos="fade-up">Руководство</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="block-2">
                <div class="flipper">
                    <div class="front" style="background-image: url(images/person_3.jpg);">
                        <div class="box">
                            <h2>Филимонов Павел</h2>
                            <p>Бизнес-менеджер</p>
                        </div>
                    </div>
                    <div class="back">
                        <!-- back content -->
                        <blockquote>
                            <p>&ldquo;Занимаюсь рутиной не легкой!&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_3.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Филимонов Павел <span class="position">Бизнес-менеджер</span></div>
                        </div>
                    </div>
                </div>
            </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="block-2">
                <!-- .hover -->
                <div class="flipper">
                    <div class="front" style="background-image: url(images/person_1.jpg);">
                        <div class="box">
                            <h2>Сафронов Сергей</h2>
                            <p>Создатель сайта</p>
                        </div>
                    </div>
                    <div class="back">
                        <!-- back content -->
                        <blockquote>
                            <p>&ldquo;Я сделал этот сайт для вас!&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_1.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Сафронов Сергей <span class="position">Создатель сайта</span></div>
                        </div>
                    </div>
                </div>
            </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="block-2">
                <div class="flipper">
                    <div class="front" style="background-image: url(images/person_2.jpg);">
                        <div class="box">
                            <h2>Кузнецов Дмитрий</h2>
                            <p>Директор по маркетингу</p>
                        </div>
                    </div>
                    <div class="back">
                        <!-- back content -->
                        <blockquote>
                            <p>&ldquo;Я директор по маркейтингу, мои задачи, ну типа реклама.&rdquo;</p>
                        </blockquote>
                        <div class="author d-flex">
                            <div class="image mr-3 align-self-center">
                                <img src="images/person_2.jpg" alt="">
                            </div>
                            <div class="name align-self-center">Кузнецов Дмитрий <span class="position">Директор по маркетингу</span></div>
                        </div>
                    </div>
                </div>
            </div> <!-- .flip-container -->
        </div>
    </div>
</div>
<!-- END .block-2 -->

<section class="section slider-section bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Фотографии</h2>
                <p data-aos="fade-up" data-aos-delay="100">Прекрасный вид нашего здания и наших окресностей.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="slider-item">
                        <a href="images/slider-1.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-1.jpg" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="images/slider-2.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-2.jpg" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="images/slider-3.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-3.jpg" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="images/slider-4.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-4.jpg" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="images/slider-5.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-5.jpg" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="images/slider-6.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-6.jpg" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                    <div class="slider-item">
                        <a href="images/slider-7.jpg" data-fancybox="images" data-caption="Caption for this image"><img src="images/slider-7.jpg" alt="Image placeholder" class="img-fluid"></a>
                    </div>
                </div>
                <!-- END slider -->
            </div>

        </div>
    </div>
</section>
<!-- END section -->

@endsection