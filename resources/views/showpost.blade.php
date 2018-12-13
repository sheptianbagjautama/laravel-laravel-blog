@extends('template.front-2')



@section('content')
    <!-- Section Content -->
    <div class="section-post-content">
        <div class="section-post-content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h5 class="section-post-content-name">{{ $post->category->name }}</h5>
                        <h3 class="section-post-content-title">
                            {{ $post->title }}
                        </h3>
                        <div class="section-post-content-breadcrumbs">
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('allposts') }}">Post</a>
                                </li>
                                <li>
                                    <a href="{{ url('/allposts/'.$post->slug) }}">{{ $post->title }}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="section-post-content-image">
                            <img src="{{ url('uploads/file/'.$post->featured) }} " width="900px" height="600px" alt="wrapper-blog-post-image1">
                        </div>
                        <div class="section-post-content-caption">
                            {{ strip_tags($post->body) }}
                        </div>
                    </div>
                </div>
                <div class="section-post-layout">
                </div>
            </div>
        </div>
    </div>
    <!-- Section Content end -->

    <!-- Section Post Details -->
    <div class="section-post-details">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 align">
                    <div class="section-post-details-info">
                                            <span>
                                            <i class="fa fa-user"></i>John Luis
                                            </span>
                        <span>
                                            <i class="fa fa-calendar"></i>15 Jan 18
                                            </span>
                    </div>
                    <div class="section-post-details-nav">
                        <span>Share</span>
                        <ul class="section-post-details-socials socials socials-red">
                            <li>
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Post Details end -->
    <!-- Section Author Details -->
    <div class="section-author-creditals">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-author-creditals-info clearfix">
                        <div class="section-author-creditals-image">
                            <img src="{{ asset('assets-front/images/section-post-author-image.jpg') }} " class="ssection-author-creditals-image" alt="section-author-image">
                        </div>
                        <div class="section-author-creditals-caption">
                            <span class="section-author-creditals-name">Author <b>John Luis</b></span>
                            <p>Lorem ipsum dolor sit amet, euismod sententiae concludaturque duo et. Et mel invidunt philosophia. Pro eros fabulas voluptua ex. Malorum phaedrum consequat at pro. Porro utinam cu pro.</p>
                            <p>Vix ea dissentiet necessitatibus, eu usu quodsi delenit interpretaris.Ei mentitum oportere sea.  Eu nonumy assentior mea, ea dicta liber reprehendunt vel, cu mucius principes qui.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Author Details end -->
    <!-- Section Related Posts -->
    <div class="section-related-posts">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>OTHER POSTS</h3>
                    <ul class="circles circles--red">
                        <li>
                            <span></span>
                        </li>
                        <li>
                            <span></span>
                        </li>
                        <li>
                            <span></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                @foreach($allPosts as $all)
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="section-related-posts-block mb-space">
                        <img src="{{ url('uploads/file/'.$all->featured) }}" height="390px" width="390px" alt="blog-post-image1">
                        <div class="section-related-posts-caption">
                            <span class="section-related-posts-name">{{ $all->category->name }}</span>
                            <h4 class="section-related-posts-title"> {{$all->title }}</h4>
                            <p class="section-related-posts-text"> {{ strip_tags(str_limit($all->body,80)) }}</p>
                            <div class="section-related-posts-info">
                                <span class="section-related-posts-date"> {{ $all->published_at }}</span>
                                <a href="#" class="btn btn-r">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Section Related Posts end -->
    <!-- Section Comment -->
    <div class="section-comment">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>READ ALL COMMENTS</h3>
                    <ul class="circles circles--red">
                        <li>
                            <span></span>
                        </li>
                        <li>
                            <span></span>
                        </li>
                        <li>
                            <span></span>
                        </li>
                    </ul>
                </div>
            </div>



            {{-- Kondisi jika post mempunyai komen--}}
            @if($post->comments)
            {{-- Kondisi jika memenuhi syarat kondisi pertama maka akan mengambil komen yang ada pada post tersebut dan dialiaskan menjadi $comment--}}
            @foreach($post->comments as $comment)
            {{-- Kondisi data komen yang ditampilkan hanya yang status nya == 1 atau publish --}}
            @if($comment->status == 1)
            <div class="row section-comment-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="section-comment-single">
                        <div class="section-comment-image">
                            <img src="{{ asset('assets-front/images/comment-avatar.jpg') }} " alt="section-comment-image1">
                        </div>
                        <div class="section-comment-caption">
                            <span class="section-comment-name">{{ $comment->name }}</span>
                            <span class="section-comment-date">{{ $comment->created_at }}</span>
                            <p>{{ $comment->body }}</p>
                            {{--<a href="#" class="section-comment-btn btn btn-r btn-md">REPLY</a>--}}
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
            @endif



        </div>
    </div>
    <!-- Section Comment end -->
    <!-- Section Contacts -->
    <div class="section-contacts tc">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h3>LEAVE A COMMENT</h3>
                    <ul class="circles circles--red">
                        <li>
                            <span></span>
                        </li>
                        <li>
                            <span></span>
                        </li>
                        <li>
                            <span></span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <div class="section-contacts-form">



                            {!! Form::open(['route' => ['post.comment', $post->slug], 'method' => 'POST', 'id' => 'contactform', 'name' => 'contactform', 'novalidate' => 'novalidate']) !!}
                            {{ csrf_field() }}
                            {{--<input type="text" name="name">--}}
                        {{--<input type="email" name="email">--}}
                        {{--<input type="text" name="body">--}}
            {{--<button type="submit" >Submit</button>--}}
                            <div class="section-contacts-form-row">
                                <div class="section-contacts-form-group mb-space">
                                    <input type="text" class="section-contacts-form-field  form-control"name="name" placeholder="Name" value="{{ old('name') }}" required>
                                </div>
                                <div class="section-contacts-form-group mb-space">
                                    <input type="email" class="section-contacts-form-field  form-control"  name="email" placeholder="Email" value="{{ old('email') }}" required>
                                </div>
                            </div>
                            <div class="section-contacts-form-row">
                                <div class="section-contacts-form-group mb-space">
                                    <textarea class="section-contacts-form-field section-contacts-form-textarea  form-control" name="body" value="{{ old('body') }}" placeholder="Message" required></textarea>
                                </div>
                            </div>
                            <div class="result-success" style="display: none;"></div>
                            <div class="result-error" style="display: none;"></div>
                            <button type="submit" class="btn btn-lg btn-r">SEND</button>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Section Contacts end -->
@endsection








