 @extends('master')
 @section('content')
 <div class="page-title wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <h2><i class="fa fa-leaf bg-green"></i> kết quả tìm kiếm:{{count($search)}} kết quả</h2>
                    </div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('trangchu')}}">trang chủ</a></li>
                            <li class="breadcrumb-item">Tìm kiếm</li>
                            
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

                                @foreach($search as $Search)

                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                             <a href="{{route('chitiet',$Search->id_status)}}" title="">
                                                <img src="fontend/images/image/{{$Search->image}}" style="width: 260px; height: 200px;"class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                       
                                        <h4><a href="{{route('chitiet',$Search->id_status)}}" title="">{{$Search->title}}</a></h4>
                                        <p>{!!$Search->description!!}</p>
                                        
                                        <small><a href="garden-single.html" title="">{{$Search->created_at}}</a></small>
                                        <small><a href="#" title=""></a>{{$Search->name}}</small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">
                                   @endforeach  
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                    
                    </div><!-- end col -->

                  </div>
              </div>


                          
@endsection