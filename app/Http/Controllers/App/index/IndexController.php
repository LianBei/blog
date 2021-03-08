<?php


namespace App\Http\Controllers\App\index;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller{
    public function index(){
        $keyword = Input::get('keyword')??"";
        $Article = new Article();
        $comment = new Comment();
        $data = $Article->join('user','user.id','=','article.user_id')->select('article.*','user.username')->orderBy('created_at','desc')->paginate('4');

        //计算评论数
        foreach ($data as $key => $value) {
            $data[$key]->count = $comment->where('article_id', $value->id)->count();
        }
        $first_data=$Article->getRow(['id'=>1]);
        return view('App/index/index',compact('data','first_data','keyword'));
    }

    public function details(){
        $id = Input::get('id');
        $article = new Article();
        $comment = new Comment();
        $new_article =  $article->join('user','user.id','=','article.user_id')->select('article.*','user.username')->paginate('5');
        $comment_data= $comment->getAllData('4',['article_id'=>$id]);
        $data = $article->join('user','user.id','=','article.user_id')->select('article.*','user.username')->where(['article.id'=>$id])->first();
        return view('App/index/details',compact('data','new_article','comment_data'));
    }
    public function add(){
        $Article = new Article();
        $new_data = $Article->getAllData('5',[],['id'=>'desc']);
        return view('App/index/add',compact('new_data'));
    }

    public function check(Request $request){
        $data['title']=Input::post('title');
        $data['content']=Input::post('article');
        $data['user_id']=session('user_id');
        $file = $request->file('pic');
        if ($file) {
            $ext = $file->getClientOriginalExtension();
            if ($ext != 'jpg' && $ext!='png') {
                return redirect()->back()->with('error','图片格式错误');
            } else {
                $path = $request->file('pic')->store('public/images/article');
                $arr = explode('/', $path);
                $data['pic'] = end($arr);
            }
        }
        $rule = [
            'title' => 'required | max:30',
            'article' => 'required | max:2000',
        ];
        $message = [
            'title.required' => '标题必填',
            'title.max' => '标题不得超过30字',
            'article.required' => '内容必填',
            'article.max'=>'内容不得超过2千字'
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

    public function comment(Request $request){
        $data['user_id']=session('user_id');
        $data['comment']=Input::post('comment');
        $data['article_id']=Input::post('id');
        $rule = [
            'comment' => 'required | max:500',
        ];
        $message=[
            'comment.required' =>'评论内容必填',
            'comment.max'=>'内容不得超过500字'
        ];
        if ($this->validate($request,$rule,$message)){
            $comment = new Comment();
            $result = $comment->insertData($data);
            if ($result){
                return redirect()->back()->with('success','插入成功');
            }else{
                return redirect()->back()->with('error','插入失败');
            }
        }
    }


}