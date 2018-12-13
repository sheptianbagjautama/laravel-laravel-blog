@extends('template.front')

@section('assets-top')
@endsection

@section('content')

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










