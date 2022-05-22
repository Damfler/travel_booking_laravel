@extends('layout.index')

@section('title', 'Номера')

@section('section')
<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">Номера</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>&bullet;</li>
                    <li>Номера</li>
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

<section class="section pb-4">
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
                            <button class="btn btn-primary btn-block text-white">Найти</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row">

            @if(!empty($rooms))
            @foreach($rooms as $room)
            <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
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

<section class="section bg-light">

    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-7">
                <h2 class="heading" data-aos="fade">Отличные предложения</h2>
                <p data-aos="fade">Предложения для выбора вашего номера!</p>
            </div>
        </div>

        @if(!empty($rooms))
        @foreach($roomsElite as $i => $room)
        <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
            <a href="#" class="image d-block bg-image-2 {{($i % 2 == 0)?'order-2':'';}}" style="background-image: url('images/img_1.jpg');"></a>
            <div class="text">
                <span class="d-block mb-4"><span class="display-4 text-primary">{{$room->price}}₽</span> <span class="text-uppercase letter-spacing-2">/ за ночь</span> </span>
                <h2 class="mb-4">{{$room->name}}</h2>
                <p>{{$room->description}}</p>
                <p><a href="{{route('reservation')}}" class="btn btn-primary text-white">Забронировать</a></p>
            </div>
        </div>
        @endforeach
        @endif

    </div>
</section>
@endsection