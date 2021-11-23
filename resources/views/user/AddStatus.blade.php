@extends('master')
 @section('content')

<form action="{{route('thembaiviet')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}">

    <div class="form-group">
    <label for="exampleFormControlFile1">Thêm ảnh tiêu đề</label>
    <input type="file" name="titleImage" class="form-control-file" id="exampleFormControlFile1">
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect1">Loại tin tức</label>
    <select class="form-control" name="type">
      <option value="1">Review những chuyến đi</option>
      <option value="2">Tip đi phượt</option>
      <option value="3">Review ẩm thực</option>
      <option value="4">Mẹo du lịch</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Tiêu đề:</label>
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" >
  </div>


  <div class="form-group">
    <label for="exampleFormControlTextarea1">Nội dung bài viết</label>
    <textarea class="form-control" name="description" id="ckeditor1" rows="3"></textarea>
  </div>
          
  <div class="form-group">
    <label for="exampleFormControlFile1">video:</label>
    <input type="file" name="video" class="form-control-file" id="exampleFormControlFile1">
  </div>
 
  <div class="form-block">
        <button type="submit" class="btn btn-primary btn-lg ">up bài viết</button>
    </div>
</form>



@endsection