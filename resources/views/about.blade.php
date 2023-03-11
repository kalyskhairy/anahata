@extends('layouts.layout')
@section('content')
<!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/anahata-room.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>{{ config('constants.hotelName') }}</h5>
                    <h1>About Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- About -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp"> 
                    <span>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                        <i class="star-rating"></i>
                    </span>
                    <div class="section-title">Vision</div>
                    <p>Anahata started its operation in November 2004. It was set up with a vision to be a natural retreat for mind, body and soul.</p>
                    <p>The name of Anahata comes from a Sanskrit word, which means love, compassion and harmony. In Yoga, it signifies as the heart chakra-the center of energy located in the heart region.</p>
                    
                </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="img/view-anahata-1.jpg" alt="" class="mt-90 mb-30"> </div>
                <div class="col col-md-3 animate-box" data-animate-effect="fadeInUp"> <img src="img/view-anahata-2.jpg" alt=""> </div>
            </div>
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-title">Resort</div>
                    <p>The resort was built using modern Balinese architecture concept. The interior looks very artistic, decorated with a beautiful flower arrangement and Balinese art works.</p>
                    <p>Anahata villas are build based on 3 story villas to make most the majestic environment in which they stand. Extensive glass windows grace each level, offering views of thickly forested hills and landscape gardens.</p>

                    <p>Each villa features a private plunge pool built of traditional stone. The master bedroom located on the third floor, complete with king-size bed, suite bathroom and lounge bed.</p>
                    <p>The villas's communal area located on the mid-level ( second floor ) - comparising a spacious living room, dining room and pantry. The ground floor houses two bedroom each with Individual bathroom.</p>

                    <div class="section-title">Accommodation</div>
                    <p>The resort has a total of 10 villas and 5 suites room. Each villa consists of a 200 m<sup>2</sup>, 3 story building, with the following features :</p>
                    <p>- Master bedroom ( double ) located on 3rd floor</p>
                    <p>- Living & dining room and pantry located on the 2nd floor</p>
                    <p>- Two guest bedrooms ( twin ) are located on the 1st floor</p>
                    <p>- Each bedroom has a private bathroom</p>
                    <p>- Each villa has a private plunge pool and 120 m<sup>2</sup> private garden</p>
                </div>
            </div>
        </div>
    </section>
@endsection