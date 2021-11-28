@extends('master')
 @section('content')

  <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i> Bài viết </h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('trangchu')}}">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Bài viết</li>
                        </ol>
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                               

                                <h3>{{$detail->title}}</h3>

                                <div class="blog-meta big-meta">
                                    <small><a href="garden-single.html" title="">{{$detail->created_at}}</a></small>
                                    <small><a href="blog-author.html" title="">{{$detail->name}}</a></small>
                                    
                                </div><!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        @if(Auth::check())
                                       @if($check =="1")
                                      <li><button type="button" class="btn btn-primary" style=" width: 150px; height: 50px;"><a href="{{route('deletefollow',$detail->id_status)}}" style="color:white;"> bỏ theo dõi</a></button></li>
                                        @else
                                        <li><button type="button" class="btn btn-primary" style=" width: 150px; height: 50px;"><a href="{{route('addfollow',$detail->id_status)}}" style="color:white;">theo dõi</a></button></li>
                                        @endif
                                        @endif
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <video width="800" height="640" autoplay muted>
                                        <source src="fontend/images/video/sapa.mp4" type="video/mp4">
                                         <source src="movie.ogg" type="video/ogg">
                                      Your browser does not support the video tag.
                                                </video>
                            </div><!-- end media -->

                            <div class="blog-content">  
                               {!! $detail->description !!}
                            <div class="blog-title-area">
                               

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        @if(Auth::check())
                                        <li><button type="button" class="btn btn-primary" style=" width: 150px; height: 50px;"><a href="{{route('addfollow',$detail->id_status)}}" style="color:white;">theo dõi</a></button></li>
                                        @endif
                                    </ul>
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="banner-spot clearfix">
                                        <div class="banner-img">
                                            <img src="upload/banner_01.jpg" alt="" class="img-fluid">
                                        </div><!-- end banner-img -->
                                    </div><!-- end banner -->
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <hr class="invis1">

                           
                                </div><!-- end row -->
                            </div><!-- end author-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">You may also like</h4>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="garden-single.html" title="">
                                                    <img src="fontend/upload/garden_single_03.jpg" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="public/fontend/upload/garden-single.html" title="">We are guests of ABC Design Studio</a></h4>
                                                <small><a href="blog-category-01.html" title="">Trends</a></small>
                                                <small><a href="blog-category-01.html" title="">21 July, 2017</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                    
                                    <div class="col-lg-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="garden-single.html" title="">
                                                    <img src="fontend/upload/garden_single_03.jpg" alt="" class="img-fluid">
                                                    <div class="hovereffect">
                                                        <span class=""></span>
                                                    </div><!-- end hover -->
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta">
                                                <h4><a href="garden-single.html" title="">Nostalgia at work with family</a></h4>
                                                <small><a href="blog-category-01.html" title="">News</a></small>
                                                <small><a href="blog-category-01.html" title="">20 July, 2017</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">{{count($comment)}} Comments</h4>
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="comments-list">
                                            @foreach ($comment as $cmt)
                                            <div class="media">
                                                <a class="media-left" href="#">
                                                    <img src="upload/author.jpg" alt="" class="rounded-circle">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading user_name">{{$cmt->name}}<small>{{$cmt->created_at}}</small></h4>
                                                    <p>{{$cmt->comment}}</p>
                                                    <a href="#" class="btn btn-primary btn-sm">Reply</a>
                                                </div>
                                            </div>
                                           @endforeach
                                        </div>
                                    </div><!-- end col -->
                                </div><!-- end row -->
                            </div><!-- end custom-box -->

                            <hr class="invis1">

                            <div class="custombox clearfix">
                                <h4 class="small-title">Leave a Reply</h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        @if(Auth::check())
                                        <form  action="{{route('comment',$detail->id_status)}}" method="post" class="form-wrapper" style="width: 1100px; margin-top:30px;">
                                                @csrf
                                            <textarea class="form-control" name="comment" placeholder="Your comment" style=" width:730px;"></textarea>
                                            <button type="submit" class="btn btn-primary" style=" width:730px;">Bình luận</button>
                                        </form>
                                        @else
                                        <h3 style="text-align: center; color:red;">Bạn cần đăng nhập để bình luận</h3>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                  
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
  


 @endsection