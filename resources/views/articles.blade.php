@extends('layouts.layout')
@section('content')

<!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/7.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Latest News</h5>
                    <h1>Our Blog Page</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- News 2 -->
    <section class="news2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        @foreach($articles as $article)
                            <div class="col-md-12">
                                <div class="item">
                                    <div class="post-img">
                                            <img src="{{ $article['image'] }}" alt=""> 
                                    </div>
                                    <div class="post-cont"> 
                                    <a><span class="tag">{{ $article['title'] }}</span></a>
                                        <p>{{ $article['quote'] }}</p>
                                        <div class="butn-dark"> <a href="{{ url('/article-detail?title=' . $article['slug']) }}"><span>Read More</span></a> </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection