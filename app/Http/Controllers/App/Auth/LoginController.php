<?php
namespace App\Http\Controllers\App\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {
    public function index(){
        return view('App/auth/login');
    }
    public function check(Request $request) {
        $data['account'] = Input::post('account');
        $data['password'] = Input::post('password');
        $rule = [
            'account' => 'required | max:8 | exists:user,account',
            'password' => 'required | max:16'
        ];
        $message = [
            'account.required' => '用户名必填',
            'password.required' => '密码必填',
            'account.max' => '用户名不能超过8个字',
            'account.exists' => '用户名不存在',
            'password.max' => '密码不能超过16个字',
        ];
        if ($this->validate($request, $rule , $message)) {
            $user = new User();
            $row = $user->where('account', $data['account'])->first();
            if (Hash::check($data['password'] , $row->password)){
                session(['user_account' => $data['account'],'user_id'=>$row['id'],'pic'=>$row['pic'],'user_username'=>$row['username'],'user_password'=>$row['password']]);
                return redirect('/');
            } else {
                return redirect()->back()->with('error' , '密码错误');
            }
        }
    }
    /**
     * 退出登录
     */
    public function logout(){
        Session::forget('user_id');
        Session::forget('user_account');
        return redirect('/');
    }
}