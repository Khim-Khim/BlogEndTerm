 @extends('master')
 @section('content')
<div class="container">
    <div class="container">
    <h1 style="text-align:center;">Quản lí bài viết trong blog</h1>
{{-- test --}}
<ul class="list-group" style=" width: 230px; margin-left: 430px; text-align:center;">
  <li class="list-group-item "><a href="{{route('admin')}}" title="">Quản lí bài viết</a></li>
  <li class="list-group-item active">Duyệt bài</li>
 
</ul>
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Vị trí trang </th>
      <th scope="col">tiêu đề</th>
      <th scope="col" style="text-align: center;">hình ảnh</th>
      <th scope="col" colspan="3" style="text-align: center;">thao tác</th>

    </tr>
  </thead>
  <tbody>
   
    @foreach($duyet as $d)
    <tr>
            <td>@switch($d->id_page)
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


      <td>{{$d->title}}</td>
      
    
      <td style="align-items: center;"> <img src="fontend/images/image/{{$d->image}}" style="width: 260px; height: 130px; " class="img-fluid"></td>

       <td><a href="{{route('chitiet',$d->id_status)}}" title="">xem chi tiết</a></td>
        <td><a href="{{route('accept',$d->id_status)}}" title="">duyệt</a> </td>
      <td><a href="{{route('deletestatus',$d->id_status)}}" title="">không duyệt</a> </td>
    </tr>
   @endforeach
 
  </tbody>
</table>
</div>  
</div>
@endsection