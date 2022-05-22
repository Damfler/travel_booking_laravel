@extends('layout.index')

@section('title', 'Контакты')

@section('section')
<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Контакты</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>&bullet;</li>
                    <li>Контакты</li>
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

<section class="section contact-section" id="next">
    <div class="container">
        <div class="row">
            <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

                <form action="#" method="post" class="bg-white p-md-5 p-4 mb-5 border">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Имя</label>
                            <input type="text" id="name" class="form-control ">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="phone">Телефон</label>
                            <input type="text" id="phone" class="form-control ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="email">Почта</label>
                            <input type="email" id="email" class="form-control ">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-12 form-group">
                            <label for="message">Ваше сообщение</label>
                            <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Отправить сообщение" class="btn btn-primary text-white font-weight-bold">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-md-10 ml-auto contact-info">
                        <p><span class="d-block">Адрес:</span> <span> ул. Виноградная, д.18, Мценск</span></p>
                        <p><span class="d-block">Телефон:</span> <span> +7 920 083-98-83</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section testimonial-section bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade-up">Комментарии</h2>
            </div>
        </div>
        <div class="row">
            <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>
                    <blockquote>

                        <p>&ldquo;Бывал проездом....только ночью...неплохо....есть номера для отдыха - в основном пользуются дальнобойщиков...шашлык и пирожки вкусные....люблю там пить чай!!!&rdquo;</p>
                    </blockquote>
                    <p><em>&mdash; Сафронов Сергей</em></p>
                </div>

                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>
                    <blockquote>
                        <p>&ldquo;Кормят хорошо, правда как оказалось не всегда. Езжу очень часто заезжаем в кафе наверное я всех девушек из продавщиц знаю, но как оказалось не так. Есть одна мадам к которой я ни кому ни советую даже что либо покупать. Очень странная как будто её весь белый свет нагадил. И разговаривает по хамски, так что я в ее смену даже не войду и другим соаетовать буду что б не ходили!!!&rdquo;</p>
                    </blockquote>
                    <p><em>&mdash; Кузнецов Дмитрий</em></p>
                </div>

                <div class="testimonial text-center slider-item">
                    <div class="author-image mb-3">
                        <img src="images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
                    </div>
                    <blockquote>

                        <p>&ldquo;Два года подряд останавливались в этом кафе. В этом году (2022) тоже. Лучшее кафе по дороге Петрозаводск-Белгород. Еда домашняя, цены очень даже приятные, порции большие. К примеру, брали манты 4 штуки. Одна стоила 25 рублей. Двух штук вполне достаточно взрослому мужчине, при условии, если до был суп. Очень сытно и по-домашнему вкусно!&rdquo;</p>
                    </blockquote>
                    <p><em>&mdash; Филимонов Павел</em></p>
                </div>

            </div>
            <!-- END slider -->
        </div>

    </div>
</section>
@endsection