<?php


namespace App\Http\Controllers\App\index;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\Input;

class InformationselfController extends Controller{
    public function index(){
        $session_id=session('user_id');
        $search = Input::get('keyword');
        $Article = new Article();
        $new_data = $Article->getAllData('5',['user_id'=>$session_id],['id'=>'desc']);
        if ($search) {
            $data = $Article->getLikeData('5', ['title' => $search]);
        } else {
            $data = $Article->getAllData('5');
        }
        return view('App/index/informationself',compact('data','new_data'));
    }

    //删除数据
    public function delete(){
        $id = Input::get('id');
        $article = new Article();
        $data = $article->deleteData(['id' => $id]);
        if ($data){
            return redirect()->back()->with('success','删除成功');
        }else{
            return redirect()->back()->with('error','插入失败');
        }
    }

    //编辑数据
    public function edit(){

    }
    public function selfAdd(){
        $self_data['id']=session('id');
        $self_data['account']=Input::post('account');
        $self_data['password']=Input::post('password');
        $self_data['username']=Input::post('username');
        $self_data['pic']=Input::post('pic');
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
        $rule=[
          'account'=>'request | max:32',
          'username'=>'request',
        ];
        $message=[
          'account.request'=>'账号必填',
          'account.max'=>'账号不得超过32',
            'username.request'=>'网名必填'
        ];
    }
}