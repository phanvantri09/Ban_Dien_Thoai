<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use App\Http\Requests\User\UserRegister;
use App\Http\Requests\User\UserLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function newpass($email){
        return view('page.newpass', compact('email'));
    }
    public function postpasss(Request $request){
        $pass = $request->password;
        $email = $request->email;
        $user = User::where('email','=',$email)->get();
        //dd($user->id);
        if(!empty($user[0]->id)){
            $user[0]->password = Hash::make($request->password);
            $user[0]->save();
            return redirect()->route('home.login')->with('error',"Mời bạn đăng nhập");
        }
        else{
            return redirect()->route('home.newpass', $email)->with('error',"Lỗi");
        }
    }
    public function getemail(Request $request){
        $email = $request->email;
        $user = User::where('email','=',$email)->get();
    
        if(!empty($user[0]->id)){
            return redirect()->route('home.newpass', $email);
        }
        {
            return redirect()->route('home.changepass')->with('error',"Không có email nào như vậy");
        }
    }
    public function changepass(){
        return view('page.changepass');
    }
    //mật khẩu 12345678
    public function Login(){
        return view('page.login');
    }
    public function Register(){
        return view('page.register');
    }
    public function PostRegister(UserRegister $request){
        if(! Hash::check($request->password, $request->password2))
        {
            if(User::create([
                'email'=>$request->email, 
                'password'=>Hash::make($request->password),
                'level'=> 1
                ])){
                return redirect()->route('home.login')->with('success',"Đăng ký thành công");
            }else
            {
                return redirect()->route('home.register')->with('error',"Không hợp lệ vui lòng làm lại!");
            }
        }else
        return redirect()->route('home.register')->with('error',"Lỗi mật khẩu không giống nhau!");
    }
    public function PostLogin(UserLogin $request){
        //dd($request->all());
        $rememberMe = $request->has('rememberMe') ? TRUE : FALSE;
        $dataUser =[
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if (Auth::attempt($dataUser, $rememberMe))
        {
            $user = User::where(["email" => $request->email])->first();
            $level = $user->level;
            Auth::login($user, $rememberMe);
            if($level == 1){
                return redirect()->route('home')->with('success','Successfully Register, You can login!');
            }
            else{
                return redirect()->route('admin.listProduct')->with('success','Successfully Register, You can login!');
            }
        }else if(Auth::attempt($dataUser))
        {
            $user = User::where(["email" => $request->email])->first();
            $level = $user->level;
            Auth::login($user);
            if($level == 1){
                return redirect()->route('home')->with('success','Successfully Register, You can login!');
            }
            else{
                return redirect()->route('admin.listProduct')->with('success','Successfully Register, You can login!');
            }
            }
        {
            return redirect()->route('home.login')->with('error','Error Register, Again!');
        }
    }
    public function view()
    {
        $products = Product::orderBy('id','DESC')->search()->paginate(20);
        
        return view('pages.content.home', compact(['products']));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('home');
    }
}
