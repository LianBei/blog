<?php


namespace App\Http\Controllers\App\index;


use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Support\Facades\Input;

class ListController extends Controller {
   public function index(){
       $search = Input::get('keyword');
       $Article = new Article();
       $new_data = $Article->getAllData('5');
       if ($search){
           $data = $Article->getLikeData('5',['title'=>$search]);
       }else{
           $data = $Article->getAllData('5');
       }
       return view('App/index/list',compact('data', 'new_data'));
   }
}