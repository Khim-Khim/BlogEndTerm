 @extends('master')
 @section('content')
  
<form action="{{route('dangnhapform')}}" method="post" class="beta-form-checkout">
   @csrf
            <div class="col-sm-3"></div>
                     @if(Session::has('flag'))  
                     <div class="alert alert-{{Session::get('flag')}}">
                           {{Session::get('message')}}
                        </div>
                     @endif
                  
   <div class="container">
     <h1>Đăng nhập</h1>
     <p>nhập email và mật khẩu đã được đăng kí với chúng tôi</p>
     <hr>
      
    <label for="email"><b>Email</b></label>
     <input type="text" placeholder="Nhập Email" name="email" required>

    <label for="psw"><b>Mật Khẩu</b></label>
     <input type="password" placeholder="Nhập Mật Khẩu" name="password" required>
    
   
    <div class="clearfix">
       <button type="submit" class="signupbtn">Sign Up</button>
     </div>
   </div>
 </form>

 @endsection