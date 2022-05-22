@extends('layout.index')

@section('title', 'События')

@section('section')
<section class="site-hero inner-page overlay" style="background-image: url(images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row site-hero-inner justify-content-center align-items-center">
            <div class="col-md-10 text-center" data-aos="fade">
                <h1 class="heading mb-3">События</h1>
                <ul class="custom-breadcrumbs mb-4">
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>&bullet;</li>
                    <li>События</li>
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

<section class="section blog-post-entry bg-light" id="next">
    <div class="container">

        <div class="row">

            @if(!empty($events))
            @foreach($events as $event)
            <div class="col-lg-4 col-md-6 col-sm-6 col-12 post mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media media-custom d-block mb-4 h-100">
                    <span class="mb-4 d-block"><img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid"></span>
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
        {{ $events->links('include.paginate') }}
    </div>
</section>
@endsection