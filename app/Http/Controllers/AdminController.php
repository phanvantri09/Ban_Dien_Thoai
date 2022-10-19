<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\changepass;
class AdminController extends Controller
{
    //
    public function changepass(User $id){
        return view('admin.user.changepass',compact('id'));
    }
    public function postchangepass(changepass $request, User $id){
        $dataUser =[
            'email'=>$id->email,
            'password'=>$request->passold
        ];
        if(Auth::attempt($dataUser)){
            $id->password = Hash::make($request->passnew);
            $id->save();
            return redirect()->route('admin.listBill')->with('success',"Đổi mật khẩu thành công");
        }
        else{
            return redirect()->route('admin.changepass', $id->id)->with('error',"Đổi mật khẩu không thành công");
        }
    }
}
