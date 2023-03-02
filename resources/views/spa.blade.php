@extends('layouts.layout')
@section('content')

<!-- Spa-Wellness Slider -->
<header class="header slider">
        <div class="owl-carousel owl-theme">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/spa/spa_room_1.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/spa/spa_room_1.jpg"></div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="img/spa/spa_room_1.jpg"></div>
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
                    <div class="section-title">Spa Packages</div>
                    <h6>3 Days 2 Night</h6>
                    <p>Welcome to the Spa Heaven’s package. As one of the most favorite Spa in Ubud, we offer you the unforgettable moment experiencing our Spa Treatment. These are perfect for Couple or Group. Enjoy Bali at its best with this package.</p>
                    <p>Located half way down to Petanu River, our spa offers a complete range of massages and treatments. You can request your spa or massage treatment to be done in your villas or our Tree Spa House.</p>
                </div>
                <div class="col-md-12">
                    <div class="butn-dark mt-15 mb-30"> <a href="/contact"><span>Check Now</span></a> </div>
                </div>
            </div>
        </div>
    </section>
@endsection