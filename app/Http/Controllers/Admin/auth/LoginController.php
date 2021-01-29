<?php
namespace App\Http\Controllers\Admin\auth;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller{
    public function index(){
//        echo Hash::make('1');
        return view('Admin/auth/login');
    }

    public function check(Request $request){
        $account = Input::get('account');
        $password = Input::get('password');
        $rule = [       //rule是规则
            'account' => 'required | exists:admin,account',
            'password' => 'required',
        ];
        $message = [    //message是提示信息
            'account.required' => '账号未填',
            'account.exists' => '账号不存在',
            'password.required' => '密码未填',
        ];
        if ($this->validate($request,$rule,$message)){
            $admin = new Admin();
            $row = $admin->getRow(['account' => $account]);
            if (Hash::check($password,$row->password)){
               session(['admin_id'=>$row->id,'admin_account'=>$row->account]);
               return redirect('/admin/index');
           }else{
                return redirect()->back()->with('error','密码错误');
            }
       }
    }
}