<?php


namespace App\Http\Controllers\App\auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class RegisteredController extends Controller{
    public function index(){
        return view('App/auth/registered');
    }

    public function check(Request $request){
        $data['account'] = Input::post('account');
        $data['password'] = Input::post('password');
        $data['password']=Hash::make($data['password']);
        $data['username'] = Input::post('username');
        //图片获取
//        $file = $request->file('pic');
//        $ext = $file->getClientOriginalExtension();
        $file = $request->file('pic');
        $ext = $file->getClientOriginalExtension();
        if ($ext != 'jpg' && $ext!='png') {
            return redirect()->back()->with('error', '图片格式错误');
        } else {
            $path = $request->file('pic')->store('public/images/article');
            //获取 / 以后的字符串
            $arr = explode('/', $path);
            $data['pic'] = end($arr);
        }

        $rule = [
            'account' => 'required | max:8 ',
            'password' => 'required | max:16',
            'username' => 'required | max:8'
        ];
        $message = [
            'account.required' => '账号必填',
            'password.required' => '密码必填',
            'username.required' => '用户名必填',
            'account.max' => '用户名不能超过8个字',
            'password.max' => '密码不能超过16个字',
            'username.max' => '密码不能超过8个字',
        ];
        if ($this->validate($request, $rule , $message)) {
            $user = new User();
            $row = $user->getRow(['account'=> $data['account']]);
            if ($row) {
                return redirect()->back()->with('error', '用户名已存在');
            }else{

                $row = $user->insertData($data);
                if ($row){
                    return redirect('/app/login');
                }else{
                    return redirect()->back()->with('error','注册失败');
                }
            }
        }
    }
}
