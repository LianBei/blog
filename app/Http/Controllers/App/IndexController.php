<?php
namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller {
    public function index() {
        $user = new User();
        $user->getUser();
        // 获取所有数据
//        $data = $user->where('id' , '1')->orderBy('id','desc')->get();
//        foreach ($data as $key => $value) {
//            echo $value->id . $value->name. "<br>";
//        }
//        $data = DB::table('user')->where('id' , '1')->orderBy('id','desc')->get();

        // 获取单行数据 获取到的是一维数组
//        $data = $user->where('id' , '1')->first();
//        echo $data->id;
//        $data = DB::table('user')->where('id', '1')->first()

        //增加一行数据
//        $data= ['name' => 'wx', 'password' => Hash::make('45645')];
//        $user->insert($data);
//        DB::table('user')->insert($data);

        //更新一行数据
//        $data= ['name' => 'wx', 'password' => Hash::make('45645')];
//        $user->where('id' , '3')->update($data);
//        $data = DB::table('user')->where('id' , '3')->update($data);

//        //删除一行数据
//        $user->where('id' , '3')->delete();
//        DB::table('user')->where('id' , '3')->delete();
//
        $data = $user->paginate(3);
        return view('App/index/index', compact('data'));
    }

    public function test(){
        $test = 234;
        $arr2 = ['abc' => '12'];
        $arr3 = ['dsad' => '456'];
        $arr = ['index' => $arr2,'qwe' => $arr3];

        return view('App/test/test',compact('test','arr'));
    }

    /**
     * 退出登录
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout() {
        Session::forget('admin_name');
        return redirect('/login');
    }

    /**
     * 把代码转化为结果，显示在页面上的过程叫渲染
     * 渲染登录页面的视图
     */
    public function login() {
        return view('App/auth/index');
    }
}