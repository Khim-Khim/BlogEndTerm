<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
class LoginController extends Controller
{
    public function getLogin(){
      return view('login.login');
    }
    public function postLogin(Request $req){
      $this->validate($req,
          [
            'email'=>'required|email',
            'password'=>'required|min:6|max:20'

          ],

          [
              'email.required'=>'Vui lòng nhập email',
              'email.email'=>'Định dạng email không đúng',
              'password.required'=>'Vui lòng nhập mật khẩu',
              'password.min' =>'Mật khẩu phải trên 6 ký tự',
              'password.max'=>'Mật khẩu không quá 20 ký tự'
          ]

      );   
               $check = array('email'=>$req->email,'password'=>$req->password);
              if(Auth::attempt($check)){
                return redirect()->route('trangchu');
              }
              else {
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập thất bại: sai tài khoản hoặc mật khẩu']);
              }
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('trangchu');
   }

}
