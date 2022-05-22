@extends('layout.index')

@section('title', 'Главная страница')

@section('section')
<section class="site-hero overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade-up">
                <span class="custom-caption text-uppercase text-white d-block  mb-3">Добро пожаловать в гостиницу</span>
                <h1 class="heading">Лучшее Место Для Проживания</h1>
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

<section class="section bg-light pb-0">
    <div class="container">

        <div class="row check-availabilty" id="next">
            <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

                <form action="#">
                    <div class="row">
                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                            <label for="checkin_date" class="font-weight-bold text-black">Заезд</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="icon-calendar"></span></div>
                                <input type="text" id="checkin_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
                            <label for="checkout_date" class="font-weight-bold text-black">Выезд</label>
                            <div class="field-icon-wrap">
                                <div class="icon"><span class="icon-calendar"></span></div>
                                <input type="text" id="checkout_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
                            <div class="row">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="adults" class="font-weight-bold text-black">Взрослые</label>
                                    <div class="field-icon-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="adults" class="form-control">
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4+</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="children" class="font-weight-bold text-black">Дети</label>
                                    <div class="field-icon-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="children" class="form-control">
                                            <option value="">0</option>
                                            <option value="">1</option>
                                            <option value="">2</option>
                                            <option value="">3</option>
                                            <option value="">4+</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3 align-self-end">
                            <button class="btn btn-primary btn-block text-white">Посмотреть номера</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                <figure class="img-absolute">
                    <img src="images/food-1.jpg" alt="Image" class="img-fluid">
                </figure>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
            </div>
            <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                <h2 class="heading">Приветствуем!</h2>
                <p class="mb-4">
                    Мотель «Бежин луг» с садом и террасой расположен в поселке Головлево. Расстояние до города Орел составляет 37 км.
                    К услугам гостей ресторан, круглосуточная стойка регистрации, банкомат и бесплатный Wi-Fi. За дополнительную плату предоставляется частная парковка.
                </p>
                <p><a href="{{route('about')}}" class="btn btn-primary text-white py-2 mr-3">Подробнее</a> <span class="mr-3 font-family-serif"><em>или</em></span> <a href="https://vimeo.com/channels/staffpicks/93951774" data-fancybox class="text-uppercase letter-spacing-1">видео</a></p>
            </div>

        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Номера и комнаты</h2>
                <p data-aos="fade-up" data-aos-delay="100">Все номера оснащены шкафом и телевизором с плоским экраном.</p>
            </div>
        </div>
        <div class="row">

            @if(!empty($rooms))
            @foreach($rooms as $room)
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <a href="#" class="room">
                    <figure class="img-wrap">
                        <img src="{{$room->image}}" alt="Free website template" class="img-fluid mb-3">
                    </figure>
                    <div class="p-3 text-center room-info">
                        <h2>{{$room->name}}</h2>
                        <span class="text-uppercase letter-spacing-1">от {{$room->price}}₽</span>
                    </div>
                </a>
            </div>
            @endforeach
            @endif

        </div>
    </div>
</section>


<section class="section slider-section bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Фотографии</h2>
                <p data-aos="fade-up" data-aos-delay="100">Здесь представлены фотографии окрестности гостиницы.</p>
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
<section class="section testimonial-section">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Люди говорят</h2>
            </div>
        </div>
        <div class="row">
            <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

                @if(!empty($comment))
                @foreach($comment as $com)
                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="{{$com->photo}}" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>
                    <blockquote>

                        <p>&ldquo;{{$com->comment}}&rdquo;</p>
                    </blockquote>
                    <p><em>&mdash; {{$com->name}}</em></p>
                </div>
                @endforeach
                @endif

            </div>
            <!-- END slider -->
        </div>

    </div>
</section>


<section class="section blog-post-entry bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">События</h2>
                <p data-aos="fade-up">Интересные и актуальные новости в нашей гостинице</p>
            </div>
        </div>
        <div class="row">
            @if(!empty($events))
            @foreach($events as $event)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

                <div class="media media-custom d-block mb-4 h-100">
                    <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                    <div class="media-body">
                        <span class="meta-post">{{date('d.m.Y', strtotime($event->created_at))}}</span>
                        <h2 class="mt-0 mb-3">{{$event->title}}</h2>
                        <p>{{$event->description}}</p>
                    </div>
                </div>

            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection