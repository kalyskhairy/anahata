@extends('layouts.layout')
@section('content')
<!-- Spa-Wellness Slider -->
<header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/yoga-barn.jpeg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/yoga-function.jpg"></div>
        </div>
        <!-- arrow down -->
        <div class="arrow bounce text-center">
            <a href="#" data-scroll-nav="1" class=""> <i class="ti-arrow-down"></i> </a>
        </div>
    </header>
    <!-- Spa-Wellness Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <span><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></span>
                    <div class="section-subtitle">So Many Ways to Unwind</div>
                    <div class="section-title">Yoga Packages</div>
                    <h6>5 Night</h6>
                    <p class="mb-30">This package is perfect for Yoga Lovers. Periodically, we will hold Yoga activities with International standard Instructor at Anahata Villas & Spa Resort Ubud. Practice your Yoga activities with the Nature surroundings.</p>
                </div>
                <div class="col-md-12">
                    <ul>
                        <li>- A Three bedroom villa accommodation with living room, dining room, kitchenette and private pool</li>
                        <li>- Welcome drink and fruit upon arrival</li>
                        <li>- Daily healthy breakfast, lunch and dinner at the restaurant</li>
                        <li>- Free welcome massage (15 minutes) upon arrival at the spa house</li>
                        <li>- Two times yoga and meditation course</li>
                        <li>- Free tour guide river to Anahata Oasis</li>
                        <li>- Daily healthy lunch and dinner</li>
                    </ul>
                    <p>Invite your friends and enjoy our special rate for Yoga Lovers…</p>
                </div>
                <div class="col-md-12">
                    <div class="butn-dark mt-15 mb-30"> <a href="/contact"><span>Check Now</span></a> </div>
                </div>
            </div>
        </div>
    </section>
@endsection