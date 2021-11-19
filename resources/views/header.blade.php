
    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->

        <div class="topbar-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                        <div class="topsocial">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Flickr"><i class="fa fa-flickr"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                            @if(Auth::check())
                                <a href="#"style="margin-left: 40px;">Hi, &nbsp;{{Auth::user()->name}}</a>
                                <a href="{{route('dangxuat')}}" style="margin-left: 20px;">Đăng xuất</a>
                            @else
                             <a href="{{route('dangnhap')}}" style="margin-left: 40px;"><i style="font-size: 16px;">Đăng nhập</i></a>
                              <a href="{{route('dangki')}}" style="margin-left: 20px;"><i style="font-size: 16px;">Đăng kí</i></a>
                              @endif
                        </div><!-- end social -->
                    </div><!-- end col -->

                    <div class="col-lg-4 hidden-md-down">
                        
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="topsearch text-right">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="fa fa-search"></i> Search</a>
                        </div><!-- end search -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->

        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="garden-index.html"><img src="fontend/images/version/garden-logo.png" alt=""></a>
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Forest Timemenu" aria-controls="Forest Timemenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    {{-- menu --}}
                    <div class="collapse navbar-collapse justify-content-md-center" id="Forest Timemenu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="garden-index.html">Trang chủ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="{{route('Reviewchuyendi')}}" >Review những chuyến đi</a>
                            </li>
                           
                                <a class="nav-link color-green-hover" href="{{route('Tipdiphuot')}}">Tip đi phượt</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="{{route('foodreview')}}">Review ẩm thực</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="{{route('tiptravel')}}">Mẹo du lịch</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="{{route('lienhe')}}">bạn đã theo dõi</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="{{route('lienhe')}}">Liên hệ</a>
                            </li>
                        </ul>
                    </div>
                    {{-- end menu --}}
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="height: 450px; ">
      <img class="d-block w-100" src="fontend/images/slide/slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item" style="height: 450px; ">
      <img class="d-block w-100" src="fontend/images/slide/slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item" style="height: 450px; ">
      <img class="d-block w-100" src="fontend/images/slide/slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>