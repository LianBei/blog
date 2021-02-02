<?php


namespace App\Http\Controllers\Admin\index;


use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Input;

class DetailsController extends Controller{
    public function index(){
        $id = Input::get('id');
        $article = new Article();
        $data = $article->getRow([$id=>'id']);
        return view('Admin/index/details',compact('data'));
    }
}