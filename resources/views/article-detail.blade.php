@extends('layouts.layout')
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ $data['image'] }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 caption mt-90">
                    <h5>{{ config('constants.hotelName') }}</h5>
                    <h1>{{ $data['title'] }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->
    <section class="rooms-page section-padding" data-scroll-index="1">
        <div class="container">
            <!-- project content -->
            <div class="row">
                <div class="col-md-12"> 
                    <div class="section-subtitle">{{ $data['slug'] }}</div>
                </div>
                <div class="col-md-8">
                    <p class="mb-30">
                        {!! $data['content'] !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection