@extends('layouts.layout')
@section('content')

<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="img/anahata-room.jpeg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Get in touch</h5>
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>{{ config('constants.hotelName') }}</h3>
                    <p>
                        If you can't find what you're looking for, don't hesitate to contact us. We are here to help you.
                    </p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Reservation</p> <a href="tel:03618987991">0361 8987 991</a> <br>
                            <a href="tel:08118748910">+62811 8748 910</a>
                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>Email Info</p> <a href="mailto:salesmanager@anahataresort.com">salesmanager@anahataresort.com</a> <br>
                            <a href="mailto:salesexecutive@anahataresort.com">salesexecutive@anahataresort.com</a>
                        </div>
                    </div>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>Address</p> Br Umah Anyar, Pejeng Kaja, Kec. Tampak Siring, Gianyar, Bali
                            <br>Po Box 1011, Bali, 80571 Ubud, Indonesia
                        </div>
                    </div>
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15784.751923607342!2d115.26577593955074!3d-8.481094999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd222aa7e0f834f%3A0xd2dff4f03ba32935!2sAnahata%20Villas%20%26%20Spa%20Resort!5e0!3m2!1sid!2sid!4v1677663878797!5m2!1sid!2sid" width="100%" height="600" style="border:0;"loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                
                </div>
            </div>
        </div>
    </section>
@endsection