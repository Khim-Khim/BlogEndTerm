 @extends('master')
 @section('content')

<div class="container">
    <h1 style="text-align:center;">Quản lí bài viết trong blog</h1>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Vị trí trang </th>
      <th scope="col">tin tiêu biểu</th>
      <th scope="col">tiêu đề</th>
      <th scope="col">hình ảnh</th>
      <th scope="col" colspan="3" style="text-align: center;">thao tác</th>

    </tr>
  </thead>
  <tbody>
    @foreach($getStatus as $load)
    <tr>
      <th scope="row">{{$load->id_status}}</th>
      <td>@switch($load->id_page)
          @case("1")
          Review những chuyến đi
          @break
          @case("2")
          tip đi phượt
          @break
          @case("3")
          Review ẩm thực
          @break
          @case("4")
          Mẹo du lịch
          @break
          @endswitch</td>

      <td>@if($load->hot=="1")
          tin trang chủ
          @else
          tin thường
          @endif
      </td>
      <td>{{$load->title}}</td>
      <td> <img src="fontend/images/image/{{$load->image}}" style="width: 260px; height: 100px;" class="img-fluid"></td>
       <td><a href="{{route('chitiet',$load->id_status)}}" title="">xem chi tiết</a></td>
       <td><a href="{{route('hotstatus',$load->id_status)}}" title="">
         @if($load->hot=="1")
          gỡ tin khỏi tin hot
          @else
          lên trang tin hot
          @endif
       </a></td>
      <td><a href="{{route('deletestatus',$load->id_status)}}" title="">xóa bài </a> </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>  

 @endsection