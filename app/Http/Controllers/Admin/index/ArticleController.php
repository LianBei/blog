<?php
namespace App\Http\Controllers\Admin\index;

use Illuminate\Routing\Controller;

class ArticleController extends Controller{
    public function index(){
        return view('Admin/index/article');
    }
}
