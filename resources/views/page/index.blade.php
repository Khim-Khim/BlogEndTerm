 @extends('master')
 @section('content')


<div class="title" style="align-items: center;">
    <h2 style="margin-left: 190px; margin-top: 150px;">có thể bạn muốn xem:</h2>
</div>
    
</div>
        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-list clearfix">
                        @foreach($hotstatus as $hot)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{route('chitiet',$hot->id)}}" title="">
                                          {{-- image --}}      <img src="fontend/images/image/{{$hot->image}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                       <span class="bg-aqua"><a href="garden-category.html" title="">HOT</a></span>
                    {{-- title --}}      <h4><a href="garden-single.html" title="">{{$hot->title}}</a></h4>
 {{-- description --}}                               <p>{{$hot->description}}</p>
                                        
                        {{-- dayupdate --}}            <small><a href="garden-single.html" title="">{{$hot->created_at}}</a></small>
                        
                         {{--  name user --}}  
                                  

                                     <small><a href="#" title=""></a></small>
                                    
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                @endforeach


                                {{-- QUANG CAO --}}
                                <div class="row">
                                    <div class="col-lg-10 offset-lg-1">
                                        <div class="banner-spot clearfix">
                                            <div class="banner-img">
                                                <img src="fontend/upload/banner_05.jpg" alt="" class="img-fluid">
                                            </div><!-- end banner-img -->
                                        </div><!-- end banner -->
                                    </div><!-- end col -->
                                </div><!-- end row -->

                                <hr class="invis">
                                    @foreach($advertisement as $ad)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="garden-single.html" title="">
                                                <img src="fontend/images/image/{{$ad->image}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <span class="bg-aqua"><a href="garden-category.html" title="">hot</a></span>
                                        <h4><a href="garden-single.html" title="">{{$ad->title}}</a></h4>
                                        <p>{{$ad->description}}</p>
                                        
                                        <small><a href="garden-single.html" title="">{{$ad->created_at}}</a></small>
                                        
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                    @endforeach
                               


                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                       <div class="row">{{$advertisement->links()}}</div>
                                        

                                    </ul>
                                </nav>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                                   
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Tìm kiếm:</h2>
                                <form class="form-inline search-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search on the site">
                                    </div>
                                    <button type="submit" class="btn btn-primary" style=" margin-right: 16px;"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Nhiều người đã đọc:</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        @foreach($view as $views)
                                        <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="fontend/images/image/{{$views->image}}" alt="" style="width: 40px; height:40px;" class="img-fluid float-left">
                                                <h5 class="mb-1">{{$views->title}}</h5>
                                                <small>{{$views->created_at}}</small>
                                            </div>
                                        </a>

                                       @endforeach

                                       
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                           
                            <div class="widget">
                                <h2 class="widget-title">Check In nổi bật</h2>
                                <div class="instagram-wrapper clearfix">
                                    <a href="#"><img src="fontend/upload/garden_sq_01.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="fontend/upload/garden_sq_02.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="fontend/upload/garden_sq_03.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="fontend/upload/garden_sq_04.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="fontend/upload/garden_sq_05.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="fontend/upload/garden_sq_06.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="fontend/upload/garden_sq_07.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="fontend/upload/garden_sq_08.jpg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="fontend/upload/garden_sq_09.jpg" alt="" class="img-fluid"></a>
                                </div><!-- end Instagram wrapper -->
                            </div><!-- end widget -->

                          
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@endsection