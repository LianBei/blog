<?php
namespace App\Http\Controllers\Admin\index;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller {
    public function index(){
        $article = new Article();
        $comment = new Comment();
        $info = DB::selectOne("select version() as v;");
        $v=$info->v;
        $data = $article->join('user','user.id','=','article.user_id')->select('article.*','user.username')->paginate('5');
        foreach ($data as $key=>$value){
            $data[$key]->count = $comment->where('article_id', $value->id)->count();
        }
        return view('Admin/index/index',compact('v'));
    }
}