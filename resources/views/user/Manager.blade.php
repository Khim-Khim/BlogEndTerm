 @extends('master')
 @section('content')

<div class="align-content-center">
 <h1 style="text-align: center;">Quản lí bài viết của bạn</h1>  
</div>
<div class="container">
<div class="row">
    
   @foreach($data as $datas)
    <div class="col-md-3">
        <div class="ibox">
            <div class="ibox-content product-box active">

                <div class="post-media" style="width: 210px; height: 130px; display: block; margin-left: auto; margin-right: auto; cursor:pointer">
                      <a href="{{route('chitiet',$datas->id_status)}}" title="">
                            <img src="fontend/images/image/{{$datas->image}}" alt="" class="img-fluid">
                              <div class="hovereffect"></div>
                       </a>
                         </div>
                <div class="product-desc">
                   
           
                    <a href="{{route('chitiet',$datas->id_status)}}" class="product-name" style="display: -webkit-box;
                            max-height: 3.2rem;
                           -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            white-space: normal;
                            -webkit-line-clamp: 1;
                            line-height: 1.6rem;cursor:pointer">{{$datas->title}}</a>

                    <div class="small m-t-xs">
                       <p> <a href="{{route('chitiet',$datas->id_status)}}" >Click xem chi tiết</a></p>
                    </div>
                      <small class="text-muted" style="margin-left: -10px;">{{$datas->created_at}}</small>
                    <div class="m-t text-righ" style="margin-top: 15px; margin-bottom: -25px;">
                        <a href="{{route('suabaiviet',$datas->id_status)}}" class="btn btn-xs btn-outline btn-primary">chỉnh sửa </a>
                        <a href="{{route('xoabaiviet',$datas->id_status)}}" class="btn btn-xs btn-outline btn-primary" style=" position: absolute; margin-left: 28px;">xóa </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
    
</div>
</div>
<div class="dmtop">Scroll to Top</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><a href="{{route('thembaiviet')}}" title="">Thêm bài viết</a></button>

<style>

#myBtn {
    width: 60px;
    height: 60px;
    display: none;
    position: fixed;
    bottom: 25px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: ;
    color: white;
    cursor: pointer;
    padding: 4px;
    margin-left: 20px;
    border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>


<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

</script>
@endsection
