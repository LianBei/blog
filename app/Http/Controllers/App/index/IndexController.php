<?php


namespace App\Http\Controllers\App\index;


use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller{
    public function index(){
        $Article = new Article();
        $data = $Article->getAllData('6');
        return view('App/index/index',compact('data'));
    }
    public function details(){
        $id = Input::get('id');
        $article = new Article();
        $data = $article->join('user','user.id','=','article.user_id')->select('article.*','user.username')->where(['article.id'=>$id])->first();
        return view('App/index/details',compact('data'));
    }
}