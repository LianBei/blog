<?php
namespace App\Http\Controllers\Admin\index;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ArticleController extends Controller {
    public function index(){
        $article = new Article();
        $comment = new Comment();
        //链接数据库的内容
        $data = $article->join('user','user.id','=','article.user_id')->select('article.*','user.username')->paginate('5');
        //计算评论数
        foreach ($data as $key => $value) {
            $data[$key]->count = $comment->where('article_id', $value->id)->count();
        }
        return view('Admin/index/article',compact('data'));
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
    //添加
    public function add(Request $request){
        $data['title'] = Input::post('title');
        $data['user_id'] = Input::post('user_id');
        $data['content'] = Input::post('content');
        $rule = [
            'title' =>'required',
            'user_id'=>'required',
            'content'=>'required'
        ];
        $message = [
            'title.required'=>'标题必填',
            'user_id.required'=>'作者必填',
            'content.required'=>'内容必填',
        ];
        if ($this->validate($request,$rule,$message)){
             $article = new Article();
             $result = $article->insertData($data);
             if ($result){
                 return redirect()->back()->with('success','插入成功');
             }else{
                 return redirect()->back()->with('error','插入失败');
             }
        }
    }
    public function details(){
        $id = Input::get('id');
        $article = new  Article();
        $data = $article ->getRow(['id'=>$id]);
        if ($data){
            return redirect()->back()->with('success','插入成功');
        }else{
            return redirect()->back()->with('error','插入失败');
        }
    }
}
