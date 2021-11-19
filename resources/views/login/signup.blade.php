 @extends('master')
 @section('content')
<form action="{{route('dangkiform')}}" method="post" class="beta-form-checkout">
   @csrf
   @if(count($errors)>0)
                  <div class="alert alert-danger" style="text-align: center;">
                     <ul>
                        
                     @foreach($errors->all() as $err)
                           {{$err}}
                     @endforeach
                     </ul>
                  </div>
               @endif

               @if(Session::has('thanhcong'))
               <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
               @endif
   <div class="container">
     <h1>Form Đăng Ký</h1>
     <p>Xin hãy nhập biểu mẫu bên dưới để đăng ký.</p>
     <hr>
      <label for="email"><b>Tên của bạn:</b></label>
     <input type="text" placeholder="Nhập tên" name="name" required>
    <label for="email"><b>Email</b></label>
     <input type="text" placeholder="Nhập Email" name="email" required>
     <label for="email"><b>số điện thoại</b></label>
     <input type="text" placeholder="Nhập số điện thoại" name="phone" required>
    <label for="psw"><b>Mật Khẩu</b></label>
     <input type="password" placeholder="Nhập Mật Khẩu" name="password" required>
    <label for="psw-repeat"><b>Nhập Lại Mật Khẩu</b></label>
     <input type="password" placeholder="Nhập Lại Mật Khẩu" name="re_password" required>
    
    <div class="clearfix">
       <button type="submit" class="signupbtn">Sign Up</button>
     </div>
   </div>
 </form>

 @endsection