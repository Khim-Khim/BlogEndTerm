 @extends('master')
 @section('content')

<div class="container">
    
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Vị trí </th>
      <th scope="col">tiêu biểu</th>
      <th scope="col">hình ảnh</th>
      <th scope="col">tiêu đề</th>
      <th scope="col" colspan="2" style="text-align: center;">thao tác</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>test</td>
      <td>đưa lên tiêu điểm</td>
      <td>xóa bài </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>test</td>
       <td>đưa lên tiêu điểm</td>
      <td>xóa bài </td>
    </tr>
    
  </tbody>
</table>
</div>  

 @endsection