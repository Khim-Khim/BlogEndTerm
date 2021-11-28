@extends('master')
 @section('content')


<div class="align-content-center">
 <h1 style="text-align: center;">Quản lí bài viết của bạn</h1>  
</div>
<div class="container">
<div class="row">
    
   @foreach($follow as $follows)
    <div class="col-md-3">
        <div class="ibox">
            <div class="ibox-content product-box active">

                <div class="post-media" style="width: 210px; height: 130px; display: block; margin-left: auto; margin-right: auto; cursor:pointer">
                      <a href="{{route('chitiet',$follows->id_status)}}" title="">
                            <img src="fontend/images/image/{{$follows->image}}" alt="" class="img-fluid">
                              <div class="hovereffect"></div>
                       </a>
                         </div>
                <div class="product-desc">
                   
           
                    <a href="{{route('chitiet',$follows->id_status)}}" class="product-name" style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 1;
                            line-height: 1.6rem;cursor:pointer">{{$follows->title}}</a>

                    <div class="small m-t-xs">
                       <p> <a href="{{route('chitiet',$follows->id_status)}}" >Click xem chi tiết</a></p>
                    </div>
                      <small class="text-muted" style="margin-left: -10px;">{{$follows->created_at}}</small>
                    
                </div>
            </div>
        </div>
    </div>
@endforeach
    
</div>
</div>
<div class="dmtop">Scroll to Top</div>

 @endsection