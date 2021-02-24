<?php


namespace App\Http\Controllers\App\index;


use App\Http\Controllers\Controller;
use App\Models\Article;

class IndexController extends Controller{
    public function index(){
        $Article = new Article();
        $data = $Article->getAllData('6');
        return view('App/index/index',compact('data'));
    }
}