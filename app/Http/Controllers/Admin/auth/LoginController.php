<?php
namespace App\Http\Controllers\Admin\auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {
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
               session(['admin_id'=>$row->id,'admin_account'=>$row->account, 'admin_name' => $row->admin_name]);
               return redirect('/admin/index');
           }else{
                return redirect()->back()->with('error','密码错误');
            }
       }
    }
    /**
     * 退出登录
     */
    public function logout(){
        Session::forget('admin_id');
        Session::forget('admin_account');
        Session::forget('admin_name');
        return redirect('login');
    }
}