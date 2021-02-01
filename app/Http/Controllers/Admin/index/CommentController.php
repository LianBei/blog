<?php
namespace App\Http\Controllers\Admin\index;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Support\Facades\Input;

class CommentController extends Controller {
    public function index(){
        $comment = new Comment();
        $data = $comment->join('article','article.id','=','comment.article_id')->join('user','user.id','=','comment.user_id')->select('comment.*','user.username','article.title')->paginate(5);
        return view('Admin/index/comment',compact('data'));
    }
    public function delete(){
        $id = Input::get('id');
        $comment = new Comment();
        $data = $comment->deleteData(['id' => $id]);
        if ($data){
            return redirect()->back()->with('success','删除成功');
        }else{
            return redirect()->back()->with('error','插入失败');
        }
    }
}