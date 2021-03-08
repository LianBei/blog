<?php


namespace App\Http\Controllers\App\index;


use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\Input;

class ListController extends Controller
{
    public function index()
    {
        $keyword = Input::get('keyword');
        $Article = new Article();
        $comment = new Comment();
        $list_data=$Article->getAllData('5',[],['created_at'=>'desc']);
        //计算评论数
        if ($keyword) {
            $new_data = $Article->join('user','user.id','=','article.user_id')->select('article.*','user.username')->where('article.title', 'like', '%'.$keyword.'%')->orderBy('created_at','desc')->paginate('4');
        } else {
            $new_data = $Article->join('user','user.id','=','article.user_id')->select('article.*','user.username')->orderBy('created_at','desc')->paginate('4');
        }
        foreach ($new_data as $key => $value) {
            $new_data[$key]->count = $comment->where('article_id', $value->id)->count();
        }
        return view('App/index/list', compact('new_data','list_data','keyword'));
    }
}