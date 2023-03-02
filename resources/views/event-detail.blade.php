@extends('layouts.layout')
@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h2>{{ $data['title'] }}</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Post -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8"> 
                    <img src="{{ $data['image'] }}" class="mb-30" alt="">
                    <h6>{{ $data['category'] }}</h6>
                    <p>{!! $data['content'] !!}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
    