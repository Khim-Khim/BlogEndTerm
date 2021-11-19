<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
class SigninController extends Controller
{
     public function getform(){
        return view('login.signup');
    }

     public function postSignin(Request $req){
        $this->validate($req,
          [
           'email'=>'required|email|unique:users,email',
           'password'=>'required|min:6|max:20',
           'name'=>'required',
           're_password' =>'required|same:password'],


          [
            'email.required'=>'Vui lòng nhập email',
            'password.required'=>'Vui lòng nhập mật khẩu',
            're_password.same'=>'mật khẩu nhập lại không đúng',
            'email.email'=> 'vui lòng nhập email đúng định dạng',
            'email.unique'=>'Email đã được sử dụng',
            'password.min'=> 'mật khẩu có ít nhất 6 ký tự',
            'password.max'=>'mật khẩu không được quá 20 kí tự']
        );
        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->phone = $req->phone;
        $user->password = Hash::make($req->password);
        $user->admin= "0";
        $user->save();
        return redirect()->back()->with('thanhcong','Bạn đã đăng kí thành công ');
    }
}
