@extends('layout.index')

@section('title', 'Бронирование')

@section('section')
<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Форма бронирование</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>&bullet;</li>
                    <li>Бронирование</li>
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
                            <label class="text-black font-weight-bold" for="name">ФИО</label>
                            <input type="text" id="name" class="form-control ">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="phone">Телефон</label>
                            <input type="text" id="phone" class="form-control ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="email">Email</label>
                            <input type="email" id="email" class="form-control ">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="checkin_date">Дата заселения</label>
                            <input type="text" id="checkin_date" class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label class="text-black font-weight-bold" for="checkout_date">Дата выезда</label>
                            <input type="text" id="checkout_date" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
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
                        <div class="col-md-6 form-group">
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



                    <div class="row mb-4">
                        <div class="col-md-12 form-group">
                            <label class="text-black font-weight-bold" for="message">Заметка</label>
                            <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Забронировать" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-md-10 ml-auto contact-info">
                        <p><span class="d-block">Адрес:</span> <span class="text-black"> ул. Виноградная, д.18, Мценск</span></p>
                        <p><span class="d-block">Телефон:</span> <span class="text-black"> +7 920 083-98-83</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection