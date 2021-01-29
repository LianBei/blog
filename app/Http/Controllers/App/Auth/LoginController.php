<?php
namespace App\Http\Controllers\App\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller {
    public function index(Request $request) {
        $data['name'] = Input::post('name');
        $data['password'] = Input::post('password');
        $rule = [
            'name' => 'required | max:8 | exists:user,name',
            'password' => 'required | max:16'
        ];
        $message = [
            'name.required' => '用户名必填',
            'password.required' => '密码必填',
            'name.max' => '用户名不能超过8个字',
            'name.exists' => '用户名不存在',
            'password.max' => '密码不能超过16个字',
        ];
        if ($this->validate($request, $rule , $message)) {
            $user = new User();
            $row = $user->where('name', $data['name'])->first();
            if (Hash::check($data['password'] , $row->password)){
                session(['admin_name' => $data['name']]);
                return redirect('/');
            } else {
                return redirect()->back()->with('error' , '密码错误');
            }
        }
    }
}