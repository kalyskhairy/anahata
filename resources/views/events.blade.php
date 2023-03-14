@extends('layouts.layout')
@section('content')

<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/view-anahata-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Blog</h5>
                    <h1>Events</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- News  -->
    <section class="news section-padding bg-black">
        <div class="container">
            <div class="row">
                @foreach($data as $event)
                <div class="col-md-4 mb-30">
                    <!-- <div class="item">
                        <div class="position-re o-hidden"> <img src="{{ $event['image'] }}" alt="" style="max-height:233px;">
                        </div>
                        <div class="con"> <span class="category">
                            <p><a href="/event-detail?title={{ $event['slug'] }}">{{ $event['title'] }}</a></p>
                        </div>
                    </div> -->
                    <div class="card item" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $event['image'] }}" alt="{{ $event['title'] }}" style="height:270px;">
                        <div class="card-body">
                            <h5><a href="{{ url('/event-detail?title=' . $event['slug']) }}">{{$event['title']}}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection