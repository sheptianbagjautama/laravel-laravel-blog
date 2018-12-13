@extends('template.front')

@section('assets-top')
@endsection

@section('content')
    <!-- Section Slider -->
    <div class="section-slider">
        <div class="container-fluid pl-0 pr-0">
            <div class="owl-slider--home owl-carousel">
                <div class="slider-item slider-item-1">
                    <div class="slider-caption">
                        <h2>WE <span>CREATE</span> PERFECT BRAND DESIGNS</h2>
                        <p>“We transform your craziest ideas into perfect designs which work for your brand.”</p>
                    </div>
                    <div class="slider-image">
                        <img src="{{asset('assets-front/images/slider-image1.png')}} " alt="slider-item">
                    </div>
                </div>
                <div class="slider-item slider-item-2">
                    <div class="slider-image">
                        <img src="{{asset('assets-front/images/slider-image2.png')}} " alt="slider-item">
                    </div>
                    <div class="slider-caption">
                        <h2>Splash your <span>creativity</span></h2>
                        <p>“Estrella is a creative digital agency, composed of creative designers & experienced developers.”</p>
                    </div>
                </div>
                <div class="slider-item slider-item-3">
                    <div class="slider-caption">
                        <h2>It's all about <span>perfection</span>, isn't it?</h2>
                        <p>“Estrella is a creative digital agency, composed of creative designers & experienced developers.”</p>
                    </div>
                    <div class="slider-image">
                        <img src="{{asset('assets-front/images/slider-image3.png')}} " alt="slider-item">
                    </div>
                </div>
            </div>
            <div class="owl-pagination">
                <div class="owl-numbers">
                    <span class="owl-current"></span>
                    <span class="owl-all"></span>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Slider end -->


    <!-- Section Blog Posts -->
    <div class="section-blog-posts">
        <div class="container">
            <div class="row section-blog-posts-row">
                @foreach($posts as $post)
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="section-blog-posts-block mb-space">
                        <a href="{{ url('/allposts/'.$post->slug) }}"><img src="{{ url('uploads/file/'.$post->featured) }}" width="390px" height="390" alt="blog-post-image1"></a>
                        <div class="section-blog-posts-caption">
                            <span class="section-blog-posts-name"> {{ $post->category->name }} </span>
                            <a href="{{ url('/allposts/'.$post->slug) }}"><h4 class="section-blog-posts-title">{{ $post->title }}</h4></a>
                            <p class="section-blog-posts-text">{{ strip_tags(str_limit($post->body,80)) }}</p>
                            <div class="section-blog-posts-info">
                                <span class="section-blog-posts-date">{{ $post->published_at }}</span>
                                <a href="blog-post.html" class="btn btn-r">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            {{--<a href="#" class="section-blog-posts-btn btn btn-md btn-r">LOAD MORE</a>--}}
        </div>
    </div>
    <!-- Section Blog Posts end -->
@endsection

@section('assets-bot')
@endsection










