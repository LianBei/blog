<?php


namespace App\Http\Controllers\App\index;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class InformationselfController extends Controller{
    public function index(){
        $session_id=session('user_id');
        $search = Input::get('keyword');
        $Article = new Article();
        $new_data = $Article->join('user','user.id','=','article.user_id')->select('article.*','user.username')->where(['user_id'=>$session_id])->paginate('5');
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
        $edit_id=Input::get('id');
        $article = new Article();
        $edit_data = $article->getRow(['id'=>$edit_id]);
        return view('App/index/edit',compact('edit_data'));
    }

    //编辑表单提交
    public function check(Request $request){
        $id = Input::post('id');
        $article = new Article();
        $check_data['title']=Input::post('title');
        $check_data['content']=Input::post('content');
        $file = $request->file('pic');
        if ($file) {
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext!='png') {
                return redirect()->back()->with('error', '图片格式错误');
            } else {
                $path = $request->file('pic')->store('public/images/article');
                //获取 / 以后的字符串
                $arr = explode('/', $path);
                $check_data['pic'] = end($arr);
            }
        }else {
            $row = $article->getRow(['id' => $id]);
            $check_data['pic'] = $row->pic;
        }
        $rule=[
            'title'=>'required | max:32',
            'content'=>'required',
        ];
        $message=[
            'title.required'=>'标题必填',
            'title.max'=>'标题不得超过32',
            'content.required'=>'内容必填'
        ];

        if ($this->validate($request,$rule,$message)){
            $result = $article->updateData(['id' => $id],$check_data);
            if ($result){
                return redirect()->back()->with('success','更新成功');
            }else{
                return redirect()->back()->with('error','更新失败');
            }
        }
    }


    public function selfAdd(Request $request){
        $id=session('user_id');
        $self_data['account']=Input::post('account');
        $self_data['username']=Input::post('username');
        $self_data['pic']= '';
        $file = $request->file('pic');
        $user = new User();
        if ($file) {
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext!='png') {
                return redirect()->back()->with('error', '图片格式错误');
            } else {
                $path = $request->file('pic')->store('public/images/article');
                //获取 / 以后的字符串
                $arr = explode('/', $path);
                $self_data['pic'] = end($arr);
            }
        } else {
            $row = $user->getRow(['id' => $id]);
            $self_data['pic'] = $row->pic;
        }
        $rule=[
            'account'=>'required | max:32',
            'username'=>'required',
        ];
        $message=[
            'account.required'=>'账号必填',
            'account.max'=>'账号不得超过32',
            'username.required'=>'网名必填'
        ];
        if ($this->validate($request,$rule,$message)){
            $result = $user->updateData(['id' => $id],$self_data);
            if ($result){
                session(['user_account' => $self_data['account'],'pic'=>$self_data['pic'],'user_username'=>$self_data['username']]);
                return redirect()->back()->with('success','更新成功');
            }else{
                return redirect()->back()->with('error','更新失败');
            }
        }
    }
}