 @extends('master')
 @section('content')

        <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i> Food tour </h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('trangchu')}}">trang chủ</a></li>
                            <li class="breadcrumb-item">Food tour </li>
                            
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
                            <div class="blog-list clearfix">

                                @foreach($food as $foods)

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{route('chitiet',$foods->id)}}" title="">
                                                <img src="fontend/images/image/{{$foods->image}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        
                                        <h4><a href="garden-single.html" title="">{{$foods->title}}</a></h4>
                                        <p>{{$foods->description}}</p>
                                        
                                        <small><a href="garden-single.html" title="">{{$foods->created_at}}</a></small>
                                        <small><a href="#" title=""></a>{{-- {{$foods->name}} --}}</small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                   @endforeach  
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">
                      
                       <div class="row">{{$food->links()}}</div>
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Search</h2>
                                <form class="form-inline search-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search on the site">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Quảng cáo kiếm cơm</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        @foreach ($advertisement as $ad)
                                        <a href="garden-single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="upload/garden_sq_09.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-1">{{$ad->title}}</h5>
                                                <small>{{$ad->created_at}}</small>
                                            </div>
                                        </a>

                                        @endforeach

                                        
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            

                           

                            <div class="widget">
                                <h2 class="widget-title">Danh mục</h2>
                                <div class="link-widget">
                                    <ul>
                                        <li><a href="{{route('Reviewchuyendi')}}">Review những chuyến đi<span>(21)</span></a></li>
                                        <li><a href="{{route('Tipdiphuot')}}">Tip đi phượt <span>(15)</span></a></li>
                                        <li><a href="{{route('foodreview')}}">Review ẩm thực <span>(31)</span></a></li>
                                        <li><a href="{{route('tiptravel')}}">Mẹo du lịch <span>(22)</span></a></li>
                                     
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
        <div class="dmtop">Scroll to Top</div>

 @endsection